
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
<form method="post" action="admin.php?controller=room&action=delete_all"> 
	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		<thead>
			<tr>
				<th>RoomID</th>
				<th>Hotel</th>
				<th>Room</th>	
				<th>TypeRoom</th>
				<th>Price</th>
				<th>Star Number</th>
				<th>People</th>
				<th>Bed</th>
				<th>Size</th>
				<th>Images</th>
				<th>Content</th>
				<th>Status</th>
				<th>Edit</th>
				<th>Delete</th>
				<th><input type="checkbox" id="selAl">Select All</th>
			</tr>
		</thead>
		<tbody>
		<?php
        if ($data == 0) {
            echo "Has no record";
        } else {
			foreach ($data as $value) {
				?>
				<tr>
					<td><?php echo $value['room_id'] ?></td>
					<td><?php echo $value['hotel_name'] ?></td>
					<td><?php echo $value['room_name'] ?></td>
 
					<td><?php echo $value['typeroom'] ?></td>
					<td><?php echo $value['price'] ?></td>
					<td><?php echo $value['starnum	'] ?></td>
					<td><?php echo $value['people'] ?></td>
					<td><?php echo $value['bed'] ?></td>
					<td><?php echo $value['size'] ?></td>
					<td ><img src="<?php echo $value['room_images'] ?>" style="width: 50px; height:auto;"></td>
					
					<td><?php echo $value['content'] ?></td>
					<td><?php echo $value['status'] ?></td>
					<td><a  
						href="admin.php?controller=room&action=update&id=<?php echo $value['room_id']?>"
						title="Edit">Edit</a>
					</td>
					<td><a onclick="return confirm('Do you want to delete record?')" 
						href="admin.php?controller=room&action=delete_one&id=<?php echo $value['room_id']?>"
						title="Delete">Delete</a>
					</td>
					<?php
					echo "<td>"; ?><input type="checkbox" name="checkbox[]"
											value ="<?php echo $value['room_id']; ?>"/><?php echo "</td>"; ?>	
												
					</tr>
			<?php } 
		} ?>
		</tbody>

	</table>
	<input style="float: right" class="btn btn-primary"  type="submit" name="delete" onclick="return confirm('Are you sure?')" value="Delete">
	
</form>
<?php 
	$page = $db->paging('room');
?>

<div class="paging">
	<?php
	$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
	for ($i=1; $i<=$page ; $i++) { 
		$link = 'admin.php?controller=room&action=list&page=' . $i;
		$class_active = '';
		if($current_page == $i)
			$class_active = 'active';
		echo "<a href='". $link ."' class='". $class_active ."'>Page $i</a> - ";
	}
	?>
</div>
<?php include_once "public/skill/footer.php" ?>         
