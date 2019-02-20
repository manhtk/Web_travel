<?php include_once "public/skill/header.php" ?>
<div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <th>RoomID</th>
                        <th>Hotel</th>
                        <th>Room</th>
                        <th>TypeRoom</th>
                        <th>Price</th>
                        <th>Point</th>
                        <th>People</th>
                        <th>Bed</th>
                        <th>Size</th>
                        <th>Images</th>
                        <th>Content</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($data as $value) {
                        ?>
                        <tr>
                            <td><?php echo $value['room_id'] ?></td>
                            <td><?php echo $value['hotel_name'] ?></td>
                            <td><?php echo $value['room_name'] ?></td>
                            <td><?php echo $value['typeroom'] ?></td>
                            <td><?php echo $value['price'] ?></td>
                            <td><?php echo $value['point'] ?></td>
                            <td><?php echo $value['people'] ?></td>
                            <td><?php echo $value['bed'] ?></td>
                            <td><?php echo $value['size'] ?></td>
                            <td ><img src="<?php echo $value['room_images'] ?>" style="width: 50px; height:auto;"></td>
                           <td><?php echo $value['room_images'] ?></td>
                            <td><?php echo $value['content'] ?></td>
                            <td><?php echo $value['status'] ?></td>
                            <td>
                                <input  type="submit" name="Xóa" value="Xóa" ><input type="submit" name="Sửa" value="Sửa">
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                 
                </table>
              </div>
     <?php include_once "public/skill/footer.php" ?>         