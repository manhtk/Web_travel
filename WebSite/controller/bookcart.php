<?php
class bookcart extends Controller {
	public function view(){
        $res = $this->model->getRoomDetal();
        $getinfo = $this->model->getInfoUser();
		$this->view->render('site/cart/view', array('data' => $res,'infouser' => $getinfo));
	}
	public function checkout(){
		if(isset($_POST['checkout_submit'])){
			$data = $_POST;
			$cart_data = $this->model->getRoomDetal();
			$cart=(array_shift($cart_data));
			$totalmoney = $cart['price']*110/100;
			$array_insert = array(
				$data['st_user_id'],
				$cart['room_id'],
				$totalmoney				
			);
		}
		$key1=$data['st_user_id'];
		$key2=$cart['room_id'];
		$res= $this->model->insertBill($array_insert);
		$search=$this->model->searchBill($key1,$key2);
		$this->view->render('site/cart/booking-success',array('data'=>$res,'list'=>$search));
	}
	public function listBill()
	{
		$res= $this->model->listBill();
		$this->view->render('site/cart/list_bill',array('list'=>$res));
	}
}