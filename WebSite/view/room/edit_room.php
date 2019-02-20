<?php foreach ($dataID as $value) {
	echo $value['room_id'];
} ?>
<div class="row" >
	<div class="col-md-4">
		<form>
			<div class="form-group">
								<input type="hidden" class="form-control"  >
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Hotel</label>

				<select class="form-control">
					<?php  ?>
					<option></option>
				</select>
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Room</label>
				<input type="text" class="form-control"  >
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">TypeRoom</label>
				<input type="text" class="form-control"  >
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Price</label>
				<input type="text" class="form-control"  >
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="text" class="form-control"  >
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">People</label>
				<input type="text" class="form-control"  >
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Bed</label>
				<input type="text" class="form-control"  >
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Size</label>
				<input type="text" class="form-control"  >
			</div>
			
			<div class="form-group">
				<label for="exampleInputFile">Images</label>
				<input type="file" id="exampleInputFile">
				<p class="help-block">Example block-level help text here.</p>
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Content</label>
				<input type="text" class="form-control"  >
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Status</label>
				<input type="text" class="form-control"  >
			</div>
			
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>
