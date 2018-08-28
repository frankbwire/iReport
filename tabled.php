<?php
require_once 'connect.php';
$sql='DELETE from reports WHERE Location="" ';
$retval = mysqli_query( $db,$sql);
if(! $retval )
{
die('Could not delete data: ' . mysql_error());
}
$query="SELECT * from reports";
$result=mysqli_query($db,$query);
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Reports Generated</title>
         <!-- Bootstrap core CSS -->
    <link href="css/min_ss.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/business-frontpage.css" rel="stylesheet">

    </head>

    <body>
      <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
 <div class="container">
   <a class="navbar-brand" href="adminhome.php">iReport</a>
   <div class="collapse navbar-collapse" id="navbarResponsive">
     <ul class="navbar-nav ml-auto">
       <li class="nav-item active">
         <a class="nav-link" href="adminhome.php">Home
           <span class="sr-only">(current)</span>
         </a>
       </li>
        <li class="nav-item">
            <a class="nav-link" href="indexadmin.php">Logout</a>
            </li>
     </ul>
   </div>
 </div>
</nav>
        <table align="center" border="0.5px" style="width:600px">
           <tr>
               <th colspan="4" style="font-weight=bold">CASE REPORTS</th>
           </tr>
                <tr>
                    <th>Location</th>
                    <th>Vehicle Model and Plate</th>
                    <th>iDescription</th>
                    <th>DatePosted</th>

                </tr>
            <?php
                            while ($rows=mysqli_fetch_assoc($result))
                            {
                             ?>
                <tr>
                    <td>
                        <?php echo $rows['Location']; ?>
                    </td>
                    <td>
                        <?php echo $rows['Vehicle_Type']; ?>
                        <br>
                        <?php echo $rows['Plate_Number']; ?>
                    </td>
                    <td>
                        <?php echo $rows['Description']; ?>
                    </td>
                    <td>
                        <?php echo $rows['Report_Date']; ?>
                    </td>
                </tr>
                <?php
                           }
                           ?>

        </table>
    </body>

    </html>
