<?php 
	if (isset($_GET['id'])) {
		$id = $_GET["id"];
		$cart =$_SESSION["cart"];

		$sql = "SELECT * from room where room_id = ".$id;
		$result =mysql_query($sql);
		$data = mysql_fetch_row($result);

		if (!empty($cart)) {
		 	//test id exists
		 	if (array_key_exists($id, $cart)) {
		 		$cart[$id] = array(
		 			"sl" =>(int) $cart[$id]["sl"]+1,
				"name" => $data[2],
				"price" => $data[4]
		 		);
		 	}
		 }
		else{
			//first book
			$cart[$id] = array(
				"sl" => 1,
				"name" => $data[2],
				"price" => $data[4]);
		} 
	}
	else{
		//back home
	}
	echo '<pre>';
	print_r($_SESSION["cart"]);
	die;
?>