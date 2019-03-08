<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add new hotel</title>
</head>
<body>
<!--
<a href="admin.php?controller=hotel">Go home</a>
-->

<form method="post" action="" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Id hotel</td>
        </tr>
        <td><input class="form-control" type="text" name="hotel_id" readonly></td>
        <tr>
            <td>Id city</td>
        </tr>
        <td><select class="form-control" name="city_id"><?php
                foreach ($data_dis as $value) {
                    ?>
                    <option><?php echo $value['city_id']; ?></option>
                <?php } ?>
            </select></td>
        <tr>
            <td>Hotel name</td>
        </tr>
        <td><input class="form-control" type="text" name="hotel_name" value="<?php
            echo $val['hotel_name'] ?>"><span
                    style="color: red"><?php echo $nameErr; ?></span></td>

        <tr>
            <td>Owner</td>
        </tr>
        <td><input class="form-control" type="text" name="owner"></td>
        <tr>
            <td>Description</td>
        </tr>
        <td><input class="form-control" type="text" name="description"></td>
        <tr>
            <td>Images</td>
        </tr>
        <td><input class="form-control" type="file" name="image"></td>
        <tr>
            
            <td>Address</td>
        </tr>
        <td><input class="form-control" type="text" name="address"></td>
    </table>
    <br>
    <button class="btn btn-primary" type="submit" name="add_hotel">Add data</button>
    <button class="btn btn-primary" onclick="location.href='admin.php?controller=hotel'" type="button">
        Cancel
    </button>
</form>



