<?php

class Hotel
{
    public $columns = [];

    public function __construct()
    {
        $this->columns = array(
            'hotel_id',
            'city_id',
            'hotel_name',
            'owner',
            'description',
            'images',
            'starnum',
            'address'
        );
    }

    public static function get_inst()
    {
        static $instance;

        if (is_null($instance)) {
            $instance = new Hotel();
        }

        return $instance;
    }
}

?>

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
            $nameErr = "";
            $val = [];
            $columns = Hotel::get_inst()->columns;
            $uploadOk = 1;
            foreach ($columns as $column) {
                $val[$column] = isset($_POST[$column]) ? $_POST[$column] : ' ';
            }
            if (isset($_POST['add_hotel'])) {
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if ($db->checkDuplicate('hotel', $val['hotel_id']) > 0) {
                        echo "Cant insert data because duplicate id hotel. Please check again";
                        break;
                    }
                    if ($db->checkTag($val['hotel_name']) == 0) {
                        $nameErr = "Hotel name is invalid because include html tags";
                    } else {
                        $image_url = $db->uploadImage();
                        if (!empty($image_url)) {
                            $val['images'] = $image_url;
                            $uploadOk = 1;
                        } else {
                            $uploadOk = 0;
                            echo "<br/><button class='btn btn-primary' type='button' onclick=\"location.href='javascript:self.history.back()'\">Go Back</button>";
                            break;
                        }
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
                $val = [];
                $uploadOk = 1;
                $columns = Hotel::get_inst()->columns;
                foreach ($columns as $column) {
                    $val[$column] = isset($_POST[$column]) ? $_POST[$column] : ' ';
                }
                if (isset($_POST['update_hotel'])) {
                    $image_url = $db->uploadImage();
                    if (!empty($image_url)) {
                        $val['images'] = $image_url;
                        $uploadOk = 1;
                    } else {
                        $uploadOk = 0;
                        echo "<br/><button class='btn btn-primary' type='button' onclick=\"location.href='javascript:self.history.back()'\">Go Back</button>";
                        break;
                    }
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
            if (empty($paged) || !is_numeric((float)$paged))
                $paged = 1;

            $offset = ($paged - 1) * $limit;

            $data = $db->getAllDataBase($tbl1, $tbl2, $id, $offset, $limit);

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