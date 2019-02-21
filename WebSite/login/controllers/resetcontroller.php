<?php

if (isset($_POST['s']) && $_POST['s']==1) {
    $errors = array();
    $password_1= $_POST['password_1'];
    $password_2= $_POST['password_2'];
    if (isset($_POST['email'])) {
        $conn = new mysqli('localhost', 'root', '', 'webtravel');
        $email = $conn->real_escape_string($_POST['email']);
        $sql = $conn->query("SELECT user_id FROM user WHERE email='$email' OR username = '$email'");
        if ($sql->num_rows > 0) {

            $conn->query("UPDATE user SET password='$password_1', 
                      token=''
                      WHERE email='$email' OR username='$email'
            ");


            if ($mail->send())
                array_push($errors,'<p class="error">Please Check Your Email Inbox!</p>') ;
            else
                array_push($errors,'<p class="error">Something Wrong Just Happened! Please try again!</p>') ;
        } else
            array_push($errors,'<p class="error">Please Check Your Inputs!</p>') ;
    }

}
?>