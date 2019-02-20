<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="../libs/style.css">
</head>
<body>
<div class="log">
    <div class="header-log">
        <h1>Login</h1>

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
            <label for="">Username</label>
            <input type="text" name="username" />
        </div>
        <div class="input-group">
            <label for="">Password</label>
            <input type="password" name="password_1" />
        </div>
        <div class="input-group">
            <button type="submit" name="login" class="btn">Login</button>
        </div>
        <p>
            Not yet a member ? <a href="register.php">Sign up</a>
        </p>
        <p>
            <a href="../views/forget.php">forgot password ?</a>
        </p>
    </form>
</div>
</body>
</html>