
<?php
    $db=mysqli_connect('localhost','root','','webtravel') or die ('error connect sqlserver');
    function get_user ($username,$password_1,$password_2,$email, $conn)
    {        

        if (isset($_POST['register'])) {
        $username=mysqli_real_escape_string($conn,$username);
        $email=mysqli_real_escape_string($conn,$email);
        $password_1=mysqli_real_escape_string($conn,$password_1);
        $password_2=mysqli_real_escape_string($conn,$password_2);
            $password =md5($password_1);
            
            // $sql="INSERT INTO user(username,password,email) VALUES ('$username','$password','$email')";
        $result = "SELECT * FROM user WHERE username ='$username' OR email = '$email'";
        
        $check_username =mysqli_query($conn,$result);
        echo "<pre>";
   print_r($check_username);
echo "</pre>";

        if ($check_username->num_rows >0) {
            
            echo 'Tài khoản hoặc email đã tồn tại';
            include('../views/register.php');
        }
        else {
            $sql="INSERT INTO user(username,password,email) VALUES ('$username','$password','$email')";
            mysqli_query($conn,$sql);
            
        }
        
            $query = mysqli_query($conn,$sql);
            
            $_SESSION['username']=$username;
            $_SESSION['success']="You are loged in";
            header('location:index.php');
       
        
    }
    }

?>