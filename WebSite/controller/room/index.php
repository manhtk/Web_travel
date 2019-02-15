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

        }
    case "delete":
        {

        }
     case 'list':
              $tbl = "room";
            $data = $db->getAllData($tbl);
             require_once('view/room/list_room.php');
            break;   
    default:
        {
            $tbl = "room";
            $data = $db->getAllData($tbl);
            require_once('view/room/list_room.php');
            break;
        }
}
?>