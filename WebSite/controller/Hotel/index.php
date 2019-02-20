<?php if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = " ";
}
switch ($action) {
    case "add":
        {
            $table = "hotel";
            $data = $db->getAllData($table);
            if (isset($_POST['add_hotel'])) {
                $val = $_POST["hotel"];
                if (!$db->insertData($table, $val)) {
                    echo "Can't insert data because duplicate id of hotel. Please check again!";
                    echo "<br>";
                    echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
                    break;
                } else {
                    echo "
                    <script>
                        window.location.href ='admin.php?controller=hotel&action=list';
                </script>";
                }
            }
            require_once("view/hotel/add_hotel.php");
            break;
        }
    case "update":
        {
            if (isset($_GET['id'])) {
                $table = 'hotel';
                $id = $_GET['id'];
                $value = $db->getDataUpdate($table, $id);
                if (isset($_POST['update_hotel'])) {
                    $val = $_POST["hotel"];
                    if ($db->updateData($table, $id, $val)) {
                        echo "
                    <script>
                        window.location.href ='admin.php?controller=hotel&action=list';
                </script>";
                    } else {
                        echo "Can't update data because duplicate id of hotel. Please check again!";
                        echo "<br>";
                        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
                        break;
                    }
                }
            }
            require_once("view/hotel/update_hotel.php");
            break;
        }
    case
    "delete_one":
        {
            if (isset($_GET['id'])) {
                $table = 'hotel';
                $id = $_GET['id'];
                if ($db->deleteData($table, $id)) {
                    echo "Delete record success";
                }
            }
        }
    case "delete_all":
        {
            if (isset($_POST['delete'])) {
                $checkbox = $_POST['checkbox'];
                $table = 'hotel';
                while (list ($key, $value) = @each($checkbox)) {
                    $db->deleteData($table, $value);
                    echo "
                 <script type='text/javascript'>
                        window.location.href ='admin.php?controller=hotel&action=list';
                </script>";
                }
            }
        }
    case "list":
        {
            $tbl2 = "city";
               $tbl1 = "hotel";
               $id = "city_id";
            
            $limit = $db->getPag();
            $paged = isset($_GET['page']) ? $_GET['page'] : 1;
            if(empty($paged) || !is_numeric((float)$paged))
                $paged = 1;

            $offset = ($paged - 1) * $limit;

            $data = $db->getAllDataBase($tbl1,$tbl2,$id,$offset,$limit);
            $count = $db->phantrang($tbl2);
            require_once("view/hotel/list_hotel.php");
            break;
        }

    case "search":
        {
            $tbl = "hotel";
            $tbl1 = "city";
            $name = 'hotel_city';
            if (isset($_GET['key'])) {
                $key = $_GET['key'];
                $data = $db->combineTable($tbl, $tbl1, $name, 'city_id');
                $data_Search = $db->searchData($name, 'hotel_name', $key);
            }
            require_once("view/hotel/search_hotel.php");
            break;
        }

    case "upload":
        {
            if (isset($_POST['submit'])) {
                $output_dir = "public/uploads";//Path for file upload
                $fileCount = count($_FILES["image"]['name']);
                $RandomNum = time();
                $ImageName = str_replace(' ', '-', strtolower($_FILES['image']['name'][$i]));
                $ImageType = $_FILES['image']['type'][$i]; //"image/png", image/jpeg etc.
                $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
                $ImageExt = str_replace('.', '', $ImageExt);
                $ImageName = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
                $NewImageName = $ImageName . '-' . $RandomNum . '.' . $ImageExt;
                $ret[$NewImageName] = $output_dir . $NewImageName;
                move_uploaded_file($_FILES["image"]["tmp_name"][$i], $output_dir . "/" . $NewImageName);
                $data = array(
                    'image' => $NewImageName
                );
                $this->model->file_details($data);
                echo "Image Uploaded Successfully";
            }
            $this->view->render('hello/upload');
        }
    default:
        {
            $tbl = "hotel";
            $tbl1 = "city";
            $data = $db->combineTable($tbl, $tbl1, 'hotel_city', 'city_id');
            require_once('view/hotel/list_hotel.php');
            break;
        }
} ?>