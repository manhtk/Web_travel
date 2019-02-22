<?php
    function get_user($username,$password_1, $conn)
    {
        $qr=mysqli_query($conn, "SELECT * FROM user where username='$username' and password='$password_1'");
        if (mysqli_num_rows($qr)>0)
        {
            $row=mysqli_fetch_array($qr);
            $_SESSION['currUser']=$row['username'];
            if ($row['role']==1 || $row['role']==2 ) {
                $_SESSION['currAdmin'] = $row['role'];
                header ('Location:../../admin.php') ;
            }
            else
            {
               header('Location:../../view/site/HomePage.php');
            }
        }else
        {
            return '<p class="error">Username or Password is not correct !!!</p>  ';
        }

        return '';
    }
?>
