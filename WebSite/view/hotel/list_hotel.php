<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
<form method="post" action="admin.php?controller=hotel&action=delete_all">
    <table border="1">
        <thead>
        <tr>
            <th>Id hotel</th>
            <th>City name</th>
            <th>Hotel Name</th>
            <th>Owner</th>
            <th>Description</th>
            <th>Images</th>
            <th>Starnum</th>
            <th>Address</th>
            <th>Edit</th>
            <th>Delete</th>
            <th><input type="checkbox" id="selAl">Select All</th>
        </tr>
        </thead>
        <tbody>
        <?php
        if ($data == 0) {
            echo "Has no record";
        } else {
            foreach ($data as $value) {
                ?>
                <tr>
                    <td><?php echo $value['hotel_id'] ?></td>
                    <td><?php echo $value['city_name'] ?></td>
                    <td><?php echo $value['hotel_name'] ?></td>
                    <td><?php echo $value['owner'] ?></td>
                    <td><?php echo $value['description'] ?></td>
                    <td><img src="<?php echo $value['images'] ?>" style="width: 50px; height: 50px"></td>
                    <td><?php echo $value['starnum'] ?></td>
                    <td><?php echo $value['address'] ?></td>
                    <td><a href="admin.php?controller=hotel&action=update&id=<?php echo $value['hotel_id'] ?>">Edit</a>
                    </td>
                    <td><a onclick="return confirm('Are you want to delete record?')"
                           href="admin.php?controller=hotel&action=delete_one&id=<?php echo $value['hotel_id'] ?>"
                           title="Delete">Delete</a>
                    </td>
                    </td><?php
                    echo "<td>"; ?><input type="checkbox" name="checkbox[]"
                                          value="<?php echo $value['hotel_id']; ?>"/><?php echo "</td>"; ?>
                </tr>
            <?php }
        } ?>
        </tbody>
    </table>
    <td><a href="admin.php?controller=hotel&action=add">Add new data</td>
    <input type='submit' name='delete' onclick="return confirm('Are you sure?')" value='Delete'>
</form>
