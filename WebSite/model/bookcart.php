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
    public function getRoomDetal($key)
    {
        $sql = "SELECT * FROM hotel inner join room on hotel.hotel_id = room.hotel_id inner join city on hotel.city_id = city.city_id WHERE  room_id= '$key'";
        $res = $this->query($sql);
        $data = [];
        if($res->num_rows > 0){
            while($row = $res->fetch_assoc()){
                $data[] = $row;
            }
        }
        return $data;
    }
    public function getInfoUser($key)
    {
        $sql = "SELECT * from user where username = '$key' ";
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


        $sql_oder = "INSERT INTO bill(bill_id, user_id, room_id, checkin, checkout,totalmoney,date_order) VALUES (null,$bill_info)";

        
        $data = $this->query($sql_oder);
        
        return $data;
    }
    public function searchBill($key1,$key2)
    {
        $sql="SELECT * from bill inner join user on bill.user_id = user.user_id inner join room on bill.room_id = room.room_id where (bill.user_id = '$key1') and (bill.room_id='$key2')";
        $res = $this->query($sql);
        $data = [];
        if($res->num_rows > 0){
            while($row = $res->fetch_assoc()){
                $data[] = $row;
            }
        }
        return $data;
    }
    public function listBill()
    {
        // $sql="SELECT * from bill inner join user on bill.user_id = user.user_id inner join room on bill.room_id = room.room_id inner join promotion on bill.promotion_id = promotion.promotion_id";
        $sql="SELECT * from bill inner join user on bill.user_id = user.user_id inner join room on bill.room_id = room.room_id";
        $res = $this->query($sql);
        $data = [];
        if($res->num_rows > 0){
            while($row = $res->fetch_assoc()){
                $data[] = $row;
            }
        }
        return $data;
    }
    public function updateUser($data,$key)
    {
        
        $sql_1 = "SELECT * FROM user";
        $db = new Database();
        $sql_1 = mysqli_query($db->connect(), $sql_1);
        while ($result = mysqli_fetch_field($sql_1)) {
            $columns = $result->name;
            $datas_key[] = $columns;

        }
        $values = array_values($data);
         $combine = array_combine($datas_key, $values); 
        foreach ($combine as $key => $value) {
            $str[] = $key . "='" . $value . "'";
        }
        $sql = implode(",", $str);
        $query = "UPDATE user SET $sql WHERE user.username='$key'";
        return $this->query($query);
    }
}