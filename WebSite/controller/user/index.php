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
       if(isset($_POST['add_user']))
            {
                $value = $_POST["user"];
                $table = "user";
                $value[2] = md5($value[2]);
                if(!$db->insertData($table, $value)) {
                    echo "Can't insert data because duplicate id of room. Please check again!";
                    echo "<br>";
                    echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
                
                 } else
                 {
                    echo "Successful.";
                 }
            }
            require_once ("view/user/add_user.php");
            break;
    }
        
            
    case "update": {  
           if (isset($_GET['id'])) {
                $table = 'user';
                $id = $_GET['id'];
                $value = $db->getDataUpdate($table, $id);
                if (isset($_POST['update_user'])) {
                    $val = $_POST["user"];
                     $val[2] = md5($val[2]);
                    if ($db->updateData($table, $id, $val)) {
                        echo "
                    <script>
                        window.location.href ='admin.php?controller=user&action=list';
                </script>";
                    } else {
                        echo "Can't update data because duplicate id of hotel. Please check again!";
                        echo "<br>";
                        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
                        break;
                    }
                }
            }
     
            require_once 'view/user/update_user.php';
            break;

        }
    case "search":
        {
            if (isset($_GET['key'])) {
                $key = $_GET['key'];
                $data_Search = $db->searchData('user','','','username','email', $key);
            }
            require_once("view/user/search_user.php");
            break;
        }    
    case "delete":
        {
             {
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                if ($db->deleteData('user', 'user_id', $id)) {
                    echo "Delete record success";
                }
            }
        }
        }
     case 'list':
          
              
               $tbl = "user";            
            $limit = $db->getPag();
            $paged = isset($_GET['page']) ? $_GET['page'] : 1;
            if(empty($paged) || !is_numeric((float)$paged))
                $paged = 1;

            $offset = ($paged - 1) * $limit;

            $data = $db->getAllData($tbl,$offset,$limit);
            $count = $db->phantrang($tbl);
           
            require_once("view/user/list_user.php");
            break;
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
            require_once("view/user/list_user.php");
            break;
        }
}
?>