<?php

if (isset($_POST['s']) && $_POST['s']==1) {
    $errors = array();
    $password_1= $_POST['password_1'];
    $password_2= $_POST['password_2'];
    if (isset($_POST['email'])) {
        $conn = new mysqli('localhost', 'root', '', 'webtravel');
        $email = $conn->real_escape_string($_POST['email']);
        $token = $conn->real_escape_string($_GET['token']);
        $sql = $conn->query("SELECT user_id FROM user WHERE
			email='$email' AND token='$token' AND token<>'' AND tokenExpire > NOW()
		");
        if ($sql->num_rows > 0) {

            $newPassword = generateNewString();
            $newPasswordEncrypted = password_hash($newPassword, PASSWORD_BCRYPT);
            $conn->query("UPDATE user SET token='', password = '$newPasswordEncrypted'
				WHERE email='$email'
			");

        }
    }
}
?>