<?php include('partial/menu.php'); ?>
<div class="main-content">
    <div class="wrapper">
        <h1>Update Category</h1>
        <br><br>

<form active ="" method="POST" enctype="multipart/form-data">
    <table class ="tbl-50">
        
        <tr>
            <td>Title: </td>
            <td>
                <input type="text" name="title" >
            </td>
        </tr>

        <tr>
            <td>Current Image:</td>
            <td>
            <?php 
            if($current_image != " ")
            {
                ?>
                <img src="<?php echo SITEURL;?>Images/Category/<?php echo $current_image; ?>" width=100px>
                <?php
            }
            else
            {
                echo "<div class='error'>Image Not Added</div>";
            }
            ?>
            </td>
        </tr>
        <tr>
            <td>New Image:</td>
            <td>
                <input type="file" name="image">
            </td>
        </tr>
        <tr>
            <td>Featured :</td>
                <td>
                <input <?php if($featured == "Yes"){echo "checked";}?> type="radio" name="featured" value="Yes">Yes
                <input <?php if($featured == "No"){echo "checked";}?> type="radio" name="featured" value="No">No
            </td>
        </tr>    
        <tr>
            <td>Active :</td>
                <td>
                <input <?php if($active == "Yes"){echo "checked";}?> type="radio" name="active" value="Yes">Yes
                <input <?php if($active == "No"){echo "checked";}?> type="radio" name="active" value="No">No
            </td>
        </tr>    
        <tr>
                <td>
                    <input type="hidden" name="current_image" value="<?php echo $current_image;?>">
                    <input type="hidden" name="id" value="<?php echo $id;?>">
                    <input type="submit" name="submit" value="Update Category" class="btn-secondary">
                </td>
        </tr>   
    </table> 
<?php 
   //Check Wheahter the id is set or not 
        if(isset($_GET['id']))
        {
            $id=$_GET['id'];

            //Create Sql Query to get all other values
            $sql2 = "SELECT*FROM tbl_category WHERE ID=$id";

            //Execute the Query
            $res2 = mysqli_query($conn,$sql2);

            //Count the rows to check wheahter the id is valid or not
            if($res2 == TRUE)
            {
                $row =mysqli_fetch_assoc($res2);
                $title= $row['TITLE'];
                $image_name= $row['IMAGE_NAME'];
                $featured= $row['FEATURED'];
                $active= $row['ACTIVE'];
            }
            else
            {
                //Redirect to manage category page
                $_SESSION['no-category-found']="<div class='error'>No Category Found</div>";
                header('location:'.SITEURL.'Admin/manage-category.php'); 
            }
        }
        else
        {
          //redirect to manage category page
         header('location:'.SITEURL.'Admin/manage-category.php');
            
        }
?>
</form>
    
<?php
    if(isset($_POST['submit']))
    {
        //1.Get all the values from form
        $id=$_POST['id'];
        $title=$_POST['title'];
        $current_image=$_POST['current_image'];
        $featured=$_POST['featured'];
        $active=$_POST['active'];

        //2.Update the image
            if(isset($_FILES['images']['name']))
            {
                $image_name=$_FILES['image']['name'];
                if($image_name != "")
                {
                    //autorename our image 
                    $ext= end(explode('.',$image_name));

                    //rename the image name
                    $image_name="Food-category-".rand(000, 999).'.'.$ext;
                    
                    //source path
                    $source_path=$_FILES['image']['tmp_name'];

                    $destination_path="../Images/Category/".$image_name;

                    //finally upload the image
                    $upload = move_uploaded_file($source_path,$destination_path);

                    //check wheather the image is upload or not 
                    //And if the image is not uploaded then we will stop the process and redirect the page
                    if($upload == FALSE)
                    {
                        //Set message
                        $_SESSION['upload']="<div class=error> Failed to upload image </div>";

                        //redirect to add-category page
                        header('location:'.SITEURL.'Admin/add-category.php');

                        //stop the process
                        die();
                    }
                }
                else
                {
                    $image_name=$current_image;
                }
               
                //3.Remove te current image 
                if($current_image != "")
                {
                    $remove_path="../Images/Category/".$current_image;
                    $remove = unlink($remove_path);

                    //Check wheather image is removed or not
                    if($remove==FALSE)
                    {
                        //Failed to remove
                        $_SESSION['failed-remove']="<div class='error'>Failed to Remove Image</div>";
                        header('location:'.SITEURL.'Admin/manage-category.php');
                        die();
                    }
                }
            }
            else
            {
                $image_name=$current_image;
            }

            //3.Update the database 
            $sql="UPDATE tbl_category SET 
              TITLE='$title',
              IMAGE_NAME='$image_name'
              FEATURED='$featured',
                ACTIVE='$active'
            WHERE ID=$id
            ";
            
            //Execute the Query
            $res=mysqli_query( $conn, $sql);

            //4. Redirect the page

            if($res == TRUE)
            {
                $_SESSION['update']="<div class='success'>Category Updated Successful</div>";
                header('location:'.SITEURL.'Admin/manage-category.php');
            }
            else
            {
                $_SESSION['update']="<div class='error'>Failed to Update Category</div>";
                header('location:'.SITEURL.'Admin/manage-category.php');
            }

    }
    ?>
    </div>
 </div>
<?php include('partial/footer.php'); ?>