<?php 
 class Controller{
 	public $model;
 	public $view;
 	public function __construct()
 	{
 		//Khởi tạo đối tượng trong controll base
 		session_start();
 		$this->view = new View();
 	}

 	public function getSiteURL(){
 		$site_url = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/';
 		return $site_url;
 	}
 	//Phương thức load Model trong controller
 	public function loadModel($name)
 	{
 		$file_model = 'model/'. $name . '.php';
 		if(file_exists($file_model)){
 			require_once $file_model;
 			$name_model = $name .'_model';
 			$this->model = new $name_model();
 		}
 	}
 	

 }

 ?>