<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <div class="suacaidat">
        <h3>Update Setting</h3>
        
        <form method="post" action="">
            <table border="0">
                
                    <td><input type="hidden" name="setting[]" value="<?php echo $value['id'] ?>" placeholder="id"></td>
                <tr>
                    <td>Date Format</td>
                
                    <td><select>
                        <option><?php echo $value['dateformat'] ?></option>
                        <option>yyyy/mm/dd</option>
                        <option>yyyy/dd/mm</option>
                        <option>mm/dd/yyyy</option>
                        <option>dd/mm/yyyy</option>
                        <option>mm/yyyy/dd</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Logo</td>
                
                    <td><input type="text" name="setting[]" value="<?php echo $value['logo'] ?>" placeholder="logo"></td>
                </tr>
                <tr>
                    <td>Email Admin</td>
                
                    <td><input type="email" name="setting[]" value="<?php echo $value['admin_email'] ?>" placeholder="email admin"></td>
                </tr>
                <tr>
                    <td>Paging</td>
                
                    <td><input type="number" name="setting[]" min = "1" value="<?php echo $value['paging'] ?>" placeholder="paging">
                
                </td>
            </tr>
                    

            </table>
        </form>
            <div style="text-align: center;padding:10px; ">
            <td><button onclick="location.href='admin.php?controller=setting'" type="button" style="margin-right: 18px;">Cancel</button>
            <td><input type="submit" name="update_setting" value="Update"></td>
        </td></div>
        
    </div>
</body>
</html>