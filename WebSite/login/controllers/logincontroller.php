<?php
    if (isset($_POST['s']) && $_POST['s']==1) {
        $errors = array();
        include('../config/db.php');
        $username = $_POST['username'];
        $password = md5($_POST['password_1']);

        if (empty($username))
            array_push($errors, '<p class="error">Username is required!</p>');
        if (empty($password))
            array_push($errors, '<p class="error">Password is required!</p>');

        if (!empty($username) && !empty($password)) {
            include('../models/loginmodel.php');
            $err_model = get_user($username, $password, $db);
            if (!empty($err_model)) {
                array_push($errors, $err_model);
            }
        }

        if(!empty($errors)) {
            include('../views/login.php');
        }

    }else
    {
        include('../views/login.php');
    }
?>