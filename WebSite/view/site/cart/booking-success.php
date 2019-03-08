<div class="container">
	<div class="cart-succes">
		<h3>Thank you, you have successfully placed an order.</h3>
		<h4>Your order information : </h4>
		<form class="" method="post" action="?c=bookcart&a=listUserBook">
			<table class="table table-bordered table-inverse">
				<thead>
					<tr>
						<th>ID</th>
						<th>User ID</th>
						<th>Room ID</th>
						<th>Total</th>
						<th>Delete</th>
						<th><input type="checkbox" id="selAl">Select All</th>
					</tr>
				</thead>
				<tbody>
					<?php
					if (empty($list)) {
						echo "Has no record";
					} else {
						foreach ($list as $value) {
							?>
							<tr>
								<td><?php echo $value['user_id'] ?></td>
								<td><?php echo $value['room_id'] ?></td>
								<td><?php echo $value['totalmoney'] ?></td>
								<td><a onclick="return confirm('Do you want to delete record?')" 
									href="#"
									title="Delete">Delete</a>
								</td>
								<?php
								echo "<td>"; ?><input type="checkbox" name="checkbox[]"
									value ="<?php echo $value['bill_id']; ?>"/><?php echo "</td>"; ?>	

								</tr>
							<?php } 
						} ?>
					</tbody>
				</table>
			</div>
		</form>
	</div>
</div>