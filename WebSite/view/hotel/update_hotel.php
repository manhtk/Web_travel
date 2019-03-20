<?php include_once "public/skill/header.php" ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
    </head>
<body>
<form method="post" action="" enctype="multipart/form-data">
    <table border="0">
        <tr>
            <td>Id hotel</td>
        </tr>
        <td><input class="form-control" type="text" name="hotel_id" value="<?php echo $value["hotel_id"] ?>" placeholder="Id hotel" readonly></td>
        <tr>
            <td>Id city</td>
        </tr>
        <td><input class="form-control" type="text" name="city_id" value="<?php echo $value['city_id'] ?>" placeholder="Id city"></td>
        <tr>
            <td>Name</td>
        </tr>
        <td><input class="form-control" type="text" name="hotel_name" value="<?php echo $value['hotel_name'] ?>" placeholder="Name"><span
                    style="color: red"><?php echo $nameErr; ?></span></td>
        <tr>
            <td>Owner</td>
        </tr>
        <td><input class="form-control" type="text" name="owner" value="<?php echo $value['owner'] ?>" placeholder="Owner"></td>
        <tr>
            <td>Description</td>
        </tr>
        <td><input class="form-control" type="text" name="description" value="<?php echo $value['description'] ?>" placeholder="Description">
        </td>
        <tr>
            <td>Images</td>
        </tr>
        <td><img class="form-control" src="<?php echo $value['images'] ?>" style="width: 70px; height: 70px"><input class="form-control" type="file" name="image" value="<?php echo $value['images'] ?>"></td>
        <input type="hidden" name="image1" value="<?php echo $value['images']  ?>">

        <tr>
            <td>Starnum</td>
        </tr>
        <td><input class="form-control" type="text" name="starnum" value="<?php echo $value['starnum'] ?>" placeholder="Starnum"></td>
        <tr>
            <td>Address</td>
        </tr>
        <td><input class="form-control" type="text" name="address" value="<?php echo $value['address'] ?>" placeholder="Address"></td>
    </table>
    <br>
    <button class="btn btn-primary" type="submit" name="update_hotel">Update data</button>
    <button class="btn btn-primary" onclick="location.href='admin.php?controller=hotel'" type="button">
        Cancel
    </button>
</form>

<?php include_once "public/skill/footer.php";