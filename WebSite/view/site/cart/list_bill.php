<div class="container">
	<div class="list_bill">
		<h3>Booking History</h3>
		
		<form class="" method="post" action="?c=bookcart&a=listBill">
			<table class="table table-bordered table-inverse">
				<thead>
					<tr>
						
						<th>Bill ID</th>
						<th>Title</th>
						<th>Order Date</th>
						<th>Execution Time</th>
						<th>Cost</th>
						<th>Status</th>
						<th>Action</th>
						
					</tr>
				</thead>
				<tbody>
					<?php
					// dd($list);
					if (empty($list)) {
						echo "Has no record";
					} else {
						foreach ($list as $value) {
							?>
							<tr>
								<td><?php echo $value['bill_id'] ?></td>
								
								<td><?php echo $value['room_name'] ?></td>
								<td></td>
								<td><?php echo $value['checkin'].'->'.$value['checkout'] ?></td>
								
								
								<td><?php echo $value['totalmoney'] ?></td>
								<td><?php echo $value['status'] ?></td>
								<td>
									<a  
									href="#"
									title="review">Write Review</a><br/>
									<a onclick="return confirm('Do you want to delete record?')" 
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