<?php 
  class Room{
    public $columns = [];
    public function __construct()
    {
        $this->columns = array(
            'room_id',
            'hotel_id',
            'room_name',
            'typeroom',
            'price',
            'point',
            'people',
            'bed',
            'size',
            'images',
            'content',
            'status'

        );
    }
    public static function get_inst()
    {
        static $instance;

        if (is_null($instance)) {
            $instance = new Room();
        }

        return $instance;
    }
  }
 ?>

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
            $data = $db->getAllData('room');
            $data_dis = $db->getAllData('hotel');
            $nameErr = "";
            $val = [];
            $columns = Room::get_inst()->columns;
            $uploadOk = 1;
            foreach ($columns as $column) {
                $val[$column] = isset($_POST[$column]) ? $_POST[$column] : ' ';
            }
            if (isset($_POST['add_room'])) {
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    
                    if ($db->checkTag($val['room_name']) == 0) {
                        $nameErr = "Room name is invalid because include html tags";
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
                        $db->insertData('room', $val);
                        echo "
                    <script>
                        window.location.href ='admin.php?controller=room&action=list';
                </script>";
                    }

                }
            }
            require_once ("view/room/add_room.php");
            break;
    }
        
            
    case "update": {  
         
            
           if (isset($_GET['id'])) {
               
                $id = $_GET['id'];
                $value = $db->getDataUpdate('room', $id);
                 $data_dis = $db->getAllData('hotel');
                  $nameErr = "";
                  $NameErr = "";
                 $val=[];
                 $columns = Room::get_inst()->columns;
                 foreach ($columns as $column ) {
                     $val[$column] = isset($_POST[$column]) ? $_POST[$column] : ' ';
                 }
                if (isset($_POST['update_room'])) {
                    
                    if (!preg_match('/^[A-Za-z0-9]{1,50}$/',$_POST['room_name']))
                    {
                        $nameErr = "Roomname is invalid because have html tags or special characters";
                    }
                    else if (!preg_match('/^[A-Za-z0-9]{1,50}$/',$_POST['typeroom']))
                    {
                        $NameErr = "typeroom is invalid because have html tags or special characters";
                    } else if(isset($_FILES['image']) && !empty($_FILES['image']['name']) ) {
                
                        $image_url = $db->uploadImage();
                     if (!empty($image_url)) {
                        $val['images'] = $image_url;
                    }   
                    


                    if ($db->updateData('room', $id, $val)   ) {
                        echo "
                    <script>
                        window.location.href ='admin.php?controller=room&action=list';
                </script>";
                    }
                 }
                  else {
                        $val['images'] = $_POST['images1'];

                     
                    if ($db->updateData('room', $id, $val)   ) {
                        echo "
                    <script>
                        window.location.href ='admin.php?controller=room&action=list';
                </script>";
                    }

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
                $data_Search = $db->searchData('room', 'hotel', 'hotel_id', 'room_name','hotel_name', $key);
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

            $count = $db->paging($tbl2);

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