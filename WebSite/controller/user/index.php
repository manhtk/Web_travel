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
                $value = isset($_POST["user"]) ? $_POST["user"] : array();
                $table = "user";
                $val=$_POST["user"];
                $value[2] = md5($value[2]);

                $count_user = $db->checkUser($table, 'username', $value[1]);
                if($count_user > 0 ) {
                    // echo " Username already exist. Please check again!";
                    // echo "<br>";
                 echo "Username already exist. Please check again!. <a href='javascript: history.go(-1)'> Go Back</a>";
                 exit();
                }
                 else
                 {
                    $db->insertData($table, $value);
                    echo "Successful.";
                 }
                $check=$db->checkTag($val['7']);
                if ($check == 0) {
                    echo "Cant insert data because value include html tags. Please check again";
                    break;
                }

            }
            // echo $value['7'];
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
                $data_Search = $db->searchData('user','','','username','role', $key);
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