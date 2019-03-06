<?php

$conn = mysqli_connect('localhost', 'root', '', 'webtravel');
mysqli_set_charset($conn, 'utf8');

if(isset($_POST['user'])){

	if(isset($_SESSION['cart']) && $_SESSION['cart'] !=null){
			// Lấy được thông tin của khách hàng 
		$Full_Name = $_POST['first_name'].$_POST['last_name'];
		$phone_number = $_POST['phone_number'];
		$address = $_POST['address'];
		$city = $_POST['city'];
		$email = $_POST['email'];
		// $tongtien = 0;
		// foreach($_SESSION['cart'] as $cart){
		// 	$thanhtien = $cart['qty']*$cart['giagoc'];
		// 	$tongtien  = $tongtien+$thanhtien;
		// }
		// $sql  = "INSERT INTO khachhang(id, tenkhachhang, sodienthoai, diachi, email, thanhpho, tongtien)VALUES(null, '$hovaten', '$sodienthoai', '$diachi', '$email', '$thanhpho', '$tongtien')";
		// if($db->execute($sql) === TRUE){
		// 	$last_id = $db->connect()->insert_id;
		// 	var_dump($last_id);
		// }
		if(mysqli_query($conn, $sql)){
			$last_id = $conn->insert_id;
			// Lấy thông tin sản phẩm có trong giỏ hàng  :
			if(isset($_SESSION['cart']) && $_SESSION['cart'] !=null){
				foreach($_SESSION['cart'] as $cart){
					$thanhtien = $cart['qty']*$cart['giagoc'];
					$sql_oder = "INSERT INTO bill(bill_id, user_id, room_id, promotion_id, checkin, checkout, payments, totalmoney, status)VALUES(null, '$last_id', '$user_id','$room_id', '$promotion_id', '$checkin', '$checkout', '$payment', '$totalmoney', '$status')";
					mysqli_query($conn, $sql_oder);
					$last_id_order = $conn->insert_id;
					// var_dump($cart);
				}	
				// Lưu id của đối tượng vừa thêm vào session :
				$_SESSION['last_id_order'] = $last_id_order;
				$_SESSION['thanhcong_oder'] = 1;
				// Thực hiện xóa $_SESSION['cart'] :
				unset($_SESSION['cart']);
				header('location: index.php?controller=booking-susscess');
			}
		}
	}
	else{
		echo "<p class='alert alert-danger'> No rooms selected !</p>";
	}
}
?>

