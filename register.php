<?php
include 'server.php';
require 'connect.php';
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>iReport - Registration</title>
        <!-- Core CSS file-->
        <link href="css/min_ss.css" rel="stylesheet">
        <!-- Fonts file-->
        <link href="css/fonts.css" rel="stylesheet" type="text/css">
        <style type="text/css">
            body {
                background-color: whitesmoke;
                background-image: url(resources/images/programming_Fotor.jpg);
                /* Full height */
                height: 100%;
                /* Center and scale the image nicely */
                background-size: cover;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-repeat: no-repeat;
                background-position: center;

            }

            div {
                opacity: 0.9;
            }
        </style>
    </head>

    <body class="bg-dark">
        <br>
        <div class="container" style="width:17cm; padding-top: 3cm">
            <div class="card card-register mx-auto mt-5">
                <div class="card-header">Register an Account</div>
                <div class="card-body">
                    <form method="post" action="register.php">
                        <?php include('errors.php'); ?>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label for="fname">First name</label>
                                    <input class="form-control" name="fname" type="text" placeholder="Enter first name" value="<?php echo $fname; ?>">
                                </div>
                                <div class="col-md-6">
                                    <label for="lname">Last name</label>
                                    <input class="form-control" name="lname" type="text" placeholder="Enter last name" value="<?php echo $lname; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input class="form-control" type="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" value="<?php echo $email; ?>" required>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <label for="pass1">Password</label>
                                    <input class="form-control" type="password" placeholder="Password" name="pass1" maxlength="8">
                                </div>
                                <!--Research:Confirm Match of password 1 and 2-->
                                <div class="col-md-6">
                                    <label for="pass2">Confirm password</label>
                                    <input class="form-control" type="password" placeholder="Confirm password" name="pass2" maxlength="8">
                                </div>
                            </div>
                        </div>
                        <!--Research: Send Confirmation Email-->
                        <input class="btn btn-primary btn-block" type="submit" value="Sign Up" name="reg_user" src="index.php">
                        <!--My Code-->
                    </form>
                    <div class="text-center"><p class="small">Already a user <a href="index.php">Sign In</a></p>
                    </div>
                </div>
            </div>
        </div>
    </body>

    </html>