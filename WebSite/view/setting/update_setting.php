<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <div class="suacaidat">
        <h3>Update Setting</h3>
        <a href="admin.php?controller=setting">Go home</a>
        <form method="post" action="">
            <table border="0">
                <tr>
                    <td>ID</td>
                </tr>
                    <td><input type="text" name="setting[]" value="<?php echo $value['id'] ?>" placeholder="id"></td>
                <tr>
                    <td>Date Format</td>
                </tr>
                    <td><input type="text" name="setting[]" value="<?php echo $value['dateformat'] ?>" placeholder="date format"></td>
                <tr>
                    <td>Logo</td>
                </tr>
                    <td><input type="text" name="setting[]" value="<?php echo $value['logo'] ?>" placeholder="logo"></td>
                <tr>
                    <td>Email Admin</td>
                </tr>
                    <td><input type="text" name="setting[]" value="<?php echo $value['admin_email'] ?>" placeholder="email admin"></td>
                <tr>
                    <td>Paging</td>
                </tr>
                    <td><input type="text" name="setting[]" value="<?php echo $value['paging'] ?>" placeholder="paging">
                </td>
                    <td><input type="submit" name="update_setting" value="Update data"></td>
            </table>
        </form>
    </div>
</body>
</html>