<?php
/**
 * Created by PhpStorm.
 * User: Rich Boy
 * Date: 3/6/2019
 * Time: 11:04 AM
 */
class DetailHotel extends Controller{
    public function view(){
        $res = $this->model->getHotel(4,'hotel_name');
        $city_data = $this->model-> getCity(1);
        $hotel_data = $this->model->getNamehotel(3);
        $all_room=$this->model->getAllRoom();
        $this->view->render('site/detailhotel',array('data' => $res,'city_data'=>$city_data,'hotel_data'=>$hotel_data,'all_room'=>$all_room));

    }

}