<?php  
  //Authentication-Access Control
  //Check wheather the user is logged in or not 
  if(!isset($_SESSION['user']))
  {
    //User is not logged in
    //Redirect to login page with message
    $_SESSION['not-login-message']="<div class='error'>Please Login to access Admin Panel.</div>";

    //Redirect to login page
    header('location:'.SITEURL.'Admin/login.php');
  }

  ?>