<?php
include '../controllers/forgetcontroller.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../libs/style.css ">
    <title>forget</title>
</head>
<body>
<div class="log">
    <div class="header-log">
        <h1>Forget</h1>

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
            <label for="" >Email</label>
            <input type="text" id="email" name="email"/>
        </div>
        <div class="input-group">
            <button type="submit" name="forgotPass" class="btn btn-primary">Request Password</button>
        </div>


    </form>

</div>
</body>
</html>