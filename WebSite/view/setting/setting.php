<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Danh sach khach san</title>
</head>
<body>
    <div class="danhsach">
        <h3>List Setting Page</h3>
<table border="1px">
    <thead>
            <tr>
                <th>STT</th>
                <th>Date Format</th>
                <th>Logo</th>
                <th>Address Admin Email</th>
                <th>Phân Trang</th>
                <th>Tùy Chọn</th>
            </tr>
        </thead>
    <tbody>
    <?php
    foreach ($data as $value) {
        ?>
        <tr>
            <td><?php echo $value['id'] ?></td>
            <td><?php echo $value['dateformat'] ?></td>
            <td><?php echo $value['logo'] ?></td>
            <td><?php echo $value['admin_email'] ?></td>
            <td><?php echo $value['paging'] ?></td>
            <td><a href="admin.php?controller=setting&action=update&id=<?php echo $value['id'] ?>">Edit</a></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
</div>
</body>
</html>