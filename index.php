<?php
include 'server.php';
 ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>iReport - Login</title>
        <!--core CSS file-->
        <link href="css/min_ss.css" rel="stylesheet">
        <style type="text/css">
            body {
                background-color: whitesmoke;
                background-image: url(resources/images/programming_Fotor.jpg);
                height: 100%;
                /* Center and scale the image nicely */
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
            }

            div {
                opacity: 0.9;
            }
        </style>
        
    </head>

    <body class="bg-dark">
        <br>
        <div class="container" style="width:12cm; padding-top: 3cm">
            <div class="card card-login mx-auto mt-5">
                <div class="card-header">Login</div>
                <div class="card-body">
                    <form method="post" action="index.php" name="loginform">
                        <?php include('errors.php'); ?>
                        <div class="form-group">
                            <label for="inputEmail">Email address</label>
                            <input class="form-control" name='email' type="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword">Password</label>
                            <input class="form-control" type="password" name='password' placeholder="Password" required>
                        </div>
                        <input class="btn btn-primary btn-block" type="submit" value="Sign In" name="login_user" src="home.php">
                    </form>
                    <div class="text-center"><p class="small">Don't have an account <a href="register.php">Sign Up</a></p>                        

                    </div>
                    <div class="text-center"><p class="small">Administrator <a href="indexadmin.php">Login</a></p>
                        

                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>