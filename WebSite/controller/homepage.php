<?php 
  /**
  * 
  */
  class HomePage extends Controller
  {
  	
  	public function view(){
  		$res = $this->model->getHotel(4,'hotel_name');
      
     
  		$this->view->render('site/homepage',array('data' => $res));    
  	}
    
    
  }
 ?>