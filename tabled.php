<?php
require_once 'connect.php';
//Deletes empty records
$sql='DELETE from reports WHERE Location="" OR Area=""';
$retval = mysqli_query( $db,$sql);
if(! $retval )
{
die('Could not delete data: ' . mysql_error());
}
//delete info
if(isset($_POST['delete']))
{
    $loc=mysqli_real_escape_string($db , $_GET["delete"] );
    $sql="DELETE from reports WHERE Location LIKE '$loc%'";
$retval = mysqli_query( $db,$sql);
if(! $retval )
{
die('Could not delete data: ' . mysql_error());
}
    
}
//work on code above

/*Display all data in table
*All data filtered by Date
*Latest data will be shown first
*/
$query="SELECT * FROM `reports`ORDER by Report_Date DESC ";
$result=mysqli_query($db,$query);
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <!--Auto Refresh-->
        <meta http-equiv="refresh" content="10" >
        <title>iGen</title>
        <!-- Bootstrap core CSS -->
        <link href="css/min_ss.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/business-frontpage.css" rel="stylesheet">
        <script type="text/javascript">
            function Alert() {
                var aa = confirm("Do you want to continue");
                if (aa == true) {
                    alert("Alert Sent!! // send alert by location: feature coming soon");
                    return true;
                } else {
                    alert("Cancelled");
                    return false;
                }
            }

            function makeTableScroll() {
                // Constant retrieved from server-side via JSP
                var maxRows = 8;

                var table = document.getElementById('myTable');
                var wrapper = table.parentNode;
                var rowsInTable = table.rows.length;
                var height = 0;
                if (rowsInTable > maxRows) {
                    for (var i = 0; i < maxRows; i++) {
                        height += table.rows[i].clientHeight;
                    }
                    wrapper.style.height = height + "px";
                }
            }
        </script>
        <style>
            #myInput {
                background-position: 10px 10px;
                background-repeat: no-repeat;
                width: 22%;
                font-size: 15px;
                padding: 1px 20px 12px 40px;
                border: 1px solid #ddd;
                margin-bottom: 40px;
                margin-left: 250px;

            }

            table {
                border: black;
                border-collapse: collapse;
                margin: 2px;
                text-align: center;
                font-size: 15px;

            }

            th {
                column-width: 3.5cm;
                height: 1.28cm;
                background-color: #343a40;
                color: white;
                font-weight: 700;
                position: static;

            }

            h1 {}

            .scrollingTable {
                width: 100%;
                overflow-y: auto;
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

    <body onload="makeTableScroll();">
         <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="adminhome.php">Home</a>
            <a class="navbar-brand" href="about.html">Latest Feeds</a>
            <a class="navbar-brand" href="indexadmin.php">Logout</a>
        </div>
    </nav>
        <!-- Header with Background Image -->
        <header class="business-header" style="min-height: 140px;background-image:url(resources/images/report.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="display-3 text-center mt-4" style="font-weight: bold;font-size: 40px; color:sandybrown">Reports Generated</h1>
                        <hr style="width: 15cm">
                    </div>
                </div>
            </div>
        </header>
         <div class="container">
              <p>Reports are generated according to user incidence description input and are adequately presented in the table below: </p>
          <hr>
         </div>
        <!--Search feature-->
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by location.." align="center">
        <br>
        <div class="container">
            <div class="scrollingTable">
                <table align="center" border="0.5px" style="width:600pxr" id="myTable">
                    <tr>
                        <th style="border-top-left-radius: 10px">Location</th>
                        <th>Area / Road</th>
                        <th>Vehicle Type and Plate</th>
                        <th>iDescription</th>
                        <th>DatePosted</th>
                        <th style="  border-top-right-radius: 10px">Options</th>

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
                                <?php echo $rows['Area']; ?>
                            </td>
                            <td>
                                <?php echo $rows['Vehicle_color']; ?>
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
                            <td>
                                <input id="alert" type="submit" name="alert" value="Send Alert" class="btn btn-primary" onclick="Alert()" style="font-weight:bold">
                            </td>
                        </tr>
                        <?php
                           }
                           ?>
                </table>
            </div>
        </div>
        <!--Search table using location-->
        <script>
            function myFunction() {
                var input, filter, table, tr, td, i;
                input = document.getElementById("myInput");
                filter = input.value.toUpperCase();
                table = document.getElementById("myTable");
                tr = table.getElementsByTagName("tr");
                for (i = 0; i < tr.length; i++) {
                    td = tr[i].getElementsByTagName("td")[0];
                    if (td) {
                        if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                            tr[i].style.display = "";
                        } else {
                            tr[i].style.display = "none";
                        }
                    }
                }
            }
        </script>
    </body>

    </html>