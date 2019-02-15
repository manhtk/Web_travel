
<table>
    <thead>
    <tr>
        <th>RoomID</th>
        <th>HotelID</th>
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
       

    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($data as $value) {
        ?>
        <tr>
            <td><?php echo $value['room_id'] ?></td>
            <td><?php echo $value['hotel_id'] ?></td>
            <td><?php echo $value['room_name'] ?></td>
            <td><?php echo $value['typeroom'] ?></td>
            <td><?php echo $value['price'] ?></td>
            <td><?php echo $value['point'] ?></td>
            <td><?php echo $value['people'] ?></td>
            <td><?php echo $value['bed'] ?></td>
            <td><?php echo $value['size'] ?></td>
            <td><?php echo $value['images'] ?></td>
            <td><?php echo $value['content'] ?></td>
            <td><?php echo $value['status'] ?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
