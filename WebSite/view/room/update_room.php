
<div class="row" >
	<div class="col-md-4">
		<form method="post" action="">
			<div class="form-group">
				<label for="exampleInputPassword1">Room ID</label>
				<input type="text" name="room[]" value="<?php echo $value['room_id']  ?>" class="form-control" readonly />
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Hotel</label>
				<select class="form-control">
					<?php
                foreach ($data_dis as $value1) {
                    ?>
                    <option><?php echo $value1['hotel_id']; ?></option>
                <?php } ?>
				</select>				
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Room</label>
				<input type="text" name="room[]" value="<?php echo $value['room_name']  ?>" class="form-control"  >
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">TypeRoom</label>
				<input type="text" name="room[]" value="<?php echo $value['typeroom']  ?>" class="form-control"  >
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Price</label>
				<input type="text" name="room[]" value="<?php echo $value['price']  ?>" class="form-control"  >
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Point</label>
				<input type="text" name="room[]" value="<?php echo $value['point']  ?>" class="form-control"  >
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">People</label>
				<input type="text" name="room[]" value="<?php echo $value['people']  ?>" class="form-control"  >
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Bed</label>
				<input type="text" name="room[]" value="<?php echo $value['bed']  ?>" class="form-control"  >
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Size</label>
				<input type="text" name="room[]" value="<?php echo $value['size']  ?>" class="form-control"  >
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Images</label>
				<input type="text" name="room[]" value="<?php echo $value['room_images']  ?>" class="form-control"  >
			</div>
			
			<div class="form-group">
				<label for="exampleInputPassword1">Content</label>
				<input type="text" name="room[]" value="<?php echo $value['content']  ?>" class="form-control"  >
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Status</label>
				<input type="text" name="room[]" value="<?php echo $value['status']  ?>" class="form-control"  >
			</div>
			
			<button type="submit" name="update_room"  class="btn btn-primary" >Update</button>
			<button class="btn btn-primary" onclick="location.href='admin.php?controller=room&action=list'" type="button">Go home
		</button>
		</form>
	
		
	</div>
</div>
