<?php include('partial/menu.php')?>
<?php include('partial/login-check.php')?> 
<!...Main Contant Starts...!>
        <div class="main-content">
            <div class="wrapper">
                <h1>Manage Order</h1>
            <!-- Button to add admin -->
            <br/><br/>
            <a href="add-admin.php" class="btn-primary">Add Order</a>
            <br/><br/><br/>
                <table class="tbl-full">
                <tr>
                    <th>S.N.</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Quntity</th>
                    <th>Customer Name</th>
                    <th>Customer Address</th>
                    <th>Action</th>
                </tr>
                
                <tr>
                    <th>1.</th>
                    <th>Chicken Mushroom</th>
                    <th>$20.00</th>
                    <th>1</th>
                    <th>Neha </th>
                    <th>Street 2, Main road,Raipur.</th>
                    <td>
                                <a href="#" class="btn-secondary">Confirm Order</a>
                                <a href="<?php echo SITEURL; ?>Admin/delete-admin.php?id=<?php echo$id;?>" class="btn-delete">Delete Order</a>
                              </td>

                </tr>
               
            </table>
            </div>   
        </div>
    <!...Main Contant Ends...!>


<?php include('partial/footer.php')?>