<?php include('partial/menu.php')?>

<?php include('partial/login-check.php')?> 
    <!...Main Contant Starts...!>
        <div class="main-content">
            <div class="wrapper">
                <h1>Manage Food</h1>
            <!-- Button to add admin -->
            <br/><br/>
            <a href="add-admin.php" class="btn-primary">Add Food</a>
            <br/><br/><br/>
                <table class="tbl-full">
                <tr>
                    <th>S.N.</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Image_Name </th>
                    <th>Featured</th>
                    <th>Active</th>
                    <th>Action</th>
                </tr>
                <tr>
                <th>1.</th>
                <th>Chicken Mushroom</th>
                <th>$20.00</th>
                <th>Food-menu-567.jpg</th>
                <th>Yes</th>
                <th>Yes</th>
                <th>
                                <a href="#" class="btn-secondary">Update Food</a>
                                <a href="<?php echo SITEURL; ?>Admin/delete-admin.php?id=<?php echo$id;?>" class="btn-delete">Delete Food</a>
                              </th>
                </tr>
                <tr>
                <th>2.</th>
                <th>Chicken Speical</th>
                <th>$25.00</th>
                <th>Food-menu-587.jpg</th>
                <th>Yes</th>
                <th>Yes</th>
                <th>
                                <a href="#" class="btn-secondary">Update Food</a>
                                <a href="<?php echo SITEURL; ?>Admin/delete-admin.php?id=<?php echo$id;?>" class="btn-delete">Delete Food</a>
                              </th>
                </tr>
                <tr>
                <th>3.</th>
                <th>Sushi</th>
                <th>$5.99</th>
                <th>Food-menu-457.jpg</th>
                <th>Yes</th>
                <th>Yes</th>
                <th>
                                <a href="#" class="btn-secondary">Update Food</a>
                                <a href="<?php echo SITEURL; ?>Admin/delete-admin.php?id=<?php echo$id;?>" class="btn-delete">Delete Food</a>
                              </th>
                </tr>
                <tr>
                <th>4.</th>
                <th>Pudding</th>
                <th>$10.00</th>
                <th>Food-menu-787.jpg</th>
                <th>Yes</th>
                <th>Yes</th>
                <th>
                                <a href="#" class="btn-secondary">Update Food</a>
                                <a href="<?php echo SITEURL; ?>Admin/delete-admin.php?id=<?php echo$id;?>" class="btn-delete">Delete Food</a>
                              </th>
                </tr>
               
            </table>
            </div>   
        </div>
    <!...Main Contant Ends...!>

<?php include('partial/footer.php')?>