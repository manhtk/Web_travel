<?php

function uploadImageHandler($field_name){
    $target_dir = getcwd() . "/libs/uploads/";
    $target_file = $target_dir . basename($_FILES[$field_name]["name"]);

    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES[$field_name]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES[$field_name]["size"] > 50000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES[$field_name]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES[$field_name]["name"]). " has been uploaded.";
            return $_FILES[$field_name]["name"];

        } else {
        
            echo "Sorry, there was an error uploading your file.";
        }
    }

}

function dd($arr){
    echo '<pre>';
    print_r($arr);
    echo '</pre>';die;
}
?>