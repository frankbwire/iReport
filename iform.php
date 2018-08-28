<?php
require 'connect.php';
$loc=mysqli_real_escape_string($db , $_POST["location"] );
$vtyp=mysqli_real_escape_string($db , $_POST["vtype"]);
$plt=mysqli_real_escape_string($db , $_POST["plate"]);
$descr=mysqli_real_escape_string($db , $_POST["description"] );
$sql="INSERT INTO reports (Location,Vehicle_Type,Description,Plate_Number) VALUES ('$loc','$vtyp','$descr','$plt')";
if(mysqli_query($db, $sql)){
    echo "Records added.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Crime Description</title>
     <!-- Core CSS file-->
    <link href="css/min.css" rel="stylesheet">
</head>
<body>
  <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
<div class="container">
<a class="navbar-brand" href="index.php">iReport</a>
<div class="collapse navbar-collapse" id="navbarResponsive">
 <ul class="navbar-nav ml-auto">
   <li class="nav-item active">
     <a class="nav-link" href="home.php">Home
       <span class="sr-only">(current)</span>
     </a>
   </li>
   <li class="nav-item">
     <a class="nav-link" href="iform.php">iReport</a>
   </li>
   <li class="nav-item">
     <a class="nav-link" href="about.html">Contact</a>
   </li>
     <li class="nav-item">
   <a class="nav-link" href="index.php">Logout</a>
   </li>
 </ul>
</div>
</div>
</nav>
   <p style="text-align: center; font-weight: bold">Crime Description Form</p>
    <form method="POST" action="iform.php" align="center">
    <table align="center">
     <thead colspan="2"><b>Fill form below:</b></thead>
       <tr><td>Location </td>
       <td><input type="text" placeholder="current area" name="location" required></td></tr>
       <tr>
           <td>
        Vehicle Model
           </td>
           <td>
         <input type="text" placeholder="Isuzu" name="vtype" required>
           </td>
       </tr>
       <tr>
           <td>Plate Number</td>
           <td>
           <input type="text" name="plate" placeholder="kaa 222l"></td>
       </tr>
       <tr>
           <td>Description</td>
           <td><textarea name="description" placeholder="Enter description here.." required></textarea></td>
       </tr>
        <tr>
            <td colspan="2"><input type="submit" onclick="Conbit()" value="Submit" align="center"></td>
        </tr>
</table>
    </form>
</body>

</html>
