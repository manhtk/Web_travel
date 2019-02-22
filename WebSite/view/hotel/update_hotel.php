<?php include_once "public/skill/header.php" ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
    </head>
<body>
<form method="post" action="">
    <table border="0">
        <tr>
            <td>Id hotel</td>
        </tr>
        <td><input type="text"  class="form-control" name="hotel[]" value="<?php echo $value["hotel_id"] ?>" placeholder="Id hotel" readonly ></td>
        <tr>
            <td>Id city</td>
        </tr>
        <td><input type="text"  class="form-control" name="hotel[]" value="<?php echo $value['city_id'] ?>" placeholder="Id city"></td>
        <tr>
            <td>Name</td>
        </tr>
        <td><input type="text"  class="form-control" name="hotel[]" value="<?php echo $value['hotel_name'] ?>" placeholder="Name"></td>
        <tr>
            <td>Owner</td>
        </tr>
        <td><input type="text"  class="form-control" name="hotel[]" value="<?php echo $value['owner'] ?>" placeholder="Owner"></td>
        <tr>
            <td>Description</td>
        </tr>
        <td><input type="text"  class="form-control" name="hotel[]" value="<?php echo $value['description'] ?>" placeholder="Description">
        </td>
        <tr>
            <td>Images</td>
        </tr>
        <td><input type="text"  class="form-control" name="hotel[]" value="<?php echo $value['images'] ?>" placeholder="Image"></td>
        <tr>
            <td>Starnum</td>
        </tr>
        <td><input type="text"  class="form-control" name="hotel[]" value="<?php echo $value['starnum'] ?>" placeholder="Starnum"></td>
        <tr>
            <td>Address</td>
        </tr>
        <td><input type="text"  class="form-control" name="hotel[]" value="<?php echo $value['address'] ?>" placeholder="Address"></td>
        <td><input type="submit" name="update_hotel" value="Update data"></td>
    </table>
</form>
<br>
<button class="btn btn-primary" onclick="location.href='admin.php?controller=hotel'" type="button">Go home
</button>

<?php include_once "public/skill/footer.php";