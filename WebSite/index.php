  <?php include "public/skill/header.php" ?>
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
   	case 'room':
   		require_once('controller/room/index.php');
   		break;
   	
   }

 ?>
 <?php include "public/skill/footer.php" ?>
 
                        


