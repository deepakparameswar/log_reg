<?php include('server.php')?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <link rel="stylesheet" href="css/icon-font.css">
        <link rel="stylesheet" href="css/style3.css">
        <link rel="shortcut icon" type="image/png" href="img/favicon.png">
        
        <title>Natours | Exciting tours for adventurous people</title>
       
        <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
        <script type="text/javascript">
            $(window).on('scroll',function(){
               if($(window).scrollTop()){
                   $('nav').addClass('black');
               } 
               else{
                   $('nav').removeClass('black');
               }
            })
        </script>
    
    </head> 
    <body>
        <header class="wrapper">
        
            <nav class="clearfix">
                <div class="logo">
                    <img src="img/logo-green-small-1x.png" alt="Logo">   
                </div>
                <ul>
                    <li><a href="z.php">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Tour Packages</a></li>
                    <li><a href="#">Enquiry</a></li>
                    <?php
                        if(isset($_SESSION['username']))
                        {   
                    ?>
                    <li><a class="active" href="logout.php">Log Out</a></li>
                    <?php
                        }
                        else {
                    ?>

                    <li><a class="active" href="login.php">Log In</a></li>
                    <?php
                        }
                    ?>
                </ul>
            </nav>

            <div class="itempics">
                <img src="img/nat-9.jpg" alt="Tour 1" class="tour__img">
            </div>
            <div class="item_heading">
                <h2>Goa</h2>
            </div>
            <div class="item_booking_form">
                <form method="post" action="#">
                    From &nbsp&nbsp&nbsp<input type="date" name="from">
                    &nbsp&nbsp&nbsp&nbsp&nbspTo &nbsp&nbsp&nbsp<input type="date" name="to">
                    <input class="btn" type="submit" value="Book Now">
                </form>
            </div>
        </header>
    </body>
</html>