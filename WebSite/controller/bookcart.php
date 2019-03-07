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
}