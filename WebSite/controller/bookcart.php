<?php
/**
 * Created by PhpStorm.
 * User: Jream
 * Date: 2/16/2019
 * Time: 1:48 PM
 */
class bookcart extends Controller {

	public function view(){
        $res = $this->model->getRoomDetal();
        $getinfo = $this->model->getInfoUser();
		$this->view->render('site/cart/view', array('data' => $res,'infouser' => $getinfo));
	}
	public function view1(){
        $res = $this->model->getUsers(4);
		$this->view->render('cart/add-cart', array('data' => $res));
	}

	function checkout(){
		if(isset($_POST['checkout_submit'])){
			$data = $_POST;
			$cart_data = $this->model->getRoomDetal();
			dd($data);
			$cart=(array_shift($cart_data));
			dd($cart);
			$totalmoney = $cart['price']*110/100;
			dd($totalmoney);
			$array_insert = array(
				$data['st_user_id'],
				$cart['room_id'],
				$totalmoney,				
			);

		}
	}
}