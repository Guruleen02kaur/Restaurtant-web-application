<?php include('partial/menu.php')?>
    
    <!...Main Contant Starts...!>
        <div class="main-content">
            <div class="wrapper">
                <h1>DASHBOARD</h1>
                <br><br>
                   
       <?php 
        if(isset($_SESSION['login']))
        {
            echo $_SESSION['login'];
            unset($_SESSION['login']);
        }
       ?><br><br>
                <div class="col-4 text-center">
                    <h1>4</h1><br/>
                    Admin
                </div>
                <div class="col-4 text-center">
                    <h1>5</h1><br/>
                    Food
                </div>
                <div class="col-4 text-center">
                    <h1>3</h1><br/>
                    Categories
                </div>
                <div class="col-4 text-center">
                    <h1>1</h1><br/>
                    Orders
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    <!...Main Contant Ends...!>

<?php include('partial/footer.php') ?>


