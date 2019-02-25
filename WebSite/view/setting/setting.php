<div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
    <thead>
            <tr>
                <th>STT</th>
                <th>Date Format</th>
                <th>Logo</th>
                <th>Admin Email</th>
                <th>Paging</th>
                <th>Option</th>
            </tr>
        </thead>
    <tbody>
    <?php
    foreach ($data as $value) {
        ?>
        <tr>
            <td><?php echo $value['id'] ?></td>
            <td><?php echo $value['dateformat'] ?></td>
            <td style="text-align: center;" ><img src="libs/uploads/<?php echo $value['logo']?>"  style="width: 50px; height: auto;" ></td>
            <td><?php echo $value['admin_email'] ?></td>
            <td><?php echo $value['paging'] ?></td>
            <td><a href="admin.php?controller=setting&action=update&id=<?php echo $value['id'] ?>">Update</a></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
</div>
