
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
				<th></th>
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
					<td>
						<input  type="button" name="Xóa" value="Xóa" ><button  onclick="location.href='admin.php?controller=room&action=update&id=<?php echo $value['room_id'] ?>'" type="button">Sửa
</button>
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
