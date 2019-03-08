<?php
/**
 * Created by PhpStorm.
 * User: Jream
 * Date: 2/16/2019
 * Time: 1:52 PM
 */
class User_Model extends Model {
	public function __construct() {
        parent::__construct();
	}
    public function getUsers($limit = false){
	    $sql = "SELECT * FROM user";
	    if($limit && is_numeric($limit)){
	        $sql .= " LIMIT 0,{$limit}";
        }

        $res = $this->query($sql);

        $data = [];
        if($res->num_rows > 0){
            while($row = $res->fetch_assoc()){
                $data[] = $row;
            }
        }
        return $data;
    }
    public function getRoom($room_id,$limit = false){
        $sql = "SELECT * FROM room WHERE room_id='{$room_id}'";
        if($limit && is_numeric($limit)){
            $sql .= " LIMIT 0,{$limit}";
        }

        $res = $this->query($sql);
        $data = [];
        if($res->num_rows > 0){
            while($row = $res->fetch_assoc()){
                $data[] = $row;
            }
        }
        return $data;

    }
    public function getNamehotel($hotel_id){
        $sql = "SELECT  hotel_name
        FROM hotel WHERE hotel_id = {$hotel_id}";
       
        $res = $this->query($sql);
        $data = [];
        if($res->num_rows > 0){
            while($row = $res->fetch_assoc()){
                $data[] = $row;
            }
        }
        return $data;

    }
    public function getAmenities($limit = false){
        $sql = "SELECT amenities_name, icon FROM amenities ";
        if($limit && is_numeric($limit)){
            $sql .= " LIMIT 0,{$limit}";
        }
        $res = $this->query($sql);
        $data = [];
        if($res->num_rows > 0){
            while($row = $res->fetch_assoc()){
                $data[] = $row;
            }
        }
        return $data;

    }
}