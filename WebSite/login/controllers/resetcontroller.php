<?php
if(isset($_GET['token']) && isset($_GET['email'])) {
    $token=$_GET['token'];
    $email=$_GET['email'];
    $conn = new mysqli('localhost', 'root', '', 'webtravel');
    $sqlC = $conn->query("SELECT user_id FROM user WHERE
			email='$email' AND token='$token' AND token<>'' AND tokenExpire > NOW()
		");


    if ($sqlC->num_rows > 0) {

        if (isset($_POST['s']) && $_POST['s'] == 1) {
            $errors = array();
            $password_1 = $_POST['password_1'];
            $password_2 = $_POST['password_2'];
            if (isset($_POST['resetpass'])) {
                $check = true;
                if (empty($_POST['password_1'])) {
                    array_push($errors, '<p class="error">Password is required</p>');
                    $check = false;
                }
                if ($_POST['password_1'] != $_POST['password_2']) {
                    array_push($errors, '<p class="error">The two passwords do not match</p>');
                    $check = false;
                }

                if ($check) {
                    $password = md5($password_1);
                    $conn->query("UPDATE user SET token='', password = '$password'
				WHERE email='$email'
			");
                    header('location:../../login');
                }
            }

        }
    }else{
        header('location:../../login');
    }
}
?>