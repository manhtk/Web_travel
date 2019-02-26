<form method="post" action="" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Room ID</td>
		</tr>
		<td><input class="form-control" type="text" name="room_id" placeholder="ID room" readonly></td>
		<tr>
			<td>Hotel Id</td>
		</tr>
		<td><input class="form-control" type="text" name="hotel_id" placeholder="ID hotel"></td>
		<tr>
			<td>Room Name</td>
		</tr>
		<td><input class="form-control" type="text" name="room_name" placeholder="Room Name"></td>
		<tr>
			<td>Type Room</td>
		</tr>
		<td><input class="form-control" type="text" name="type_room" placeholder="Type Room"></td>
		<tr>
			<td>Price</td>
		</tr>
		<td><input class="form-control" type="text" name="price" placeholder="Price"></td>
		<tr>
			<td>Point</td>
		</tr>
		<td><input class="form-control" type="text" name="point" placeholder="Point"></td>
		<tr>
			<td>People</td>
		</tr>
		<td><input class="form-control" type="text" name="people" placeholder="People"></td>
		<tr>
			<td>Bed</td>
		</tr>
		<td><input class="form-control" type="text" name="bed" placeholder="Bed"></td>
		<tr>
			<td>Size</td>
		</tr>
		<td><input class="form-control" type="text" name="size" placeholder="Size"></td>
		<tr>
			<td>Room Images</td>
		</tr>
		<td><input class="form-control" type="file" name="image"></td>
		<tr>
			<td>Content</td>
		</tr>
		<td><input class="form-control" type="text" name="content" placeholder="Content"></td>
		<tr>
			<td>Status</td>
		</tr>
		<td><input class="form-control" type="text" name="status" placeholder="Status"></td>
	</table>
<button class="btn btn-primary" type="submit" name="add_room">Add data</button>
<button class="btn btn-primary" onclick="location.href='admin.php?controller=room'" type="button">Cancel
</button>
</form>
<br>
