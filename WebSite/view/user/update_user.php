<div class="row" >
	<div class="col-md-4">
		<form method="post" action="">
			<div class="form-group">
				
				<!-- <label for="exampleInputPassword1">User_id</label> -->
				<input type="hidden" name="user[]" value="<?php echo $value['user_id']  ?>" class="form-control" readonly />
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Username</label>
				<input type="text" name="user[]" value="<?php echo $value['username']  ?>" class="form-control" readonly >				
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="text" name="user[]" value="<?php echo $value['password']  ?>" class="form-control"  >
			</div>
			
			
			<div class="form-group">
				<label for="exampleInputPassword1">Role</label>
				<select   name="user[]" class="form-control">
					<option value="1" <?php if($value['role']==1) echo "selected";?>>Admin</option>
					<option value="2" <?php if($value['role']==2) echo "selected";?>>Partner</option>
				</select>
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">First_name</label>
				<input type="text" name="user[]" value="<?php echo $value['first_name']  ?>" class="form-control"  >
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Last_name</label>
				<input type="text" name="user[]" value="<?php echo $value['last_name'] ?>" class="form-control"  >
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Address</label>
				<input type="text" name="user[]" value="<?php echo $value['address']  ?>" class="form-control"  >
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Email</label>
				<input type="text" name="user[]" value="<?php echo $value['email']  ?>" class="form-control"  >
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Identity_card</label>
				<input type="text" name="user[]" value="<?php echo $value['identity_card']  ?>" class="form-control"  >
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Phone_number</label>
				<input type="text" name="user[]" value="<?php echo $value['phone_number']  ?>" class="form-control"  >
			</div>
			
			<div class="form-group">
				<label for="exampleInputPassword1">Birthday</label>
				<input type="text" name="user[]" value="<?php echo $value['birthday']  ?>" class="form-control"  >
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Gender</label>
				<input type="text" name="user[]" value="<?php echo $value['gender']  ?>" class="form-control"  >
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Regisdate</label>
				<input type="text" name="user[]" value="<?php echo $value['regisdate']  ?>" class="form-control"  >
			</div>

			<div class="form-group">
				<!-- <label for="exampleInputPassword1">Token</label> -->
				<input type="hidden" name="user[]" value="<?php echo $value['token']  ?>" class="form-control"  >
			</div>
			

			<div class="form-group">
				<!-- <label for="exampleInputPassword1">TokenExpire</label> -->
				<input type="hidden" name="user[]" value="<?php echo $value['tokenExpire']  ?>" class="form-control"  >
			</div>
			
			
			<button type="submit" name="update_user"  class="btn btn-primary" >Update</button>
			<button class="btn btn-primary" onclick="location.href='admin.php?controller=user&action=list'" type="button">Go home
		       </button>
			
		</form>
	
		
	</div>
</div>
