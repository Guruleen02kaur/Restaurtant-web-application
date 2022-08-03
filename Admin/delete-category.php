<?php include('../config/constant.php');

// check wheather the id and image_name is set or not
if(isset($_GET['id']) AND isset($_GET['image_name']))
{
    $id = $_GET['id'];
    $image_name = $_GET['image_name'];

    //remove the physical image file is available 
    if($image_name != " ")
    {
        $path="../Images/Category/".$image_name;
        
        // Remove image
        $remove = unlink($path);

        //if failed to remove image the error message
        if($remove == FALSE)
        {
            // Set the Session message
            //Redirect to manage category page
            $_SESSION['remove']="<div class=error>Failed To Remove Category Image</div>";

            header('location:'.SITEURL.'Admin/manage-category.php');

            //stop the process
            die();
        }
    }
    else
    {
        header('location:'.SITEURL.'Admin/manage-category.php');
    }

    //Delete data from database
    $sql="DELETE FROM tbl_category WHERE ID=$id";

    //Execute the Query
    $res = mysqli_query($conn , $sql);

    //Check data is deleted or not 
    if($res == TRUE)
    {
        //Set Success message & redirect
        $_SESSION['delete']="<div class=success>Category Deleted</div>";

        //Redirect 
        header('location:'.SITEURL.'Admin/manage-category.php');
    }
    else {
        //Set failed message & redirect
        $_SESSION['delete']="<div class=error>Failed To Delete Category </div>";

        //Redirect 
        header('location:'.SITEURL.'Admin/manage-category.php');
    }
}
else 
{
    //Redirect to Manage category page
    header('location:'.SITEURL.'Admin/manage-category.php');
}
?>