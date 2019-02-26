<?php
include "../controllers/resetcontroller.php" ;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../libs/style.css ">
    <title>reset password</title>
</head>
<body>
<div class="log">
    <div class="header-log">
        <h1>Reset Password</h1>

    </div>
    <form action="" method="POST">
        <input type="hidden" name="s" value="1">
        <?php
        if(isset($errors)) {
            if (!empty($errors)) {
                foreach ($errors as $k => $v){
                    echo $v . '<br />';
                }
            }
        }
        ?>
        <div class="input-group">
            <label for="" >New Password</label>
            <input type="password"  name="password_1"/>
        </div>
        <div class="input-group">
            <label for="" >New Password again</label>
            <input type="password"  name="password_2"/>
        </div>
        <div class="input-group">
            <button type="submit" name="resetpass" class="btn btn-primary">UpDate Password</button>
        </div>


    </form>

</div>
</body>
</html>