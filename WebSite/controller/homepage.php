<?php 
  /**
  * 
  */
  class HomePage extends Controller
  {
  	
  	public function view(){
  	 $res	 = $this->model->getHotel(16,'hotel_name');
     $data_city = $this->model->getCity(6,'city.city_id');
     $data = $this->model->getListCity();
  		$this->view->render('site/homepage',array( 'data' => $res,'data_city' => $data_city,'data_listcity' => $data));
  	}
    

  }
 ?>