<?php if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = " ";
}
switch ($action) {
    case "add":
        {
            $data = $db->getALLDataBase('hotel');
            $data_dis = $db->getAllData('city');
            if (isset($_POST['add_hotel'])) {
                $val = $_POST["hotel"];
                echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
                $data = $db->getALLDataBase('hotel');
                $data_dis = $db->getAllData('city');
                if (isset($_POST['add_hotel'])) {
                    $val = $_POST["hotel"];
                    if ($db->checkDuplicate('hotel', $val['0']) > 0) {
                        echo $val['1'];
                        echo "Cant insert data because duplicate di hotel. Please check again";
                        break;
                    }
                    if ($db->checkTag($val['2']) == 0) {
                        echo "Cant insert data because value include html tags. Please check again";
                        break;
                    } else {
                        $db->insertData('hotel', $val);
                        echo "
                    <script>
                        window.location.href ='admin.php?controller=hotel&action=list';
                </script>";
                    }
                }
            }
            require_once("View/hotel/add_hotel.php");
            break;
        }
    case
    "update":
        {
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $value = $db->getDataUpdate('hotel', $id);
                if (isset($_POST['update_hotel'])) {
                    $val = $_POST["hotel"];
                    if ($db->updateData('hotel', $id, $val)) {
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
            require_once("View/hotel/update_hotel.php");
            break;
        }
    case
    "delete_one":
        {
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                if ($db->deleteData('hotel', 'hotel_id', $id)) {
                    echo "Delete record success";
                }
            }
        }
    case "delete_all":
        {
            if (isset($_POST['delete'])) {
                $checkbox = $_POST['checkbox'];
                while (list ($key, $value) = @each($checkbox)) {
                    $db->deleteData('hotel', 'hotel_id', $value);
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
            if (isset($_GET['key'])) {
                $key = $_GET['key'];
                $data_Search = $db->searchData('hotel', 'city', 'city_id', 'hotel_name', $key);
            }
            require_once("View/hotel/search_hotel.php");
            break;
        }

    default:
        {
            $data = $db->getALLDataBase('hotel', 'city', 'city_id', '0', '16');
            require_once('View/hotel/list_hotel.php');
            break;
        }
} ?>