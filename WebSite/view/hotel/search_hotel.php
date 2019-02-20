<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Danh sach khach san</title>
</head>
<body>
<br>
<?php if ($data_Search == 0) {
    echo "Found no record!";
} else { ?>
<form method="post" action="">
    <table border="1">
        <thead>
        <tr>
            <th>Id hotel</th>
            <th>Id city</th>
            <th>City name</th>
            <th>Name</th>
            <th>Owner</th>
            <th>Description</th>
            <th>Images</th>
            <th>Starnum</th>
            <th>Address</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($data_Search

                 as $value) {
            ?>
            <tr>
                <td><?php echo $value['hotel_id'] ?></td>
                <td><?php echo $value['city_id'] ?></td>
                <td><?php echo $value['city_name'] ?></td>
                <td><?php echo $value['hotel_name'] ?></td>
                <td><?php echo $value['owner'] ?></td>
                <td><?php echo $value['description'] ?></td>
                <td><img src="<?php echo $value['images'] ?>" style="width: 50px; height: 50px"></td>
                <td><?php echo $value['starnum'] ?></td>
                <td><?php echo $value['address'] ?></td>
                <td><a href="admin.php?controller=hotel&action=update&id=<?php echo $value['hotel_id'] ?>">Edit</a></td>
                <td><a onclick="return confirm('Are you want to delete record?')"
                       href="admin.php?controller=hotel&action=delete&id=<?php echo $value['hotel_id'] ?>"
                       title="Delete">Delete</a>
                </td>
            </tr>
        <?php }
        } ?>
        </tbody>
    </table>
</form>
<br>
<button class="btn btn-primary" onclick="location.href='admin.php?controller=hotel'" type="button">Go home
</button>

</body>
</html>