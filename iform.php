<?php
require 'connect.php';
if(isset($_POST["submit"])){
$loc=mysqli_real_escape_string($db , $_POST["location"] );
$area=mysqli_real_escape_string($db , $_POST["area"] );
$vtype=mysqli_real_escape_string($db , $_POST["vtype"]);
$vcolor=mysqli_real_escape_string($db , $_POST["vcolor"]);
$plt=mysqli_real_escape_string($db , $_POST["plate"]);
$descr=mysqli_real_escape_string($db , $_POST["description"] );
$sql="INSERT INTO reports (Location,Vehicle_Type,Description,Plate_Number,Area,Vehicle_color) VALUES ('$loc','$vtype','$descr','$plt','$area','$vcolor')";
if(mysqli_query($db, $sql)){} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}
}
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Crime Description</title>
        <!-- Core CSS file-->
        <link href="css/min_ss.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="css/business-frontpage.css" rel="stylesheet">
        <style type="text/css">
            th {
                background-color: #343a40;
                color: white;
                font-weight: 700;
                padding: 5px;
                border-top-left-radius: 10px;
                border-top-right-radius: 10px;
            }

            .navbar-brand {
                font-size: 15px;
                font-weight: lighter;
                font-family: sans-serif;
                color: grey;
            }
             body{
            background-color:whitesmoke;
        }
        </style>
    </head>

    <body>
       
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="home.php">Home</a>
                <a class="navbar-brand" href="about.php">Latest Feeds</a>
                <a class="navbar-brand" href="charge.html">Charge Sheet</a>
                <a class="navbar-brand" href="index.php">Logout</a>
            </div>
        </nav>
        <!-- Header with Background Image -->
        <header class="business-header" style="min-height: 140px;background-image:url(resources/images/iform.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="display-3 text-center mt-4" style="font-weight: bold;font-size: 50px; color:sandybrown">Incident Description</h1>
                        <hr style="width: 15cm">
                    </div>
                </div>
            </div>
        </header>
         <div class="container">
              <p>The <strong>iDescription</strong> form allows users/witnesses to briefly describe the details of a particular incidence. The user can describe the incidence in terms of full vehicle description including plate number and color,state of the persons involved and incidence location, using the form below: </p>
          <hr>
         </div>
         
        <form method="POST" action="iform.php" align="center" style="width:auto; height:auto">
            <table align="center">
                <tr>
                    <th colspan="4">Fill form below:</th>
                </tr>

                <tr>
                    <td>Location <b style="color:red">*</b></td>
                    <td>
                        <select name="location" required>
                           <option selected>Choose location...</option>
                            <option>Nakuru</option>
                            <option>Nairobi</option>
                            <option>Kisumu</option>
                            <option>Eldoret</option>
                            <option>Naivasha</option>
                            <option>Mombasa</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Area (<i>specify location and road</i>)<b style="color:red">*</b></td>

                    <td><input type="text" name="area" placeholder="Umoja Kangundo Road" required></td>
                </tr>
                <tr>
                    <td>
                        Vehicle Type <i>(optional)</i>
                    </td>
                    <td>
                        <select name="vtype" required>
                           <option selected>Choose vehicle type...</option>
                            <option>Van</option>
                            <option>Matatu PSV</option>
                            <option>Pickup</option>
                            <option>Bus</option>
                            <option>Bus PSV</option>
                            <option>Lorry</option>
                            <option>Trailer</option>
                            <option>Motorcycle</option>
                            <option>Saloon Car </option>
                            <option>Family Car</option>
                            <option>other</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Vehicle Color</td>
                    <td><input type="text" name="vcolor" placeholder="white..." required></td>
                </tr>
                <tr>

                    <td>Plate Number <b style="color:red">*</b></td>
                    <td>
                        <input type="text" name="plate" placeholder="kaa 222l" required></td>
                </tr>
                <tr>
                    <td>Crime Description <b style="color:red">*</b></td>
                    <td><textarea name="description" placeholder="Hit and run, state of passenger critical, need emergency..." maxlength="150" required></textarea></td>
                </tr>
                <tr>
                    <td colspan="2"><input name="submit" type="submit" onclick="Conbit()" value="Submit" class="btn btn-primary" align="center"></td>
                </tr>
            </table>
        </form>
        
    </body>

    </html>