
<div class="row" >
	<div class="col-md-4">
		<form method="post" action="" enctype="multipart/form-data">
    <table>
        <tr>
            <td>ID Room</td>
        </tr>
        <td><input class="form-control" type="text" name="room_id" value="<?php echo $value['room_id']  ?>" readonly></td>
        <tr>
            <td>Id Hotel</td>
        </tr>
        <td><select class="form-control" name="hotel_id"><?php
                foreach ($data_dis as $value1) {
                    ?>
                    <option><?php echo $value1['hotel_id']; ?></option>
                <?php } ?>
            </select></td>
        <tr>
            <td>Room </td>
        </tr>
        <td><input class="form-control" type="text" name="room_name"  value="<?php echo $value['room_name']  ?>"><span
                    style="color: red"><?php echo $nameErr; ?></span></td>

        <tr>
            <td>Type Room</td>
        </tr>
        <td><input class="form-control" type="text" value="<?php echo $value['typeroom']  ?>" name="typeroom"></td>
        <tr>
            <td>Price</td>
        </tr>
        <td><input class="form-control" type="text" value="<?php echo $value['price']  ?>" name="price"></td>
        <tr>
            <td>Point</td>
        </tr>
        <td><input class="form-control" type="text" value="<?php echo $value['point']  ?>" name="point"></td>
        <tr>
            <td>People</td>
        </tr>
        <td><input class="form-control" type="text" value="<?php echo $value['people']  ?>" name="people"></td>
        <tr>
            <td>Bed</td>
        </tr>
        <td><input class="form-control" type="text" value="<?php echo $value['bed']  ?>" name="bed"></td>
        <tr>
            <td>Size</td>
        </tr>
        <td><input class="form-control" type="text" value="<?php echo $value['size']  ?>" name="size"></td>
        <tr>
            <td>Images</td>
        </tr>
         <td><img src="<?php echo $value['images'] ?>" style="width: 50px; height: 50px"><input class="form-control" type="file" name="image" value="<?php echo $value['images']  ?>"></td>
        <tr>
            <td>Content</td>
        </tr>
        <td><input class="form-control" type="text" value="<?php echo $value['content']  ?>" name="content"></td>
        <tr>
            <td>Status</td>
        </tr>
        <td><input class="form-control" type="text" value="<?php echo $value['status']  ?>" name="status"></td>
    </table>
    <br>
    <button type="submit" name="update_room"  class="btn btn-primary" >Update</button>
			<button class="btn btn-primary" onclick="location.href='admin.php?controller=room&action=list'" type="button">Go home
		</button>
</form>

	
		
	</div>
</div>
