<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
if (isset($_POST['s']) && $_POST['s']==1) {
    $errors = array();
    $email = $_POST['email'];
    if (isset($_POST['email'])) {
        $conn = new mysqli('localhost', 'root', '', 'webtravel');
        $email = $conn->real_escape_string($_POST['email']);
        $sql = $conn->query("SELECT user_id FROM user WHERE email='$email' OR username = '$email'");
        if ($sql->num_rows > 0) {
            $token = "qwertyuiopasdfghjklllzxcvbnm0123456789";
            $token =str_shuffle($token);
            $token =substr($token,0,10);
            $conn->query("UPDATE user SET token='$token', 
                      tokenExpire=DATE_ADD(NOW(), INTERVAL 5 MINUTE)
                      WHERE email='$email' OR username='$email'
            ");
            require '../libs/PHPMailer/PHPMailer.php';
            require '../libs/PHPMailer/Exception.php';
            require '../libs/PHPMailer/SMTP.php';
            $mail = new PHPMailer();
            $mail->addAddress($email);
            $mail->setFrom("thanguk1997@gmail.com", "Thang");
            $mail->Subject = "Reset Password";
            $mail->isHTML(true);
            $mail->Body = "
	            Hi,<br><br>
	            
	            In order to reset your password, please click on the link below:<br>
	            <a href='
	           http://localhost/Web_travel/WebSite/login/views/resetPassword.php?email=$email&token=$token
	            '>http://localhost/Web_travel/WebSite/login/views/resetPassword.php?</a><br><br>
	            
	            Kind Regards,<br>
	            My Name
	        ";
            if ($mail->send())
                array_push($errors,'<p class="error">Please Check Your Email Inbox!</p>') ;
            else
                array_push($errors,'<p class="error">Something Wrong Just Happened! Please try again!</p>') ;
        } else
            array_push($errors,'<p class="error">Please Check Your Inputs!</p>') ;
    }

}
?>