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
<?php 
    $smg = "";

    //if upload button is pressed
if (isset($_POST['upload'])){
    $target = "hotel/".basename($_FILES['image']['']);
    echo var_dump($target);


    //connect to the database
    $db=mysqli_connect("localhost", "root", "", "webtravel");

    //get all the submidted data from the form

    $image = $_FILES['image'];
    $text =$_POST['text'];

    $sql = "INSERT INTO hotel(images) VALUES('$images')";
    echo var_dump($sql);
    mysqli_query($db, $sql);

    if(move_uploaded_file($_FILES['image'] , $target)){
        $smg="image uploaded successfully";
    }
        else {
            $smg="there was a propblem uploading image"; 
        }
    }

 ?>

<?php    
            $db = mysqli_connect("localhost", "root", "", "photos");
            $sql = "SELECT * FROM hotel";
            $result = mysqli_query($db, $sql);
            while ($row = mysqli_fetch_array($result)) {
                echo "<div id='img_div'>";
                echo "<img src='/hotel/".$row['image']."'>";
                echo "<p>".$row['text']."</p>";
                echo "</div>";
            }
         ?>
<form method="post" action="">
    <table>
        <tr>
            <td>Id hotel</td>
        </tr>
        <td><input class="form-control" type="text" name="hotel[]" placeholder="Id hotel"></td>
        <tr>
            <td>Id city</td>
        </tr>
        <td><input class="form-control" type="text" name="hotel[]" placeholder="Id city"></td>
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
        <td><input type="submit" name="add_hotel" value="Add data"></td>
    </table>
</form>
<br>
<button class="btn btn-primary" onclick="location.href='admin.php?controller=hotel'" type="button">Cancel
</button>


