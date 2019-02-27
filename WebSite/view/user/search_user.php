<div class="table-responsive">
<?php if ($data_Search == 0) {
    echo "Found no record!";
} else { ?>
<form method="post" action="">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
        <tr>
                <th>User_id</th>
                <th>UserName</th>
                <th>PassWord</th>
                <th>Role</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Address</th>
                <th>Email</th>
                <th>IdentityCard</th>
                <th>PhoneNumber</th>
                <th>Birthday</th>
                <th>Gender</th>
                <th>Regisdate</th>
                <th>Edit</th>
                <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($data_Search

                 as $value) {
            ?>
            <tr>
                <td><?php echo $value['user_id'] ?></td>
                <td><?php echo $value['username'] ?></td>
                <td><?php echo $value['password'] ?></td>
                <td><?php echo $value['role'] ?></td>
                <td><?php echo $value['first_name'] ?></td>
                <td><?php echo $value['last_name'] ?></td>
                <td><?php echo $value['address'] ?></td>
                <td><?php echo $value['email'] ?></td>
                <td><?php echo $value['identity_card'] ?></td>
                <td><?php echo $value['phone_number'] ?></td>
                <td><?php echo $value['birthday'] ?></td>
                <td><?php echo $value['gender'] ?></td>
                <td><?php echo $value['regisdate'] ?></td>
                <td><a href="admin.php?controller=user&action=update&id=<?php echo $value['user_id'] ?>">Edit</a></td>
                <td><a onclick="return confirm('Are you want to delete record?')"
                       href="admin.php?controller=user&action=delete&id=<?php echo $value['user_id'] ?>"
                       title="Delete">Delete</a>
                </td>
            </tr>
        <?php }
        } ?>
        </tbody>
    </table>
</form>
<br>
<button class="btn btn-primary" onclick="location.href='admin.php?controller=user&action=list'" type="button">Go home
</button>

</div>