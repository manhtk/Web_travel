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
		$key2=$_SESSION['currUser'];
		$res = $this->model->getRoomDetal($key1);
		$getinfo = $this->model->getInfoUser($key2);
		$this->view->render('site/cart/view', array('data' => $res,'infouser' => $getinfo,'stss'=>$cart_data));
	}
	public function checkout(){
		$cart_checkout = $_SESSION['st_cart'];
		$key1=$cart_checkout['room_id'];
		$cart_data = $this->model->getRoomDetal($key1);
		if(isset($_POST['checkout_submit'])){
			$data = $_POST;
			
			$cart=(array_shift($cart_data));
			$totalmoney = $cart['price']*110/100;
			$order_date = date('d-m-Y');
			$array_insert = array(
				$data['st_user_id'],
				$cart['room_id'],
				'"' . $cart_checkout['startday'] . '"',
				'"' . $cart_checkout['endday'] . '"',
				$totalmoney,
				'"' . $order_date . '"'				
			);
			$this->model->insertBill($array_insert);	
		}
		 
		$key2=$_SESSION['currUser'];
		$search=$this->model->getInfoUser($key2);
		$dataUser=array_shift($search);
		if(isset($_POST['checkout_submit'])){
			
			$post_user = $_POST;
			if(isset($key2)){
			$cart = $_SESSION['st_cart'];
				$value1=$post_user['st_first_name'];
				$value2=$post_user['st_last_name'];
				$value3=$post_user['st_email'];
				$value4=$post_user['st_phone'];
				$value5=$post_user['st_address'];
				$value6=$post_user['st_address2'];
				$value7=$post_user['st_city'];
				$value8=$post_user['st_province'];
				$value9=$post_user['st_zip_code'];
				$value10=$post_user['st_country'];
				$value11=$post_user['st_note'];

				$this->model->updateUser($value1,$value2,$value3,$value4,$value5,$value6,$value7,$value8,$value9,$value10,$value11, $key2);
			}
			else{
				$regisdate= date('d-m-Y');
				$arr_user = array(
					$post_user['st_email'],
					$post_user['st_phone'],
					'4',
					$post_user['st_first_name'],
					$post_user['st_last_name'],
					$post_user['st_address'],
					$post_user['st_address2'],
					$post_user['st_city'],
					$post_user['st_email'],
					'"' . $regisdate . '"',
					$post_user['st_province'],
					$post_user['st_zip_code'],
					$post_user['st_country'],
					$post_user['st_note']
				);
				$this->model->insertUser($arr_user);
			}
			header('location: http://webhotel.com:8080/?c=bookcart&a=checkout');
		}
		
		$get_room = $this->model->getRoomDetal($key1);
		$this->view->render('site/cart/booking-success',array('list'=>$dataUser,'room'=>$get_room));

		//hàm lấy datenow
		//$curr_date = date('Y-m-d');
	}
	public function listBill()
	{
		$res= $this->model->listBill();
		$this->view->render('site/cart/list_bill',array('list'=>$res));
	}
}