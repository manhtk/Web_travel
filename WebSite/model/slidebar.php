<?php

class Slidebar_Model extends Model {
    public function __construct() {
        parent::__construct();
        
    }

    

    public function getSlidebar($limit = false){
        
        $sql = "SELECT *,ROUND(AVG(room.starnum),1) AS 'hotel_point' FROM  hotel
             INNER JOIN city ON hotel.city_id = city.city_id
             INNER JOIN room ON hotel.hotel_id=room.hotel_id GROUP BY hotel.hotel_id";
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
    public function getAllPrice($limit=false){
        $orderby = '';
        if(isset($_GET['optradio']))
            $orderby = $_GET['optradio'];
        
         $sql="SELECT *, MIN(room.price)AS hotel_price,ROUND(AVG(room.starnum),1) AS 'hotel_point' FROM hotel  
                                       INNER JOIN city ON hotel.city_id = city.city_id
                                       INNER JOIN room ON hotel.hotel_id=room.hotel_id 
                                       GROUP BY hotel.hotel_id";

        if(!empty($orderby)){
            switch ($orderby) {
                case 'low':
                    $sql .= " ORDER BY hotel_price ASC";
                    break;

                case 'hight':
                    $sql .= " ORDER BY hotel_price DESC";
                    break;

                case 'name_az':
                    $sql .= " ORDER BY hotel.hotel_name ASC";
                    break;

                case 'name_za':
                    $sql .= " ORDER BY hotel.hotel_name DESC";
                    break;
           
            }
        }
       
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