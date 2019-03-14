<?php 
class Slidebar extends Controller
{

 public function view(){
      
        $rs=$this->model->demo();
        $count=count($rs);

          if($count >= 12) {
            $count = 12;
          } 
          else {
            $count = $count;
          }
      $page=$this->model->getPage();
      $paged = isset($_GET['page']) ? $_GET['page'] : 1;

      $offset = ($paged - 1) * 12;
      $rs = $this->model->demo($offset, 12);

    $this->view->render('site/slidebar',array('data_hotel'=>$rs,'total_page' => $page));    
}


}
?>