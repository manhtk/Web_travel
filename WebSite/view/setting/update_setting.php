<div class="row">
    <div class="col-md-4">
         <form method="post" action="" enctype="multipart/form-data">
        <table border="0">
            <div class="form-group">
                <label for="exampleInputPassword1">ID</label>
                <input type="text" name="setting[]" value="<?php echo $value['id']  ?>" class="form-control" readonly />
            </div>
            <tr>
                <div class="form-group">
                    <label for="exampleInputPassword1">Date Format</label>
                    <input type="text" name="setting[]" value="<?php echo $value['dateformat'] ?>" placeholder="data format" class="form-control"  >
                </div>
            </tr>
            
            <tr>
                <div class="form-group">
                    <label for="exampleInputPassword1">Email Admin</label>
                    <input type="text" name="setting[]" value="<?php echo $value['admin_email'] ?>" placeholder="email admin" class="form-control"  >
                </div>
            </tr>
            <tr>
                <label for="exampleInputPassword1">Paging</label>
                
                <input type="number" name="setting[]"  min = "1" value="<?php echo $value['paging'] ?>" placeholder="paging" class="form-control">
                    
               
            </tr>
            <tr>

                <label for="exampleInputPassword1">Logo</label>
                
                <td>
                    <input type="file" name="image" value="<?php echo $value['logo'] ?>" placeholder="logo">
                    <input type="hidden" name="image1" value="<?php echo $value['logo'] ?>" />
                </td>
            </tr>  
            

        </table>
        
        <div style="text-align: center;padding:10px; ">
            <td><button onclick="location.href='admin.php?controller=setting'" class="btn btn-primary" type="button" style="margin-right:28px;">Cancel</button>
                <td><input type="submit" class="btn btn-primary" name="update_setting" value="Update"></td>
            </td></div>
        </form>
    </div>
</div>