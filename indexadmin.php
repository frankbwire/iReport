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
    <title>iReport - LoginAdmin</title>
    <!--core CSS file-->
    <link href="css/min.css" rel="stylesheet">
    <!--fonts file-->
    <link href="css/fonts.css" rel="stylesheet" type="text/css">
    <!-- styles file-->
    <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
           <br>
            <div class="container">
                <div class="card card-login mx-auto mt-5">
                    <div class="card-header">Adminstrator Login</div>
                    <div class="card-body">
                        <form method="post" action="indexadmin.php">
                          <?php include('errors.php'); ?>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input class="form-control" id="exampleInputEmail1" name='email2' type="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input class="form-control" id="exampleInputPassword1" type="password" name='password2' placeholder="Password" required>
                            </div>
                            <input class="btn btn-primary btn-block" type="submit" value="Login" name="login_admin" src="adminhome.php">
                        </form>
                        <div class="text-center">
                            <a class="d-block small mt-3" href="index.php">User Login</a>
                        </div>
                    </div>
                </div>
            </div>
</body>

</html>
