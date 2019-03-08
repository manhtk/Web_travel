<?php 
  class Slidebar extends Controller
  {
  	
  	public function view(){
  		$res = $this->model->getSlidebar(12);
        $rs=$this->model->getAllPrice(12);
  		$this->view->render('site/slidebar',array('data'=>$res,'data_hotel'=>$rs));    
  	}
  }
 ?>