<?php include('partial/menu.php'); ?>
<div class="main-content">
    <div class="wrapper">
        <h1> Add Category </h1>
        <br>
       <?php 
        if(isset($_SESSION['add']))
        {
            echo $_SESSION['add'];
            unset($_SESSION['add']);
        }
        if(isset($_SESSION['upload']))
        {
            echo $_SESSION['upload'];
            unset($_SESSION['upload']);
        }
        
        ?>
<br><br>
        
    <!.. Add Category form start here ..!>
    <form active ="" method="POST" enctype="multipart/form-data">
    <table class ="tbl-50">
        <tr>
            <td>Title </td>
            <td>
                <input type="text" name="title" placeholder="Category title">
            </td> 
        </tr>
        <tr>
            <td>Select Image :</td>
            <td>
                <input type="file" name="image">
            </td>
        </tr>
        <tr>
            <td> Featured :</td><td>
                <input type="radio" name="featured" value ="Yes">Yes              
                <input type="radio" name="featured" value ="No">No 
            </td>
        </tr>
        <tr>
            <td> Active :</td><td> 
                <input type="radio" name="active" value="Yes">Yes
                <input type="radio" name="active" value ="No">No 
            </td>
        </tr>
        <tr>
            <td colspan ="2">
                <input type="submit" name="submit" value="Add category" class="btn-secondary">
            </td> 
        </tr>
    </table>
</form>
    <!.. Add category form ends here ..!>
<?php
// Check wheather the submit button is clicked or not
 
if (isset($_POST['submit']))
{
    // process for add
    //1. Get the data from add form
     $title = $_POST['title'];
    // for radio input, we need to check wheather the button is selected or not 
    
    if(isset($_POST['featured']))
    {
        //Get the value from form
        $featured = $_POST['featured'];
    }
    else
    {
        //Set the default value 
        $featured = "NO";
    }
    if(isset($_POST['active']))
    {
        //Get the value from form
        $active = $_POST['active'];
    }
    else
    {
        //Set the default value 
        $active = "NO";
    }
   //Check Wheahter the image is selected or not and set the value for image name accordingly.
   if(isset($_FILES['image']['name']))
   {
       //upload the image,  we need source and destination path
       $image_name=$_FILES['image']['name'];
      if($image_name != "") 
      { //autorename our image 
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
    }
       else 
       {
          $image_name="";
       }
   

    //2. Create SQL Query to insert category into database
    $sql="INSERT INTO tbl_category SET 
            TITLE ='$title',
            IMAGE_NAME = '$image_name',
            FEATURED ='$featured',
            ACTIVE ='$active'
    " ;

    //3. Execute the query & save in database
    $res=mysqli_query($conn,$sql);

    //4. Check wheather the query executed or not and data added or not

    if($res == TRUE)
    {
        // Query executed and added
        $_SESSION['add']="<div class=success>Category Added Successful</div> ";
        //Redirect to manage category page
        header('location:'.SITEURL.'Admin/manage-category.php');

    }
    else
    {
            // Query executed and added
            $_SESSION['add']="<div class=error> Failed to add </div> ";
            //Redirect to manage category page
            header('location:'.SITEURL.'Admin/add-category.php');
    }
}
?>
</div>
</div>

<?php include('partial/footer.php'); ?>

