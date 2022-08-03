<?php include('../config/constant.php');
  //1.Destory the session
  session_destroy();//unset the user

  //2. Redirect the page
  header('location:'.SITEURL.'Admin/login.php');

?>