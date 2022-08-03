<?php include('../config/constant.php'); ?>
<html>
    <head>
         <title> Login-FoodOrder System</title>
         <link rel="stylesheet" href="../css/login.css">
         
    </head>    
<body>
    <div class="center">
        <h1>Login</h1>
       
       <?php 
        if(isset($_SESSION['login']))
        {
            echo $_SESSION['login'];
            unset($_SESSION['login']);
        }
        
        if(isset($_SESSION['not-login-message']))
        {
            echo $_SESSION['not-login-message'];
            unset($_SESSION['not-login-message']);
        }
        ?>

        <!__login form start here__!>
        <form actoin="" method="POST">
            <div class="txt_field">
                <input type="text" name="username">
                <span></span>
                <label>Username</label>
            </div>
            <div class="txt_field">    
                <input type="password" name="password">
                <span></span>
                <label>Password</label>
            </div>
            <input type="submit" name="submit" value="Login">
                <div class="signup_link"> Not a member? <a href ="add-admin.php"> Sign Up </a> 
                </div>

</form>
</div>
</body>
</html>

<?php
 //check whether the submit buttom is clicked or not 
 if (isset($_POST['submit']))
 {
     // process for login
     //1. Get the data from login form
     echo $username = $_POST['username'];
     echo $password = md5($_POST['password']);

     //2. Check the given infor. with database 
     $sql ="SELECT * FROM tbl_admin WHERE USERNAME ='$username' AND Password ='$password'";

     //3. Execute the Query
     $res= mysqli_query($conn,$sql);

     //4. Count rows to check whether the user exists or not
     $count = mysqli_num_rows($res);
    
     if($count==1)
     {
         
         //User Available and Login Success 
         $_SESSION['login']="<div class = success> Login Successful.</div>";
        
         $_SESSION['user']= $username;// To check wheather the user is loged in or not
         //Redirect To Dashboard
         header('location:'.SITEURL.'Admin/index.php');
     }
    else
    { 
         //User Available and Login Success 
        $_SESSION['login']="<div class= error> Username or Password is Invalid </div>";
        $_SESSION['user']= $username;// To check wheather the user is loged in or not
        //Redirect To Dashboard
        header('location:'.SITEURL.'Admin/login.php');

    }

 }
 ?>