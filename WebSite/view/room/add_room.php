
<div class="row" >
	<div class="col-md-4">
		<form action="" method="post">
			<div class="form-group">
				<input type="hidden" name="room[]">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Hotel</label>
				<input type="text" name="room[]" placeholder="Hotel Id" class="form-control">
<!-- 
				<select class="form-control">
					<?php  ?>
					<option></option>
				</select> -->
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Room</label>
				<input type="text" name="room[]" placeholder="Room Name" class="form-control"  >
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">TypeRoom</label>
				<input type="text" name="room[]" placeholder="Type of room" class="form-control"  >
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Price</label>
				<input type="text" name="room[]" placeholder="Price" class="form-control"  >
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Point</label>
				<input type="text" name="room[]" placeholder="Point" class="form-control"  >
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">People</label>
				<input type="text" name="room[]" placeholder="People" class="form-control"  >
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Bed</label>
				<input type="text" name="room[]" placeholder="Bed" class="form-control"  >
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Size</label>
				<input type="text" name="room[]" placeholder="Size" class="form-control"  >
			</div>
			
			<div class="form-group">
				<label for="exampleInputFile">Images</label>
				<input type="file" name="room[]" id="exampleInputFile">
				<p class="help-block">Example block-level help text here.</p>
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Content</label>
				<input type="text" name="room[]" placeholder="Content" class="form-control"  >
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Status</label>
				<input type="text" name="room[]" placeholder="Status" class="form-control"  >
			</div>
			
			<button type="submit" name="add_room" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>
