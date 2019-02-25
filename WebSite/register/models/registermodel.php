
<?php
    $db=mysqli_connect('localhost','root','','webtravel') or die ('error connect sqlserver');
    function get_user ($username,$password_1,$password_2,$email,$role, $conn)
    {        

        if (isset($_POST['register'])) {

        $username=mysqli_real_escape_string($conn,$username);
        $email=mysqli_real_escape_string($conn,$email);
        $password_1=mysqli_real_escape_string($conn,$password_1);
        $password_2=mysqli_real_escape_string($conn,$password_2);
        $password =md5($password_1);
        $role = isset($_POST['partner']) ? $_POST['partner'] : 'normal-partner';
            if($role == "normal-partner"){
                $role = 1;
            }
            else {
                $role = 2;
            }
        $result = "SELECT * FROM user WHERE username ='$username' OR email = '$email'";
        $check_username =mysqli_query($conn,$result);
        if ($check_username->num_rows >0) {
            $message1 = "Account already exists";
            echo "<script type='text/javascript'>alert('$message1');</script>";
            // array_push($errors, '<p class="error">Tài khoản hoặc email đã tồn tại </p>');
            //include('../views/register.php');
            include "../views/register.php";
        }
        else {
            $sql="INSERT INTO user(username,password,email,role) VALUES ('$username','$password','$email','$role')";
            // mysqli_query($conn,$sql);
            $query = mysqli_query($conn,$sql);
            $_SESSION['username']=$username;
            $_SESSION['success']="You are loged in";
            $message = "Sign up success";
            echo "<script type='text/javascript'>alert('$message');</script>";
            include ('../../login/views/login.php');
        }
    }
    }

?>