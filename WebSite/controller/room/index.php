<?php

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