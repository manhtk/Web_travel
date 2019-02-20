<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add new room</title>
</head>
<body>
<h3>Add new room</h3>
<form action="" method="POST">
	<table>
		<!-- <tr>
			<td>Room Id</td>
		</tr> -->
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
</body>
</html>