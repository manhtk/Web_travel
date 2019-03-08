<?php
	if(isset($_GET['id'])){
		$id = $_GET['id'];

		unset($_SESSION['cart'][$id]);
		header('location: ');

		// echo "<pre>";
		// 	print_r($_SESSION['cart']);
		// echo "</pre>";
	}
	else{
		header('location: ');
	}
?>