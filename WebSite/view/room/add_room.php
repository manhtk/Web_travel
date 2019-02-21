<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add new room</title>
</head>
<body>
<h3>Add new room</h3>
<div class="row">
	<div class="col-md-4">
		<form action="" method="POST">
			<table>
				<td><input type="hidden" name="room[]" placeholder="Room Id"></td>
				<tr>
					<td>Hotel Id</td>
				</tr>
				<td><input type="text" name="room[]" placeholder="Hotel Id"></td>
				<tr>
					<td>Room name</td>
				</tr>
				<td><input type="text" name="room[]" placeholder="Room name"></td>
				<tr>
					<td>Type room</td>
				</tr>
				<td><input type="text" name="room[]" placeholder="Type room"></td>
				<tr>
					<td>Price</td>
				</tr>
				<td><input type="text" name="room[]" placeholder="Price"></td>
				<tr>
					<td>Point</td>
				</tr>
				<td><input type="text" name="room[]" placeholder="Point"></td>
				<tr>
					<td>People</td>
				</tr>
				<td><input type="text" name="room[]" placeholder="People"></td>
				<tr>
					<td>Bed</td>
				</tr>
				<td><input type="text" name="room[]" placeholder="Bed"></td>
				<tr>
					<td>Size</td>
				</tr>
				<td><input type="text" name="room[]" placeholder="Size"></td>
				<tr>
					<td>Images</td>
				</tr>
				<td><input type="text" name="room[]" placeholder="Images"></td>
				<tr>
					<td>Content</td>
				</tr>
				<td><input type="text" name="room[]" placeholder="Content"></td>
				<tr>
					<td>Status</td>
				</tr>
				<td><input type="text" name="room[]" placeholder="Status"></td>
				<td><input type="submit" name="add_room" value="Add room"></td>
			</table>
		</form>
	</div>
</div>
</body>
</html> -->

<div class="row" >
	<div class="col-md-4">
		<form action="" method="POST">
			<div class="form-group">
				<input type="hidden" name="room[]"  >
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Hotel</label>
				<input type="text" name="room[]" placeholder="Hotel" class="form-control">
<!-- 
				<select class="form-control">
					<?php  ?>
					<option></option>
				</select> -->
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Room</label>
				<input type="text" name="room[]" placeholder="Room" class="form-control"  >
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
				<input type="file" id="exampleInputFile">
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
			
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>
