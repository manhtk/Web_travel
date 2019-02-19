<?php

if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = " ";
}

switch ($action) {
    case "add":
        
            
    case "update":
        {
          $tbl2 = "room";
               $tbl1 = "hotel";
               $id = "hotel_id";
            
            $data = $db->getALLDataBase($tbl1,$tbl2,$id);

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
            
            $data = $db->getALLDataBase($tbl1,$tbl2,$id);
             require_once('view/room/list_room.php');
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