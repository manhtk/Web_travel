<?php
/**
 * Created by PhpStorm.
 * User: Jream
 * Date: 2/16/2019
 * Time: 1:52 PM
 */
class Room_Model extends Model {
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
    public function getRoom($room_id){
        $sql = "SELECT * FROM room WHERE room_id='{$room_id}'";
        

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
        $sql = "SELECT * from serviceconn inner join room on serviceconn.room_id_or_hotel_id = room.room_id inner join service on serviceconn.service_id = service.service_id where serviceconn.type = 'room'";
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