<?php
class bookcart extends Controller {

	public function view(){
		if(isset($_POST['room_add_to_cart'])){
			$post_data = $_POST;
			unset($post_data['room_add_to_cart']);
			dd($post_data);
			unset($_SESSION['st_cart']);			
			$_SESSION['st_cart'] = $post_data;
			header('location: http://webhotel.com:8080/?c=bookcart&a=view');
		}
	
		
		$cart_data = $_SESSION['st_cart'];
		$key1=$cart_data['room_id'];
		dd($cart_data);
		$key2=$_SESSION['currUser'];

        $res = $this->model->getRoomDetal($key1);
        $array=array(
			$res,
			$cart_data['start_day'],
			$cart_data['endday']
		)
        $getinfo = $this->model->getInfoUser($key2);
		$this->view->render('site/cart/view', array('data' => $array,'infouser' => $getinfo));
	}
	public function checkout(){
		
		$cart_checkout = $_SESSION['st_cart'];
		
		$key1=$cart_checkout['room_id'];
		if(isset($_POST['checkout_submit'])){
			$data = $_POST;
			$cart_data = $this->model->getRoomDetal($key1);
			$cart=(array_shift($cart_data));
			$totalmoney = $cart['price']*110/100;
			$array_insert = array(
				$data['st_user_id'],
				$cart['room_id'],
				$cart_checkout['checkin'],
				$cart_checkout['checkout'],
				$totalmoney				
			);
		}
		$key2=$_SESSION['currUser'];
			
		$key=$cart['room_id'];
		$get_room = $this->model->getRoomDetal($key1);
		$res= $this->model->insertBill($array_insert);
		$search=$this->model->getInfoUser($key2);
		$this->view->render('site/cart/booking-success',array('data'=>$res,'list'=>$search,'room'=>$get_room));

		//hàm lấy datenow
		//$curr_date = date('Y-m-d');
	}
	public function listBill()
	{
		$res= $this->model->listBill();
		$this->view->render('site/cart/list_bill',array('list'=>$res));
	}
}