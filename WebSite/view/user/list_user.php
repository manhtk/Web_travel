
<?php include_once "public/skill/header.php" ?>
<div class="table-responsive">
	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		<div class="row">
			<div class="col-md-4">
				<form action="" method="get"
				class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
				<div  class="input-group" style="border: #dddfeb solid 1px; border-radius: 2px; ">
					<input type="hidden" name="controller" value="user">
					<input type="text" name="key" class="form-control bg-light border-0 small"
					placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" ">
					<div class="input-group-append">
						<button class="btn btn-primary" type="submit">
							<i class="fas fa-search fa-sm"></i>
						</button>
					</div>

					<input type="hidden" name="action" value="search">
					<div class="input-group-append">

						<select class="form-control" id="sel1" name="key">
							<option value="1">Admin</option>
							<option value="2">Partner</option>
						</select>
					</div>
				</div>
			</form>
		</div>
	</div>
		<br/>
		<thead>
			<tr>
				<th>Userid</th>
				<th>Username</th>
				<th>Password</th>
				<th>Role</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Address</th>
				<th>Email</th>
				<th>Identity Card</th>
				<th>Phonenumber</th>
				<th>Birthday</th>
				<th>Gender</th>
				<th>Regisdate</th>
				<th>Token</th>
				<th>TokenExpire</th>
				<th>Edit</th>
				<th>Detele</th>

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
					<td><?php echo $value['token'] ?></td>
					<td><?php echo $value['tokenExpire'] ?></td>
					
					<td>
						<button class="btn btn-danger"><a onclick="return confirm('Are you want to delete record?')"
                           href="admin.php?controller=user&action=delete&id=<?php echo $value['user_id'] ?>"
                           title="Delete">Delete</a></button>
					</td>
					<td>	 

                    <button name="Sửa" onclick="location.href='admin.php?controller=user&action=update&id=<?php echo $value['user_id']?>'"  value="Sửa" class="btn btn-primary">Update</button>
						<!-- <input type="submit" > -->
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
