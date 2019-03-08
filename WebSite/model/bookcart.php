<?php
/**
 * Created by PhpStorm.
 * User: Jream
 * Date: 2/16/2019
 * Time: 1:52 PM
 */
class bookcart_model extends Model {
	public function __construct() {
        parent::__construct();
	}

	public function getAllUsers(){
	    $res = $this->query("SELECT * FROM user");
	    $data = [];
	    if($res->num_rows > 0){
            while($row = $res->fetch_assoc()){
                $data[] = $row;
            }
        }
        return $data;
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
    public function getID($tblTable, $id){
        $sql = "SELECT * FROM $tblTable WHERE id = '".$id."'";
        $this->execute($sql);
        if($this->num_rows()==0){
            return FALSE;
        }
        else{
            return $this->getData();
        }
    }
    public function getRoomDetal()
    {
        $sql = "SELECT * FROM hotel inner join room on hotel.hotel_id = room.hotel_id inner join city on hotel.city_id = city.city_id WHERE  room_id= 4";
        $res = $this->query($sql);
        $data = [];
        if($res->num_rows > 0){
            while($row = $res->fetch_assoc()){
                $data[] = $row;
            }
        }
        return $data;
    }
    public function getInfoUser()
    {
        $sql = "SELECT * from user where user_id = 1";
        $res = $this->query($sql);
        $data = [];
        if($res->num_rows > 0){
            while($row = $res->fetch_assoc()){
                $data[] = $row;
            }
        }
        return $data;
    }
    public function insertBill($bill_info)
    {
        $bill_info = implode(',', $bill_info);
        $sql_oder = "INSERT INTO bill(bill_id, user_id, room_id,totalmoney) VALUES (null,$bill_info)";
        $data = $this->query($sql_oder);
        
        return $data;
    }
    public function searchBill($key)
    {
        $sql="SELECT * from bill where user_id = '$key'";
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