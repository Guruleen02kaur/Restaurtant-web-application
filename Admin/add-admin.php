<?php include('partial/menu.php') ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1><br/>
        <?php 
            
            if(isset($_SESSION['add'])){
                echo$_session['add'];//displaying session message
                unset($_SESSION['add']);//removing session message
            }          
        ?>    
        <br/><br/>
    <form action="" method="POST">
    <table class="tbl-30">
        <tr>
            <td>Full Name:</td>
            <td>
                <input type="text" name="full_name" placeholder="Enter Your Name">
            </td>
        </tr>   
        <tr>
            <td>UserName:</td>
            <td>
                <input type="text" name="user_name" placeholder="Your username">
            </td>
        </tr> 
        <tr>
            <td>Password:</td>
            <td>
                <input type="password" name="password" placeholder="Password">
            </td>
        </tr>
        <tr>
            <td colspan="2">
                  <input type="submit" name="submit" value="Add admin" class="btn-secondary">
    
            </td>
        </tr>
    </table>
    </form>
</div>
</div><div class="clearfix"></div>
<?php include('partial/footer.php') ?>

<?php

// process the value from form and save it in database
//check wether the submit button is clicked or not

if(isset($_POST['submit']))
{
 // 1. Get the value from the form
$Fullname = $_POST['full_name'];
$Username = $_POST['user_name'];
$Password = md5($_POST['password']);// password encryption with md5
//2. SQL QUERY TO SAVE THE DATA INTO DB
$sql =" INSERT INTO tbl_admin SET 
        FULL_NAME ='$Fullname',
        USERNAME = '$Username',
        PASSWORD ='$Password'  ";

//3. EXECUTE QUERY AND SAVE DATA IN DATABASE

$res = mysqli_query($conn ,$sql) or die(mysqli_error());

//4. Check whether the (Query is executed) data is inserted or not and display appropriate message
if($res == TRUE)
{
    //DATA INSERTED
    //CREATE SESSION VARIABLE TO DISPLAY MESSAGE
    $_SESSION['add']="Admin Added Successfully";

    //Redirect page to manage-admin
    header("location:".SITEURL.'Admin/manage-admin.php');
}
else{
    //failed to insert data
     //CREATE SESSION VARIABLE TO DISPLAY MESSAGE
     $_SESSION['add']="Failed to Add Admin";

     //Redirect page to add-admin
     header("location:".SITEURL.'Admin/add-admin.php');
}
}
?>

