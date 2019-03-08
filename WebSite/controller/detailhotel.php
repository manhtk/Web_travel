<?php
/**
 * Created by PhpStorm.
 * User: Rich Boy
 * Date: 3/6/2019
 * Time: 11:04 AM
 */
class DetailHotel extends Controller{
    public function view(){
        $res = $this->model->getHotel(1,'hotel_name');
        $this->view->render('site/detailhotel',array('data' => $res));
    }

}