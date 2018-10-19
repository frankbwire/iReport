<?
require 'server.php';
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>iNews</title>

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
            background-color:whitesmoke;
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="home.php">Home</a>
            <a class="navbar-brand" href="iform.php">iDescription</a>
            <a class="navbar-brand" href="charge.html">Charge Sheet</a>
            <a class="navbar-brand" href="index.php">Logout</a>
        </div>
    </nav>
    <!-- Header with Background Image -->
    <header class="business-header" style="min-height: 140px;background-image:url(resources/images/news.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <table align="center">
                        <tr>
                            <td>
                                <h1 class="display-3 text-center mt-4" style="font-weight:600; color:sandybrown;font-style: italic;font-size:60px">iReport News Feed</h1>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </header>
    <br>

    <!-- Page Content -->
    <div class="container">
        <div style="width: auto" class="row">
            <div class="col-sm-8">
                <h3 style="background-color: #343a40; color: white; text-align: center;border-top-left-radius: 10px;border-top-right-radius: 10px">Top Stories</h3>
                <hr width="100%">
                <h5><a href="">iReport: Launch</a></h5>
                <p style="font-weight: 400; font-size: 15px">Kenyas are looking forward to the launch of the new iReport web application which is set to help authorities minimize the amount of road fatalities that occur on Kenya roads.</p>
                <hr width="100%">

                <h5><a href="">iReport: Analyzing Incidence Data to Determine Hotspot</a></h5>
                <p style="font-weight: 400; font-size: 15px"> The introduction of the new iReport web application has made it easier for authorities to map accident prone areas in Kenya. This enables police authorities come up with thorough ways of dealing with these incidences...</p>
                <hr width="100%">

                <h5><a href="">Positive Feedback after the iReport launch</a></h5>
                <p style="font-weight: 400; font-size: 15px">"iReport application users are embrasing the application" says CS Matiang'i. "The application has enabled road users be more aware of the penalties that come with the traffic offences, hence promoting a good conduct among drivers on the Kenyan roads". </p>
                <hr width="100%">

                <h5><a href="">TNairobi Public Service vehicles increase fares by 30-50 per cent in wake of increased fuel prices</a></h5>
                <p style="font-weight: 400; font-size: 15px">The ripple effect of the heavy levy imposed on fuel has already started to be felt- On Monday, September 3, bus fares was hiked to an all time high - Commuters had to part ways with upto double what they paid only 48 hours earlier- This happened even as the... </p>
                <hr width="100%">

                <h5><a href="">User anonymity is assured</a></h5>
                <p style="font-weight: 400; font-size: 15px">iReport developer, Frankline Bwire, says that the anonimity of the user's personal information (name,address) of witnesses reporting these said crimes/cases, will be assured and hopes more users will be confident enough to report cases using the application.</p>
                <hr width="100%">

                <h5><a href="https://www.standardmedia.co.ke/article/2001295468/instant-traffic-fines-on-motorists-to-start-in-november">Standardmedia: Instant traffic fines on motorists to start in November</a></h5>
                <p style="font-weight: 400; font-size: 15px">Mr Matiang'i said almost 7,000 people were detained because of traffic offences, some which attracted penalties as low as Sh600. “Imagine these people were fined Sh1,000, could not afford it and ended up in jails where they are consuming up to Sh20,000 a month. Some of these issues can be addressed through these instant fines,” he said.</p>
                <hr width="100%">
                <h5><a href="https://www.nation.co.ke/video/news/4146788-4678342-e8y7dcz/index.html">Nation: Kenya's notorious traffic officer caught on camera receiving a bribe</a></h5>
                <p style="font-weight: 400; font-size: 15px">CAUGHT ON CAMERA: Kenya's notorious traffic officer receiving a bribe live on tape. These are the new ways corrupt traffic police officers are using to receive bribes from traffic offenders along Nairobi's busy roads.</p>
                <hr width="100%">
                <!--Research on Pagination-->
                <span>
            Go to page>>
            <a href=""><b>1</b> |</a>
            <a href="">2 |</a>
            <a href="">3 |</a>
            <a href="">4 |</a>
            <a href="">5 </a>
            </span>
            </div>
            <!--Contacts-->
            <div class="col-sm-4">
                <h2 class="mt-4">Contact Us</h2>
                <address>
            <strong>iReport</strong>
            <br>001 Nairobi
            <br>Kenya
            <br>
          </address>
                <address>
            <abbr>Phone:</abbr>
            (123) 456-7890
            <br>
            <abbr>Email:</abbr>
            <a href="mailto:#">iReport@gmail.com</a>
          </address>
                <hr>
                <div>
                    <p>View a list of telephone hotlines available for the convenience of the user in case of an emergency situation.</p><a href="emergency.html" class="btn btn-primary">Emergency Contacts</a></div>
            </div>
            <!-- Comments Form -->
            <div class="card my-4" style="height:auto; width:15cm">
                <h5 class="card-header">Leave a Comment:</h5>
                <div class="card-body">
                    <form method="post" action="about.php">
                        <div class="form-group">
                           <p>Username:</p> <input class="form-control"type="text" name="username">
                           <br>
                            Comment:<textarea name="comment" class="form-control" rows="2" maxlength="200"></textarea>
                            <P align="right" style="font-size:10px">Max 200 Characters</P>
                        </div>
                        <button name="comment_btn" type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center" style="color:white; font-weight:bold">Copyright &copy; <img src="resources/images/iReport_bwire.png" alt="irepor logo" style="width: 3cm; height: 1cm">2018</p>
        </div>
        <!-- /.container -->
    </footer>
</body>

</html>