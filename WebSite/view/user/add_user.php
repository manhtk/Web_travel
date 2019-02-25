<div class="row" >
	<div class="col-md-4">
		<form method="post" action="">
			<div class="form-group">
				<!-- <label for="exampleInputPassword1">Room ID</label> -->
				<input type="hidden" name="user[]" class="form-control" />
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Username</label>
				<input type="text" name="user[]" required="" class="form-control"  >				
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="text" name="user[]" required="" class="form-control"  >
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Role</label>
				<select   name="user[]" class="form-control">
					<option value="1">Admin</option>
					<option value="2">Partner</option>
				</select>
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">First_name</label>
				<input type="text" name="user[]" required="" class="form-control"  >
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Last_name</label>
				<input type="text" name="user[]"  required="" class="form-control"  >
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Address</label>
				<input type="text" name="user[]" required="" class="form-control"  >
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Email</label>
				<input type="text" name="user[]" required="" class="form-control"  >
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Identity_card</label>
				<input type="text" name="user[]" required="" class="form-control"  >
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Phone_number</label>
				<input type="text" name="user[]" required="" class="form-control"  >
			</div>
			
			<div class="form-group">
				<label for="exampleInputPassword1">Birthday</label>
				<input type="date" name="user[]" required=""  class="form-control"  >
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Gender</label>
				<select   name="user[]" class="form-control">
					<option value="Nam">Nam</option>
					<option value="Nữ">Nữ</option>
				</select>
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Regisdate</label>
				<input type="date" name="user[]" required="" class="form-control"  >
			</div>
			<div class="form-group">
				<!-- <label for="exampleInputPassword1">Regisdate</label> -->
				<input type="hidden" name="user[]"  class="form-control"  >
			</div>
			<div class="form-group">
				<!-- <label for="exampleInputPassword1">Regisdate</label> -->
				<input type="hidden" name="user[]"  class="form-control"  >
			</div>
			
			<button type="submit" name="add_user"  class="btn btn-primary" >Add</button>
			
		</form>
	
		
	</div>
</div>
