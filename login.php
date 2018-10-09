<?php include('server.php')?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

        <link rel="stylesheet" href="css/icon-font.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" type="image/png" href="img/favicon.png">

        <title>Natours | Exciting tours for adventurous people</title>

        <!--
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $(".message a").click(function(){
                    $("form").animate({height:"toggle", opacity: "toggle"},"slow");
                });
            });
        </script>
        --> 

    </head>

    <body>
        <header class="header__login">
            <div class="logo-box">
                <img src="img/logo-green-1x.png" alt="Logo" class="logo">      
            </div>

            <div class="form">

                <form class="login-form" method="post" action="login.php">

                    <div class="input-group">
                        <label>Username</label>
                        <input type="text" name="username" >
                    </div>

                    <div class="input-group">
                        <label>Password</label>
                        <input type="password" name="password">
                    </div>

                    <div class="input-group">
                        <button type="submit" class="btn" name="login_user">Login</button>
                    </div>
                      
                    <p class="message">
                        Not yet a member? <a href="register.php">Sign up</a>
                    </p>

                </form>

                </div>  
        </header>
    </body>
</html>