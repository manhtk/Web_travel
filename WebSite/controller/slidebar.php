<?php 
class Slidebar extends Controller
{

 public function view(){
      
        $rs=$this->model->sortHotel();
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
      $rs = $this->model->sortHotel($offset, 12);
      $data = $this->model->getCity();
    $this->view->render('site/slidebar',array('data_hotel'=>$rs,'total_page' => $page, 'data_city' => $data,'count'=>$count));    
}

 public function search()
    {
        $key = $_GET['cityid'];
        $data = $this->model->getCity();
        if (!empty($key)) {
            $res = $this->model->searchData($key);
            $page = $this->model->slicePage($key);
        } else {
            $res = $this->model->getAllPrice();
            $page = $this->model->slicePage();
        }

        $count = count($res);

        $paged = isset($_GET['page']) ? $_GET['page'] : 1;
        $offset = ($paged - 1) * 12;
        if (empty($key)) {
            $result = $this->model->getAllPrice($offset, 12);
        } else {
            $result = $this->model->searchData($key, $offset, 12);
        }


        $this->view->render('site/slidebar_search', array('count' => $count, 'data' => $result, 'data_city' => $data, 'key' => $key, 'page' => $page));
    }



}
?>