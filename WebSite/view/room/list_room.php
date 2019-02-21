
<?php include_once "public/skill/header.php" ?>
<div class="table-responsive">
	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		<div class="row">
			<div class="col-md-4">
				<form action="" method="get"
      class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
    <div  class="input-group" style="border: #dddfeb solid 1px; border-radius: 2px; ">
        <input type="hidden" name="controller" value="room">
        <input type="text" name="key" class="form-control bg-light border-0 small"
               placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" ">
        <div class="input-group-append">
            <button class="btn btn-primary" type="submit">
                <i class="fas fa-search fa-sm"></i>
            </button>
        </div>

        <input type="hidden" name="action" value="search">
    </div>
</form>
			</div>
		</div>
		<br/>
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
			foreach ($data as $value) {
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
						<input  type="submit" name="Xóa" value="Xóa" ><input type="submit" name="Sửa" onclick="location.href='admin.php?controller=room&action=update&id=<?php echo $value['room_id']?>'"  value="Sửa">
					</td>
				</tr>
			<?php } ?>
		</tbody>

	</table>
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
