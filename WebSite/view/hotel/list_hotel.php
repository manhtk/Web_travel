<div class="table-responsive">
<form action="" method="get"
      class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
    <div class="input-group" style="border-radius: 3px; border:1px solid #DDDFEB; margin-bottom: 20px">

        <input type="hidden" name="controller" value="hotel">
        <input type="text" name="key" class="form-control bg-light border-0 small"
               placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
            <button class="btn btn-primary" type="submit">
                <i class="fas fa-search fa-sm"></i>
            </button>
        </div>
        <input type="hidden" name="action" value="search">
    </div>
</form>
<form method="post" action="admin.php?controller=hotel&action=delete_all">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>Id hotel</th>
            <th>City name</th>
            <th>Hotel Name</th>
            <th>Owner</th>
            <th>Description</th>
            <th>Images</th>
            <th>Address</th>
            <th>Edit</th>
            <th>Delete</th>
            <th><input type="checkbox" id="selAl">Select All</th>
        </tr>
        </thead>
        <tbody>
        <?php
        if ($data == 0) {
            echo "Has no record";
        } else {
            foreach ($data as $value) {
                ?>
                <tr>
                    <td><?php echo $value['hotel_id'] ?></td>
                    <td><?php echo $value['city_name'] ?></td>
                    <td><?php echo $value['hotel_name'] ?></td>
                    <td><?php echo $value['owner'] ?></td>
                    <td><?php echo $value['description'] ?></td>
                    <td><img src="<?php echo $value['images'] ?>" style="width: 50px; height: 50px">
                    </td>
                    <td><?php echo $value['address'] ?></td>
                    <td><a href="admin.php?controller=hotel&action=update&id=<?php echo $value['hotel_id'] ?>">Edit</a>
                    </td>
                    <td><a onclick="return confirm('Are you want to delete record?')"
                           href="admin.php?controller=hotel&action=delete_one&id=<?php echo $value['hotel_id'] ?>"
                           title="Delete">Delete</a>
                    </td>
                    </td><?php
                    echo "<td>"; ?><input type="checkbox" name="checkbox[]"
                                          value="<?php echo $value['hotel_id']; ?>"/><?php echo "</td>"; ?>
                </tr>
            <?php }
        } ?>
        </tbody>
    </table>
    <button class="btn btn-primary" type='submit' name='delete' onclick="return confirm('Are you sure?')">Delete</button>
</form>
<?php 
    $page = $db->paging('hotel');
?>

<div class="paging">
    <?php
    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
    for ($i=1; $i<=$page ; $i++) { 
        $link = 'admin.php?controller=hotel&action=list&page=' . $i;
        $class_active = '';
        if($current_page == $i)
            $class_active = 'active';
        echo "<a href='". $link ."' class='". $class_active ."'>Page $i</a> - ";
    }
    ?>
</div>
</div>
