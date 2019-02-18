<?php

if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = " ";
}

switch ($action) {
    case "add":
        {
        }
    case "update":
        {
            if (isset($_GET['id'])) {
                $table = 'setting';
                $id = $_GET['id'];
                $value = $db->getDataUpdate($table, $id);
                if (isset($_POST['update_setting'])) {
                    $val = $_POST["setting"];
                    if (!$db->updateData($table, $id, $val)) {
                        echo "Can't update data because duplicate id of hotel. Please check again!";
                        echo "<br>";
                        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
                        break;
                    } else {
                        header("location: admin.php?controller=setting");
                    }
                }
            }

            require_once("view/setting/update_setting.php");
            break;
        }
    case "delete":
        {

        }
    default:
        {

            $tbl = "setting";
            $data = $db->getAllData($tbl);
            require_once('View/setting/setting.php');
            break;

        }
}
?>