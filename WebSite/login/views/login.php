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
        <div class="input-group">
            <label for="">Username</label>
            <input type="text" name="username" />
        </div>
        <div class="input-group">
            <label for="">Password</label>
            <input type="text" name="password_1" />
        </div>
        <div class="input-group">
            <button type="submit" name="login" class="btn">Login</button>
        </div>
        <p>
            Not yet a member ? <a href="register.php">Sign up</a>
        </p>
    </form>
</div>
</body>
</html>