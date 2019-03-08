<?php
if(isset($_SESSION['thanhcong_oder'])==1){

	?>
	<div class="cart-succes">
		<h3>Thank you, you have successfully placed an order.</h3>
		<!-- <img src="image/icon/shopping-cart-orange-hi.png" alt="" width="100px"> -->

		<?php  die; ?>
		<h4>Your order information : </h4>
		<?php



		$id = $_SESSION['last_id_order'];
		$tblTable = 'bill';

		$data = $db-> getID($tblTable, $id);
		$key = "room_id";
		$data_idKH = $data['user_id'];
		$result_donhang = $db->getOrder($tblTable,$key,$data_idKH);
		

		echo "<li>Customer : ".$data['user_id']."</li>";
		echo "<li>Room_ID : ".$data['room_id']."</li>";
		echo "<li>Total Money : ".$data['totalmoney']."</li>";

		?>


		<table class="table table-bordered table-inverse">
			<thead>
				<tr>
					<th>ID</th>
					<th>User Name</th>
					<th>Room Name</th>
					<th>SL</th>
					<th>Price</th>
					<th>Total</th>
				</tr>
			</thead>
			<tbody>


			</tbody>
		</table>
	</div>
	<?php
}else{


	?>
	
	<div class="cart-false">
		<h4>You have placed a failed order</h4>
		<p>There are no products you choose to buy</p>
	</div>

	<?php
}
?>