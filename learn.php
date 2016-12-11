<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>IXmaps</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Styles -->
    <link href="css/styles.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i,800,800i&amp;subset=latin-ext" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="favicon.png">
  </head>

<body>

<?php include 'global-header.php'; ?>

<header class="container">
<div class="row">
<div class="col-10 col-left-1 col-md-10 col-md-left-1 col-sm-10 col-sm-left-1">
    <h2>Learn</h2>
</div>
</div>
</header>

<section class="container">
    <div class="row">
        <div class="col-10 col-left-1">
            <h4>Where Your Data Travels</h4>
        </div>
    </div>
</section>

<body>
<section class="container">
    <div class="row">
        <div class="col-10 col-left-1">

            <p>Your data travels across the internet in a series of "<a href="#">hops</a>," starting from your device and then passed from one <a href="#">router</a> to the next until it reaches its destination. This sequence of routers and hops is called a traceroute. We map these traceroutes as lines (hops) joining successive dots (routers), based on the best available information we have about the physical location of these routers.</p>

            When you first go to the Map page, you will see the most recently contributed traceroute from near your location, and, whenre we have data available, from the same internet service provider (ISP) you are currently using.</p>
            <p>To see other routes from your ISP, City or Country, select one or more of these from the From filter menu, correcting the entry if needed, and then click Submit. You can refine your selection using the From, Via and To filters.</p>
        </div>
    </div>
</section>

<section class="container">
    <div class="row">
        <div class="col-10 col-left-1">
            <h4>NSA Surveillance</h4>
            <p>The revelations of Edward Snowden show that the signals intelligence agencies of the Five Eyes countries (U.S., U.K., Canada, Australia and New Zealand) are intercepting, analysing and storing internet communications around the world. In particular, the U.S. National Security Agency (NSA) is known to intercept communications at major internet switching centres within the U.S. itself.</p>
            <p>The Map page shows 18 U.S. cities where suspected NSA surveillance sites are located. These are indicated as . To see routes in our database that pass through at least one of the cities, click the +Via filter, then select Spy Agency: NSA. To narrow the search, add other filters, such as From you, your country or your ISP, To your favorite site, etc., before clicking Submit.</p>
        </div>
    </div>
</section>

<section class="container">
    <div class="row">
        <div class="col-10 col-left-1">
            <h4>Boomerang Routing and Canadian Network Sovereignty</h4>
            <p>A surprising amount of domestic communications between Canadians and internet sites within Canada travels via the U.S. We call this type of internet traffic "boomerang routing." Over 25% of the intra-Canadian routes in the IXmaps database follow a boomerang path, subjecting themit to NSA surveillance. This can happen with internet traffic of other countries too. The fact that such These communications loses legal and constitutional protections when itthey leaves their home country. and aAt the same time, is they are exposed to foreign surveillance and jurisdiction. This state of affairs not only raises serious questions about privacy, but also and national sovereignty.  The concept of “network sovereignty,” national sovereignty in the internet context, refers to the ability of a nation to exercise effective control over its own critical internet infrastructure. It can be pursued by various technical, economic and policy measures.</p>
            <p>To see examples of boomerang routing, select your country in both the From and To filters, then with the +Via filter select US or another third country. Boomerang routing can even occur when the origin and destination are in the same city. To map these, adjust the From and To filters for the city(s) of your choice.</p>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>window.jQuery||document.write('<script src="js/jquery.min.js"><\/script>')</script>
<script src="js/main.min.js"></script>

</body>
</html>