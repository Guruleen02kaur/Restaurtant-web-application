<?php include('partial-front/menu.php'); ?>

    <!.. Food Search Section Starts Here...>
    <section class="food-search input">
        <div class="container">
            <form action="">
                <center>

                    <input type="search" name="search" placeholder="Search for food...">
                    <input type="submit" name="submit" value="Search" class="btn btn-primary">

                </center>
            </form>
        </div>
    </section>
    <!.. Food Search Section Ends Here...>

    <!.. Explore Food Section Starts Here...>
    <section class="ExploreFood">
        <div class="container text-white">
            <center>   <h2 font-size="1.3rem"> Explore Food </h2> </center>

            <a href="H" class=" White">
                <div class="Box3 float-container text-white text-center">
                    <img src="Images/1.png" alt="Crafted by our master chefs" class="img-responsive img-curve">
                    <h3 font-size="1.3rem" class="float-text"> Crafted by our master chefs </h3>
                </div>
            </a>

            <a href="H" class=" White">
                <div class="Box3 float-container text-white text-center">
                    <img src="Images/2.png" alt="" class="img-responsive img-curve">

                    <h3 font-size="1.3rem" class="float-text"> Using The Finest Ingrediets</h3>
                </div>
            </a>

            <a href="H" class=" White">
                <div class="Box3 float-container text-white text-center">
                    <img src="Images/3.png" alt="Pasta" class="img-responsive img-curve">
                    <h3 font-size="1.3rem" class="float-text"> Served With Care And Passion</h3>
                </div>
            </a>
            <div class="clearfix"></div>
        </div>
    </section>
    <!.. Explore Food Section Ends Here...>

    <!.. Food Menu Section Starts Here...>
    <section class="FoodMenu ">
        <div class="container  ">
            <h2 class="text-center">Food Menu</h2>
            <div class="Food-Menu">
                <div class="Food-Menu-img">
                    <img src="Images/mushroom.jfif" alt="Chicken Mushroom" class="img-responsive img-curve">
                </div>
                <div class="Food-Menu-desc">
                    <h4> Chicken Mushroom </h4>
                    <p>$20.00</p>
                    <p>
                        Made with Mushroom, Chicken and.
                    </p><br>
                    <a href="<?php echo SITEURL; ?>Order.php" class="btn btn-primary"> Order Now</a>
                </div><div class="clearfix"></div>
            </div>
            <div class="Food-Menu">
                <div class="Food-Menu-img">
                    <img src="Images/chicken.jfif" alt="Mouth Watering Chicken" class="img-responsive img-curve">
                </div>
                <div class="Food-Menu-desc">
                    <h4> Food Title </h4>
                    <p>$2.3</p>
                    <p>
                        Made with Italian sauce, Chicken and Organice Vegetables.
                    </p><br>
                    <a href="#" class="btn btn-primary"> Order Now</a>
                </div><div class="clearfix"></div>
            </div>
            <div class="Food-Menu">
                <div class="Food-Menu-img">
                    <img src="Images/sushi.jfif" alt="Sushi" class="img-responsive img-curve">
                </div>
                <div class="Food-Menu-desc">
                    <h4> Food Title </h4>
                    <p>$2.3</p>
                    <p>
                        Made with Italian sauce, Chicken and Organice Vegetables.
                    </p><br>
                    <a href="#" class="btn btn-primary"> Order Now</a>
                </div><div class="clearfix"></div>
            </div>
            <div class="Food-Menu">
                <div class="Food-Menu-img">
                    <img src="Images/pudding.jfif" alt="Tasty Pudding" class="img-responsive img-curve">
                </div>
                <div class="Food-Menu-desc">
                    <h4> Food Title </h4>
                    <p>$2.3</p>
                    <p>
                        Made with Italian sauce, Chicken and Organice Vegetables.
                    </p><br>
                    <a href="#" class="btn btn-primary"> Order Now</a>
                </div><div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </section>
    <!.. Food Menu  Section Ends Here...>

    <?php include('partial-front/footer.php'); ?>