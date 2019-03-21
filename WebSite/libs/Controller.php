<?php 
 class Controller{
 	public $model;
 	public $view;
 	public function __construct()
 	{
 		//Khởi tạo đối tượng trong controll base
 		session_start();
<<<<<<< HEAD
 		$this->view = new View();
 		
=======
 		$this->view = new View($this->getCartData());
>>>>>>> b28394a224e4e39ec8a820a946e619f183187bcd

 	}

 	public function getSiteURL(){
 		$site_url = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/';
 		return $site_url;
 	}
 	//Phương thức load Model trong controller
 	public function loadModel($name, $return = false)
 	{
 		$file_model = 'model/'. $name . '.php';
 		if(file_exists($file_model)){
 			require_once $file_model;
 			$name_model = $name .'_model';
 			if(!$return)
 				$this->model = new $name_model();
 			else{
 				$c_model = new $name_model();
 				return $c_model;
 			}
 		}
 	}

<<<<<<< HEAD
  
=======
 	public function getCartData(){
 		if(isset($_SESSION['st_cart'])){
 			$ss = $_SESSION['st_cart'];
 			$cModel = $this->loadModel('bookcart', true);
 			$dt_cart = $cModel->getRoomDetal($ss['room_id']);
 			//dd($dt_cart);
 			return $dt_cart;
 		}
 		return '';
 		
 	}
>>>>>>> b28394a224e4e39ec8a820a946e619f183187bcd
 	
 }
 ?>