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

<form method="post" action="">
    <table>
        <tr>
            <td>Id hotel</td>
        </tr>
        <td><input class="form-control" type="text" placeholder="Id hotel" readonly></td>
        <tr>
            <td>Id city</td>
        </tr>
        <td><select class="form-control" name="hotel[]"><?php
                foreach ($data_dis as $value) {
                    ?>
                    <option><?php echo $value['city_id']; ?></option>
                <?php } ?>
            </select></td>
        <tr>
            <td>Hotel name</td>
        </tr>
        <td><input class="form-control" type="text" name="hotel[]" placeholder="Hotel name"></td>
        <tr>
            <td>Owner</td>
        </tr>
        <td><input class="form-control" type="text" name="hotel[]" placeholder="Owner"></td>
        <tr>
            <td>Description</td>
        </tr>
        <td><input class="form-control" type="text" name="hotel[]" placeholder="Description"></td>
        <tr>
            <td>Images</td>
        </tr>
        <td><input class="form-control" type="text" name="hotel[]" placeholder="Image"></td>
        <tr>
            <td>Starnum</td>
        </tr>
        <td><input class="form-control" type="text" name="hotel[]" placeholder="Starnum"></td>
        <tr>
            <td>Address</td>
        </tr>
        <td><input class="form-control" type="text" name="hotel[]" placeholder="Address"></td>
        <td><input style="margin-left: 30px;" type="submit" name="add_hotel" value="Add data"></td>
    </table>
</form>
<br>

<button class="btn btn-primary" onclick="location.href='admin.php?controller=hotel'" type="button">Cancel
</button>

