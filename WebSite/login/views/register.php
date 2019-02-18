<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="../libs/style.css">
</head>
<body>
<div class="log">
    <div class="header-log">
        <h1>Register</h1>
    </div>
    <form action="register.php" method="POST">
        <?php
        include ('errors.php');
        ?>
        <div class="input-group">
            <label for="">Username</label>
            <input type="text" name="username"  value="<?php echo $username; ?> " />
        </div>
        <div class="input-group">
            <label for="">Email</label>
            <input type="text" name="email" value="<?php echo $email; ?> " />
        </div>
        <div class="input-group">
            <label for="">Password</label>
            <input type="password" name="password_1" />
        </div>
        <div class="input-group">
            <label for="">Confilm password</label>
            <input type="password" name="password_2" />
        </div>
        <div class="input-group">
            <button type="submit" name="register" class="btn">Register</button>
        </div>
        <p>
            Not yet a member ? <a href="login.php">Sign In</a>
        </p>
    </form>
</div>

</body>
</html>