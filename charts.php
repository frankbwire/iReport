<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>iHome</title>

    <!-- Bootstrap core CSS -->
    <link href="css/min_ss.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/business-frontpage.css" rel="stylesheet">

    <style type="text/css">
        .navbar-brand {
            font-size: 15px;
            font-weight: lighter;
            font-family: sans-serif;
            color: grey;
        }

        body {
            background-color: whitesmoke;
        }
        .p{
            opacity: 0.3;
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="home.php">Home</a>
            <a class="navbar-brand" href="index.php">Logout</a>
        </div>
    </nav>
    <!-- Header with Background Image -->
    <header class="business-header" style="min-height: 140px;background-image:url(resources/images/frequency.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="display-3 text-center mt-4" style="font-weight:bold;font-size: 40px;color: sandybrown;font-style: italic;font-family:times new roman;padding-bottom:1">iReport Incident Statistics</h1>
                    <br>
                </div>
            </div>
        </div>
    </header>
    <br>
    <div class="container">
        <p style="font-weight: 500">In order to better deal with the challenges facing the Kenyan Transport Industry, we need to understand and analyze these incidences and their frequency.</p>
        <hr>
    </div>

    <div class="container" id="piechart" align="center">
<p class="p">This page requires online connectivity.</p>
    </div>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
        // Load google charts
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        // Draw the chart and set the chart values
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Location', 'Frequency'],
                ['Nakuru', 10],
                ['Nairobi', 24],
                ['Mombasa', 14],
                ['Eldoret', 8],
                ['Kisumu', 12],
                ['Naivasha', 6]
            ]);

            // Optional; add a title and set the width and height of the chart

            var options = {
                pieHole: 0.3,
                'title': 'Incident Frequency by Location',
                'width': 700,
                'height': 700
            };

            // Display the chart inside the <div> element with id="piechart"
            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data, options);
        }
    </script>
    
     
</body>

</html>