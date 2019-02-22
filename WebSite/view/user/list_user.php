
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
				<th>STT</th>
				<th>username</th>
				<th>password</th>
				<th>role</th>
				<th>first_name</th>
				<th>last_name</th>
				<th>address</th>
				<th>email</th>
				<th>identity_card</th>
				<th>phone_number</th>
				<th>birthday</th>
				<th>gender</th>
				<th>regisdate</th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ($data as $value) {
				?>
				<tr>
					<td><?php echo $value['user_id'] ?></td>
					<td><?php echo $value['username'] ?></td>
					<td><?php echo $value['password'] ?></td>
					<td><?php echo $value['role'] ?></td>
					<td><?php echo $value['first_name'] ?></td>
					<td><?php echo $value['last_name'] ?></td>
					<td><?php echo $value['address'] ?></td>
					<td><?php echo $value['email'] ?></td>
					<td><?php echo $value['identity_card'] ?></td>
					<td><?php echo $value['phone_number'] ?></td>
					<td><?php echo $value['birthday'] ?></td>
					<td><?php echo $value['gender'] ?></td>
					<td><?php echo $value['regisdate'] ?></td>
					
					<td>
						<input  type="submit" name="Xóa" value="Xóa" ><input type="submit" name="Sửa" onclick="location.href='admin.php?controller=user&action=update&id=<?php echo $value['user_id']?>'"  value="Sửa">
					</td>
				</tr>
			<?php } ?>
		</tbody>

	</table>
</div>
<?php 
	$page = $db->phantrang('user');
?>

<div class="test-phantrang">
	<?php
	for ($i=1; $i<=$page ; $i++) { 
		echo "<a href='admin.php?controller=user&action=list&page=$i'>Page $i</a> - ";
	}
	?>
</div>
<?php include_once "public/skill/footer.php" ?>         
