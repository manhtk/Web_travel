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
                    // echo "<script>
                    // window.location.href='admin.php?controller=room&action=add';
                    // <script>";
                 }
            }
            require_once ("view/room/add_room.php");
            break;
    }
        
            
    case "update": {  
           if (isset($_GET['id'])) {
                $table = 'room';
                $id = $_GET['id'];
                $value = $db->getDataUpdate($table, $id);
                if (isset($_POST['update_room'])) {
                    $val = $_POST["room"];

                    if ($db->updateData($table, $id, $val)   ) {
                        echo "
                    <script>
                        window.location.href ='admin.php?controller=room&action=list';
                </script>";
                    } else {
                        echo "Can't update data because duplicate id of hotel. Please check again!";
                        echo "<br>";
                        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
                        break;
                    }
                }
            }
     
            require_once 'view/room/update_room.php';
            break;

        }

    // case "delete":
    //     {
    //         if (isset($_GET['id'])) {
    //             $table = 'room';
    //             $id = $_GET['id'];
    //             if ($db->deleteData($table, $id)) {
               
    //         }
    //     }

    case "search":
        {
            if (isset($_GET['key'])) {
                $key = $_GET['key'];
                $data_Search = $db->searchData('room', 'hotel', 'hotel_id', 'room_name','', $key);
            }
            require_once("view/room/search_room.php");
            break;
        }    
    case "delete_one":
        {
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                if ($db->deleteData('room', 'room_id', $id)) {
                    echo "Delete record success";
                }
            }
        }

    case "delete_all":
        {
            if (isset($_POST['delete'])) {
                $checkbox = $_POST['checkbox'];
                while (list ($key, $value) = @each($checkbox)) {
                    $db->deleteData('room', 'room_id', $value);
                    echo "
                 <script type='text/javascript'>
                        window.location.href ='admin.php?controller=room&action=list';
                </script>";
                }
            }
            
        }

     case 'list':
        {
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
        }
    default:
        {
            
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
        }
}
?>