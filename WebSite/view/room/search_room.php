
<?php include_once "public/skill/header.php" ?>
<div class="table-responsive">
	<?php if ($data_Search == 0) {
    echo "Found no record!";
} else { ?>
	<form method="post" action="">
	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		<thead>
			<tr>
				<th>RoomID</th>
				<th>Hotel</th>
				<th>Room</th>
				<th>TypeRoom</th>
				<th>Price</th>
				<th>Point</th>
				<th>People</th>
				<th>Bed</th>
				<th>Size</th>
				<th>Images</th>
				<th>Content</th>
				<th>Status</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ($data_Search as $value) {
				?>
				<tr>
					<td><?php echo $value['room_id'] ?></td>
					<td><?php echo $value['hotel_name'] ?></td>
					<td><?php echo $value['room_name'] ?></td>
					<td><?php echo $value['typeroom'] ?></td>
					<td><?php echo $value['price'] ?></td>
					<td><?php echo $value['point'] ?></td>
					<td><?php echo $value['people'] ?></td>
					<td><?php echo $value['bed'] ?></td>
					<td><?php echo $value['size'] ?></td>
					<td ><img src="<?php echo $value['room_images'] ?>" style="width: 50px; height:auto;"></td>
					
					<td><?php echo $value['content'] ?></td>
					<td><?php echo $value['status'] ?></td>
					<td><a href="admin.php?controller=room&action=update&id=<?php echo $value['room_id'] ?>">Edit</a></td>
					<td><a onclick="return confirm('Do you want to delete record?')" 
						href="admin.php?controller=room&action=delete_one&id=<?php echo $value['room_id']?>"
						title="Delete">Delete</a>
					</td>
					
				</tr>
			<?php }
			} ?>
		</tbody>

	</table>
    </form>
	<br>
<button class="btn btn-primary" onclick="location.href='admin.php?controller=room&action=list'" type="button">Go home
</button>
</div>
<?php 
	$page = $db->phantrang('room');
?>

<div class="test-phantrang">
	<?php
	for ($i=1; $i<=$page ; $i++) { 
		echo "<a href='admin.php?controller=setting&action=phantrang&page=$i'>Page $i</a> - ";
	}
	?>
</div>
<?php include_once "public/skill/footer.php" ?>         
