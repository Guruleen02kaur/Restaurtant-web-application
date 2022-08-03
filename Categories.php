
    <?php include('partial-front/menu.php'); ?>

    <!.. Explore Food Section Starts Here...>
    <section class="ExploreFood">
        <div class="container text-white">
            <center>   <h2 font-size="1.3rem"> Explore Food </h2> </center>
           <?php
                //Query to get all admin
                $sql= "SELECT*FROM tbl_category WHERE ACTIVE='Yes' AND FEATURED='Yes'";                
                
                // execute the query
                $res = mysqli_query($conn, $sql);
                
                // COUNT rOWS TO CHECK WHETHER WE HAVE DATA IN DATABASE OR NOT 
                $count= mysqli_num_rows($res);// function to get all rows in DB.
                
                //Check the num of rows 
                    if($count>0)
                    {
                        // we have data in DB
                        while($rows=mysqli_fetch_assoc($res))
                        {
                           
                            $title=$rows['TITLE'];
                            $image_name = $rows['IMAGE_NAME'];
                            $featured = $rows['FEATURED'] ;
                            $active = $rows['ACTIVE'];

                            ?>
                           
                            <a href="#" class=" White">
                            <div class="Box3 float-container text-white text-center">
                            <?php
                                if($image_name == "")
                                {
                                    echo "<div class'error'>Image Not Avaiable</div>";
                                }
                                else
                                {
                                    ?>
                                     <img src="<?php echo SITEURL;?>Images/Category/<?php echo $image_name;?>" alt="Burger" class="img-responsive img-curve">
                                    <?php
                                }

                            ?>
                               
                                <h3 font-size="1.7rem" class="Arrange-text"><?php echo $title; ?> </h3>
                            </div>
                            </a>
                        <?php
                     }
                    }
                    else
                    {
                        header('location:'.SITEURL.'index.php');
                    }
                    ?>

            <div class="clearfix"></div>
        </div>
    </section>
    <!.. Explore Food Section Ends Here...>


    <?php include('partial-front/footer.php'); ?>