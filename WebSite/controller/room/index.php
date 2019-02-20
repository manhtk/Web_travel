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
            
            $limit = $db->getPag();
            echo $limit;
            $paged = isset($_GET['page']) ? $_GET['page'] : 1;
            if(empty($paged) || !is_numeric((float)$paged))
                $paged = 1;

            $offset = ($paged - 1) * $limit;

            $data = $db->getAllDataBase($tbl1,$tbl2,$id,$offset,$limit);

            $count = $db->phantrang($tbl2);
            require_once("view/setting/test-phantrang.php");
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