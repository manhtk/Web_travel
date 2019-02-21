<?php
include "upload.php";
if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = " ";
}
switch ($action) {
    
    case "update":
        {
            if (isset($_GET['id'])) {
                $table = 'setting';
                $id = $_GET['id'];
                $value = $db->getDataUpdate($table, $id);
                if (isset($_POST['update_setting'])) {

                    $image_name = uploadImageHandler('image');

                    $val = $_POST["setting"];

                    array_push($val, $image_name);

                    if ($db->updateData($table, $id, $val)) {
                        echo "Update record success";
                        echo "<br>";
                        echo "<a href='admin.php?controller=setting'>Go home</a>";
                        break;
                    } else {
                        echo "Can't update data because duplicate id of hotel. Please check again!";
                        echo "<br>";
                        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
                        break;
                    }
                }
            }
            require_once("view/setting/update_setting.php");

            break;
        }
        case 'phantrang':
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
            require_once("view/setting/test-phantrang.php");
            break;
        }
    default:
        {
            $tbl = "setting";
            $data = $db->getAllData($tbl);
            require_once('view/setting/setting.php');
            break;
        }
}
?>