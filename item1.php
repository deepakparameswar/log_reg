<?php include('book.php')?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <link rel="stylesheet" href="css/icon-font.css">
        <link rel="stylesheet" href="css/style3.css">
        <link rel="shortcut icon" type="image/png" href="img/favicon.png">
        
        <title>Natours | Exciting tours for adventurous people</title>
       
        <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	  	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	  	<script>
	  		$( function() {
	   			$( "#shootdate1" ).datepicker({
	   				minDate: 0
	   			});
	  		});
        </script>
        <script>
	  		$( function() {
	   			$( "#shootdate2" ).datepicker({
	   				minDate: <?php include('item_days.php')?>
	   			});
	  		});
	  	</script>
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
                <form method="post">
                    <label for="shootdate">From:</label>
    	            <input required type="text" name="shootdate1" id="shootdate1" title="Choose your desired date" />

                    <label for="shootdate">To: </label>
    	            <input required type="text" name="shootdate2" id="shootdate2" title="Choose your desired date" /> 
                    &nbsp&nbsp&nbsp<input class="btn" type="submit" value="Book Now" name="booked"> 
                </form>
            </div>

            <div class="package_details">
                <h2>Package Details</h2>
                <br>
                <p> Goa has been a key destination for Christian Pilgrimage tours in India.
                    Goa was a part of the Mauryan Empire, around 3rd century BC.
                    The Satvahanas of Kolhapur, and later the Chalukyas of Badami, took over the governance.
                    Other dynasties followed, including a short-lived Muslim invasion, until the Vijaynagar Empire established itself for almost a century.
                    This era, too, ended with the arrival of the Sultans of Gulbarga, from whom the rule passed on to the Adil Shah of Bijapur.
                    Soon, the Dutch, English, French and Portuguese, all began struggling for its possession. Ultimately, in 1510, the Portuguese conquered Goa, with Alfonso de Albuquerque leading the invasion.
                    Having ruled for around four centuries, in 1961, fourteen years after the country's independence, the Portuguese had to leave Goa.</p>
            </div>

            <div class="small_des">
                <h4>Package Location:</h4>
                <br>
                <h4>Features:</h4>
            </div>
        </header>
        
    </body>
</html>