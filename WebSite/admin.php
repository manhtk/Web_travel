  <?php include_once "public/skill/header.php" ?>
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">Welcome Admin</h1>
                           
                        </div>
                        <link rel="stylesheet" type="text/css" href="public/css/setting.css">
 <?php 

		include_once "model/DB.php";
$db = new Database;
$db->connect();
 if(isset($_GET['controller']))
 {
 	$controller = $_GET['controller'];
 }else
   {
   	$controller = "";
   }
 switch ($controller) {
   	case 'room':{
   		require_once('controller/room/index.php');
   		break;
      }

    case "setting":
        {
            require_once('controller/setting/index.php');
            break;
        }
    default:
   {
   require_once ('admin.php');
   break;
   }  
   	
   }
   

 ?>
 <?php include_once "public/skill/footer.php" ?>
 
                        


