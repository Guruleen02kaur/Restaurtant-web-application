<?php include('partial/menu.php');?>
<?php include('partial/login-check.php')?> 
    <!...Main Contant Starts...!>
        <div class="main-content">
            <div class="wrapper">
                <h1>Manage Category</h1>
             <!-- Button to add Category -->
             <br/><br/>
            <a href="add-category.php" class="btn-primary">Add Category</a>
            <br/><br/><br/>
                     <?php 
                        if(isset($_SESSION['add']))
                        {
                            echo $_SESSION['add'];
                            unset($_SESSION['add']);
                        }
                        if(isset($_SESSION['remove']))
                        {
                            echo $_SESSION['remove'];
                            unset($_SESSION['remove']);
                        }
                        if(isset($_SESSION['delete']))
                        {
                            echo $_SESSION['delete'];
                            unset($_SESSION['delete']);
                        }
                        if(isset($_SESSION['no-category-found']))
                        {
                            echo $_SESSION['no-category-found'];
                            unset($_SESSION['no-category-found']);
                        }
                        if(isset($_SESSION['update']))
                        {
                            echo $_SESSION['update'];
                            unset($_SESSION['update']);
                        }
                        if(isset($_SESSION['upload']))
                        {
                            echo $_SESSION['upload'];
                            unset($_SESSION['upload']);
                        }
                        if(isset($_SESSION['failed-remove']))
                        {
                            echo $_SESSION['failed-remove'];
                            unset($_SESSION['failed-remove']);
                        }
                    ?>
                <br><br>
                <table class="tbl-full">
                <tr>
                    <th>S.N.</th>
                    <th>Title</th>
                    <th>Image Name</th>
                    <th>Featured</th>
                    <th>Active</th>
                    <th>Action </th>
                </tr> 
              
                <?php 
                    //Query to get all admin
                    $sql= "SELECT*FROM tbl_category";                
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
                          
                            $title=$rows['TITLE'];
                            $image_name = $rows['IMAGE_NAME'];
                            $featured = $rows['FEATURED'] ;
                            $active = $rows['ACTIVE'];

                            //Display the value in our table

                            ?>
                             <tr>
                                <td><?php echo $id++ ; ?></td>   
                                <td><?php echo $title ;?></td> 
                                <td>
                                    <?php
                                        //check wheather imagename avaiable or not
                                       if($image_name != "")
                                        {
                                        ?>
                                        <img src="<?php echo SITEURL;?>/Images/Category/<?php echo $image_name?>" width=100px >

                                        <?php 
                                        } 
                                        else
                                        {
                                            // display the message
                                           echo "<div class=error> Image not added </div>";
                                        }

                                    ?>
                                </td>
                                <td><?php echo $featured ;?></td>
                                <td><?php echo $active ;?></td>
                            <td>
                                <a href="<?php echo SITEURL; ?>Admin/update-category.php?id=<?php echo$id;?>" class="btn-secondary">Update Category</a>
                                <a href="<?php echo SITEURL; ?>Admin/delete-category.php?id=<?php echo$id;?>&image_name=<?php echo $image_name;?>" class="btn-delete">Delete Category</a>
                              </td>
                            <tr>  
                            <?php
                        }
                    }
                 else 
                 {
                 ?>    
                    <tr>
                    <td class="error">No Category Added</td>
                    </tr>
                  <?php  
                 }
                }
                ?>
            </table>
            </div>   
        </div>
    <!...Main Contant Ends...!>

<?php include('partial/footer.php');?>