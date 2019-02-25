<?php 
//Dòng này chỉ là include file model
//require_once('../models/registermodel.php');
//Dòng này start session
session_start() ;

$errors=array();
//Đoạn này check nếu tồn tại giá trị post 'register.php'
//==> Vậy chưa có chỗ nào load file view register.php cả -> Vậy sẽ trắng trang

//Chỗ này để load view


//Bắt đầu check
//Không phải là $_POST['register.php']
if (isset($_POST['register']))
{
	//Đoạn này để a in ra biến post khi submit form nhé
	// echo '<pre>';
	// print_r($_POST); a, giơ
	// echo '</pre>';die;
	//Đây mới là check validate form, chưa cần include model vội
	//include ('../models/registermodel.php');
	$check = true;
	
	if (empty($_POST['username'])) {
		array_push($errors, '<p class="error">Username is required</p>');
		$check = false;
	}
	if (empty($_POST['password_1'])) {
		array_push($errors, '<p class="error">Password is required</p>');
		$check = false;
	}
    if (empty($_POST['email'])) {
        array_push($errors, '<p class="error">Email is required</p>');
        $check = false;
    }
	if ($_POST['password_1'] != $_POST['password_2']){
		array_push($errors, '<p class="error">The two passwords do not match</p>');
		$check = false;
	}
	if (!preg_match('/^[_a-z0-9-]*@[a-z0-9-]+(\.[a-z0-9-]+)$/', $_POST['email']))
	    {
	    	array_push($errors, '<p class="error">Email này không hợp lệ. Vui long nhập email khác.</p> ');
			$check = false;
			// exit();
	    }
	    if (!preg_match('/^[A-Za-z0-9]{5,50}$/', $_POST['username']))
	    {
	    	array_push($errors, '<p class="error">Username không hợp lệ. Vui lòng nhập username khác</p> ');
			$check = false;
			// exit();
	    }
	    if (!preg_match('/^[A-Za-z0-9]{5,50}$/', $_POST['password_1']))
	    {
	    	array_push($errors, '<p class="error">Password không hợp lệ. Vui lòng nhập password khác</p> ');
			$check = false;
			// exit();
	    }
	// if (!eregi("^[_a-z0-9-]*@[a-z0-9-]+(\.[a-z0-9-]+)$", $_POST['email']))
	//     {
	//     	array_push($errors, '<p class="error">Email này không hợp lệ. Vui long nhập email khác.</p> ');
	// 		$check = false;
	// 		// exit();
	//     }
	// if (!eregi("^[A-Za-z0-9]{5,50}$", $_POST['username']))
	//     {
	//     	array_push($errors, '<p class="error">Username không hợp lệ. Vui lòng nhập username khác </p>');
	// 		$check = false;
	// 		// exit();
	//     }
	// if (!eregi("^[A-Za-z0-9]{5,50}$", $_POST['password_1']))
	//     {
	//     	array_push($errors, '<p class="error">Password không hợp lệ. Vui lòng nhập password khác </p>');
	// 		$check = false;
	// 		// exit();
	//     }
	if ($check){
		include "../models/registermodel.php";
		$role = isset($_POST['partner']) ? $_POST['partner'] : 'normal-partner';
		get_user($_POST['username'],$_POST['password_1'], $_POST['password_2'],$_POST['email'],$role, $db);

	}else{
		include "../views/register.php";
	}

	
 //    echo 123;die;
	// if($check && $errors==0){
	// 	$password =md5($password_1);
	// 		include ('..model/registermodel.php');
	// 		$sql="INSERT INTO user(username,password,email) VALUES ('$username','$password','$email')";
	// 		mysqli_query($db,$sql);
	// 		$_SESSION['username']=$username;
	// 		$_SESSION['success']="You are loged in";
	// 		header('location:index.php');
		
	// }
}else{
	include "../views/register.php";
}





 ?>