<?php include('partial/menu.php')?>  
<?php include('partial/login-check.php')?> 
    <!...Main Contant Starts...!>
        <div class="main-content">
            <div class="wrapper">
                <h1>Manage Admin</h1>
         
            <?php 
            
                if(isset($_SESSION['add'])){
                    echo $_SESSION['add'];//displaying session message
                    unset($_SESSION['add']);//removing session message
                }  
                if(isset($_SESSION['delete'])){
                    echo $_SESSION['delete'];//displaying session message
                    unset($_SESSION['delete']);//removing session message
                }  
            ?>    
            <br/><br/>

            <!-- Button to add admin -->
            <br/><br/>
            <a href="add-admin.php" class="btn-primary">Add Admin</a>
            <br/><br/><br/>
                <table class="tbl-full">
                <tr>
                    <th>S.N.</th>
                    <th>Full Name</th>
                    <th>User Name</th>
                    <th>Action </th>
                </tr>
                
                <?php 
                    //Query to get all admin
                    $sql= "SELECT*FROM tbl_admin";                
                 // execute the query
                 $res = mysqli_query($conn, $sql);
                 // Check whether the query is executed or not 
                 if($res==TRUE)
                 {
                     // COUNT rOWS TO CHECK WHETHER WE HAVE DATA IN DATABASE OR NOT 
                     $count= mysqli_num_rows($res);// function to get all rows in DB.
                     $id=1;
                     //Check the num of rows 
                     if($count>0)
                    {
                        // we have data in DB
                        while($rows=mysqli_fetch_assoc($res))
                        {
                            //While loop will run as long as we have data in DB
                            //Get individual data
                          
                            $full_name=$rows['FULL_NAME'];
                            $username=$rows['USERNAME']; 

                            //Display the value in our table

                            ?>
                             <tr>
                                <td><?php echo $id++ ; ?></td>   
                                <td><?php echo $full_name ;?></td> 
                                <td><?php echo $username ;?></td>
                                <td>
                                <a href="#" class="btn-secondary">Update Admin</a>
                                <a href="<?php echo SITEURL; ?>Admin/delete-admin.php?id=<?php echo$id;?>" class="btn-delete">Delete Admin</a>
                              </td>
                            <tr>  
                            <?php
                        }
                    }
                 }
                
                ?>
               
            </table>
            </div>   
        </div>
    <!...Main Contant Ends...!>

<?php include('partial/footer.php')?>

