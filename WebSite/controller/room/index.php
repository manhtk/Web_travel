<?php
include_once 'model/DB.php';
if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = " ";
}

switch ($action) {
    case "add":
    {
       if(isset($_POST['add_room']))
            {
                $value = $_POST["room"];
                $table = "room";
                if(!$db->insertData($table, $value)) {
                    echo "Can't insert data because duplicate id of room. Please check again!";
                    echo "<br>";
                    echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
                
                 } else
                 {
                    echo "Successful.";
                 }
            }
            require_once ("view/room/add_room.php");
            break;
    }
        
            
    case "update": {  
     if(isset($_GET['id'])){
           $id = $_GET['id'];
              $tbl = "room";
              $dataID = $db->getDataID($tbl,$id);
            echo var_dump($dataID);
        }
            require_once 'view/room/edit_room.php';
            break;

        }
    case "delete":
        {

        }
     case 'list':
          
              $tbl2 = "room";
               $tbl1 = "hotel";
               $id = "hotel_id";
            
            $limit = $db->getPag();
            $paged = isset($_GET['page']) ? $_GET['page'] : 1;
            if(empty($paged) || !is_numeric((float)$paged))
                $paged = 1;

            $offset = ($paged - 1) * $limit;

            $data = $db->getAllDataBase($tbl1,$tbl2,$id,$offset,$limit);

            $count = $db->phantrang($tbl2);
            require_once("view/room/list_room.php");
            break;
    default:
        {
            
              $tbl2 = "room";
               $tbl1 = "hotel";
               $id = "hotel_id";

            $data1 = $db->getALLDataBase($tbl1,$tbl2,$id);
             require_once('view/room/list_room.php');
            break;   
        }
}
?>