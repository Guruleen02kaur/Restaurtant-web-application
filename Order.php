
    <?php include('partial-front/menu.php'); ?>



    <!-- fOOD sEARCH Section Starts Here -->
    <section class="Order-Deco">
        <div class="container">  
            <h2 class="text-center text-white">Fill this form to confirm your order.</h2>

            <form action="#" class="order">
                <fieldset class="decro">
                    <legend >Selected Food</legend>

                    <div class="Food-Menu-img">
                    <img src="Images/mushroom.jfif" alt="Chicken Mushroom" class="img-responsive img-curve">
                    </div>
    
                    <div class="Food-Menu-desc">
                        <h3>Chicken Mushroom</h3>
                        <p class="food-price">$20.00</p>

                        <div class="order-label">Quantity</div>
                        <input type="number" name="qty" class="input-responsive" value="1" required>
                        
                    </div>

                </fieldset>
                
                <fieldset class="decro">
                    <legend>Delivery Details</legend>
                <div class="set">
                    <div class="order-label">Full Name</div>
                    <input type="text" name="full-name" placeholder="E.g. Oliver Willim" class="input-responsive" required>

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact" placeholder="E.g. 9843xxxxxx" class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="E.g. johnsonwillim@gmail.com" class="input-responsive" required>

                    <div class="order-label">Address</div>
                    <textarea name="address" rows="10" placeholder="E.g. Street, City, Country" class="input-responsive" required></textarea>

                    <a href="<?php echo SITEURL; ?>" class="btn-order"> Order Now</a>
                   
                </div>
                </fieldset>

            </form>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->


    <?php include('partial-front/footer.php'); ?>