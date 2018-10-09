<?php include('server.php')?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <link rel="stylesheet" href="css/icon-font.css">
        <link rel="stylesheet" href="css/style2.css">
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
        <div class="wrapper">
            <nav>
                <div class="logo">
                    <img src="img/logo-green-small-1x.png" alt="Logo">   
                </div>
                <ul>
                    <li><a href="z.php">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Tour Packages</a></li>
                    <li><a href="#">Enquiry</a></li>
                    <li><a class="active" href="logout.php">Log Out</a></li>
                </ul>
            </nav>
            <section class="sec1"></section>
            <section class="content">
                <br><br>
                <h1>NATOURS TOURS<h1><br>
                <p>
                Natours is one of India's leading online travel portals, offering holiday packages in India and abroad. Natours offers value for money packages, luxury packages, group departures as well as customized packages.

                Natours was one of the first aggregators of holiday packages and since 2015 it has provided a forum for agents and holiday package sellers to sell their packages directly on the Natours website. This has enabled Natours to give a wide range of holiday packages including niche and exotic packages to its customers, while providing localised services.

                Natours holiday packages generally include all transfers, comfortable to luxurious stay options, and guided sightseeing options. However all facets of a package can usually be customized to the needs of a customer. Natours has a plethora of options for you to choose from, in terms of the itinerary - places you would like to cover, as well as number of days.

                Natours's wide reach of agents in India and abroad enables it to offer the best to customers, all at an affordable price. It is no wonder it has already been honored thrice with the National Tourism Awards by the Ministry of Tourism, Government of India in 2010, 2013 and 2014. In 2013 it was awarded for Outstanding performance as a Domestic Tour Operator(Rest of India), Outstanding performance as a Domestic Tour Operator in Jammu and Kashmir, and Outstanding performance as an Inbound Tour Operator-Cat C. In 2014 it was awarded as Best Domestic Tour Operator (Rest of India) category.

                Natours covers all domestic destinations from the popular to the niche, and gives multiple package options to choose from. Internationally it covers all popular destinations and offers budget group tours too to these places. Some of its most popular international destinations are Paris, London, Switzerland, South Africa, Australia, Dubai, Thailand, USA, Canada, Singapore, Maldives and Mauritius.    
                </p>
                <br><br>
            </section>
            <section class="tour_packages">

            </section>
            
        </div>
    </body>
</html>