<?php

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
                    $val = $_POST["setting"];
                    if ($db->updateData($table, $id, $val)) {
                        echo "Update record success";
                        echo "<br>";
                        echo "<a href='admin.php?controller=setting'>Home</a>";
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
            $table = 'room';
            $db->phantrang($table);
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