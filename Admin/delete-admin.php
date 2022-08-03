
<?php
    include('../config/constant.php');

//1. Get the ID of Admin to be deleted
$id = $_GET['ID'];

//2. Create SQL Query to delete Admin 
$sql = "DELETE FROM tbl_admin WHERE ID=$id";

//3. Execute the query
$res = mysqli_query($conn, $sql);
    //Check data is deleted or not 
    if($res == TRUE)
    {
        //Set Success message & redirect
        $_SESSION['delete']="<div class=success>Admin Deleted</div>";

        //Redirect 
        header('location:'.SITEURL.'Admin/manage-admin.php');
    }
    else {
        //Set failed message & redirect
        $_SESSION['delete']="<div class=error>Failed To Delete Admin</div>";

        //Redirect 
        header('location:'.SITEURL.'Admin/manage-admin.php');
    }


?>