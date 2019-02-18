<?php
    if (isset($_POST['s']) && $_POST['s']==1)
    {
        include('../config/db.php');
        $username=$_POST['username'];
        $password=$_POST['password_1'];


        include ('../models/loginmodel.php');
        get_user($username,$password, $db);
    }else
    {
        include('../views/login.php');
    }


?>