<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>IXmaps</title>
    <?php include '_includes/global-head.php'; ?>
</head>

<body id="map-page">
<?php include '_includes/global-navigation.php'; ?>

<!-- SEARCH AREA -->
<section id="search-header">
<div class="content">

  <!-- Search Tabs -->
  <div class="ui top attached tabular menu">
    <a class="item" data-tab="quick">Quick</a>
    <a class="item active" data-tab="basic">Basic</a>
    <a class="item" data-tab="advanced">Advanced</a>

    <div class="float-right">
      <button class="ui primary basic button">Help</button>
    </div>
  </div>

  <!-- Tab 1 Contents: Quick Search -->
  <div class="ui bottom attached tab segment content" data-tab="quick">
    <h3 class="ui header text-center">Select a quick search to view traceroutes in the IXmaps database.</h3>
    <div class="text-center">
      <button class="large ui button">Last Contibuted</button>
      <button class="large ui button">Via NSA City</button>
      <button class="large ui button">Boomerangs</button>
      <button class="large ui button">From My ISP</button>
      <button class="large ui button">From My City</button>
      <button class="large ui button">From My Country</button>
    </div>
    <hr>
    <div>
      <p class="minor">
        <strong>Search Query:&#8196;</strong>
        <span>Does Originate in AS number 814</span>
        <a href="#">&#8195;[ Refine in Advanced Search ]</a>
      </p>
    </div>
  </div>

  <!-- Tab 2 Contents: Basic Search -->
  <div class="ui bottom attached tab segment active content" data-tab="basic">
    <h3 class="ui header text-center">Enter Search Terms to Find Traceroutes in the IXmaps Database</h3>
    <div>


      <div class="basic-search-item  input-summary">
        <div class="ui top attached label">FROM</div>
        <div class="basic-search">–––</div>
      </div>
      <div class="basic-search-item input-summary">
        <div class="ui top attached label">VIA</div>
        <div>–––</div>
      </div>
      <div class="basic-search-item input-summary">
        <div class="ui top attached label">TO</div>
        <div>–––</div>
      </div>
      <button class="ui large button basic-search-item">Search</button>
    </div>
  </div>

  <!-- Tab 3 Contents: Advanced Search -->
  <div class="ui bottom attached tab segment" data-tab="advanced">
    <h3 class="ui header text-center">Construct a custom query to search the IXmaps database</h3>
    <div class="query-line">
      <!-- Does Not -->
      <div class="advanced-input">
      <select class="ui fluid dropdown">
        <option value="1">Does Not</option>
        <option value="0">Does</option>
      </select>
      </div>

      <!-- Terminate -->
      <div class="advanced-input">
      <select class="ui fluid dropdown">
        <option value="1">Terminates In</option>
        <option value="0">Does</option>
      </select>
      </div>

      <!-- Destination -->
      <div class="advanced-input">
      <select class="ui fluid dropdown">
        <option value="1">Destination Hostname</option>
        <option value="0">Does</option>
      </select>
      </div>

      <!-- Input -->
      <div class="advanced-input">
      <div class="ui large fluid input">
        <input type="text" placeholder="Host Name">
      </div>
      </div>

      <!-- And -->
      <div class="advanced-input">
      <select class="ui fluid dropdown">
        <option value="1">And</option>
        <option value="0">Or</option>
      </select>
      </div>

      <!-- ADD -->
      <button class="circular ui icon button">
        <i class="icon settings"></i>
      </button>

      <!-- DELETE -->
      <button class="circular ui icon button">
        <i class="icon settings"></i>
      </button>
    </div>

    <div class="search-line">
      <hr>

      <button class="ui primary basic button ">
      Settings
      </button>

      <button class="ui primary button float-right">
        Search
      </button>

      <button class="ui secondary button float-right">
        Clear
      </button>
    </div>

  </div>

</div>
</section>

<!-- RESULTS AREA -->
<div class="map-holder">
  <div class="results">

  <header id="header" class="">
    <h2>Z Traceroutes Found <br>
    Displaying X of Y most recent search results</h2>
  </header><!-- /header -->


    <h6>Tracerouts</h6>
    <button class="ui compact inverted button">Map All</button>
    <button class="ui compact inverted button">Hide All</button>

    <table class="ui sortable celled unstackable selectable table">
    <thead><tr>
      <th class="sorted ascending">Origin</th>
      <th class="sorted ascending">Destination</th>
      <th class="sorted ascending">TR ID</th>
    </tr></thead>

    <tbody>
      <tr class="selectable">
        <td><i class="canada flag"></i>Toronto</td>
        <td>www.website.com</td>
        <td>4263</td>
      </tr>
      <tr class="selectable">
        <td><i class="canada flag"></i>Toronto</td>
        <td>www.website.com</td>
        <td>4263</td>
      </tr>
      <tr class="selectable">
        <td><i class="america flag"></i>New York</td>
        <td>www.website.com</td>
        <td>4263</td>
      </tr>
    </tbody>
    </table>


    <h6>Carriers</h6>

    <table class="ui sortable celled minor table">
    <thead><tr>
      <th class="sorted ascending">Carrier</th>
      <th class="sorted ascending">Nat.</th>
      <th class="sorted ascending">Routers</th>
      <th class="sorted ascending">Transparency</th>
    </tr></thead>

    <tbody>
      <tr>
        <td>Shaw</td>
        <td><i class="canada flag"></i></td>
        <td>4</td>
        <td><div class="ui mini star rating" data-rating="2" data-max-rating="10""></div></td>
      </tr>
      <tr>
        <td>Rogers</td>
        <td><i class="canada flag"></i></td>
        <td>2</td>
        <td><div class="ui mini star rating" data-rating="3" data-max-rating="10"></div></td>
      </tr>
      <tr>
        <td>Bell</td>
        <td><i class="canada flag"></i></td>
        <td>6</td>
        <td><div class="ui mini star rating" data-rating="4" data-max-rating="10"></div></td>
      </tr>
    </tbody>
    </table>
  </div>

  <div class="map-canvas">
      <div id="map"></div>
  </div>
</div>


<?php include '_includes/global-footer.php'; ?>



<!-- Semantic UI :: Tabs & Tables  -->
<script type="text/javascript" src="_assets/js/sort-table.js"></script>

<script>
  $('.top.menu .item').tab();
  $('table').tablesort();
  $('.ui.rating').rating('disable');
</script>

<!-- Google Maps API  -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!-- Snazzy Maps  -->
<script type="text/javascript">

    // When the window has finished loading create our google map below
    google.maps.event.addDomListener(window, 'load', init);

    function init() {
        // Basic options for a simple Google Map
        // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
        var mapOptions = {
            // How zoomed in you want the map to start at (always required)
            zoom: 11,

            // The latitude and longitude to center the map (always required)
            center: new google.maps.LatLng(40.6700, -73.9400), // New York

            // How you would like to style the map.
            // This is where you would paste any style found on Snazzy Maps.
            styles: [{"featureType":"all","elementType":"geometry.fill","stylers":[{"weight":"2.00"}]},{"featureType":"all","elementType":"geometry.stroke","stylers":[{"color":"#9c9c9c"}]},{"featureType":"all","elementType":"labels.text","stylers":[{"visibility":"on"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"landscape.man_made","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"color":"#eeeeee"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#7b7b7b"}]},{"featureType":"road","elementType":"labels.text.stroke","stylers":[{"color":"#ffffff"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#c8d7d4"}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"color":"#070707"}]},{"featureType":"water","elementType":"labels.text.stroke","stylers":[{"color":"#ffffff"}]}]
        };

        // Get the HTML DOM element that will contain your map
        // We are using a div with id="map" seen below in the <body>
        var mapElement = document.getElementById('map');

        // Create the Google Map using our element and options defined above
        var map = new google.maps.Map(mapElement, mapOptions);

        // Let's also add a marker while we're at it
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(40.6700, -73.9400),
            map: map,
            title: 'Snazzy!'
        });
    }
</script>


</body>
</html>