<div class="container">
	<div class="list_bill">
		<h3>List Bill.</h3>
		
		<form class="" method="post" action="?c=bookcart&a=listBill">
			<table class="table table-bordered table-inverse">
				<thead>
					<tr>
						<th>Bill ID</th>
						<th>Full Name</th>
						<th>Room Name</th>
						
						<th>Check In</th>
						<th>Check Out</th>
						<th>Payments</th>
						<th>Total Money</th>
						<th>Status</th>
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
								<td><?php echo $value['bill_id'] ?></td>
								<td><?php echo ucwords($value['first_name'].' '.$value['last_name']) ?></td>
								<td><?php echo $value['room_name'] ?></td>
								
								<td><?php echo $value['checkin'] ?></td>
								<td><?php echo $value['checkout'] ?></td>
								<td><?php echo $value['payments'] ?></td>
								<td><?php echo $value['totalmoney'] ?></td>
								<td><?php echo $value['status'] ?></td>
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