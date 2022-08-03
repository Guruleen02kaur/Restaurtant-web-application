<?php include('config/constant.php'); ?>
<!DOCTPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Restaurant Website
    </title>

    <!.. Link to css file ...>
    <link rel=" stylesheet" href="css/style.css"   >

</head>
<body>

    <!.. Navbar Section Starts Here...>
    <section class="navbar">
        <div class="container">
            <div class="logo">
            <a href="<?php echo SITEURL; ?>"> <img src="Images/Foodfield.jpg" class="img-responsive">
              </a>
            </div>
            <div class="Menu text-right">
                <ul>
                    <li>
                        <a href="<?php echo SITEURL; ?>">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>Categories.php">Categories</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>Foodmenu.php">Food</a>
                    </li>
                    <li>
                        <a href="#">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="clearfix">

            </div>
        </div>
    </section>
    <!.. Navbar Section Ends Here...>