<?php include("App.php");?>
<!DOCTYPE html>
<html>
<head>
    <title>Plan your route with Google Maps</title>
<meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="includes/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="includes/views.js"></script>
  </head>
  <body>
      
    <!--google maps -->
    <div id="map">
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 50.287063, lng: 21.4238101},
          zoom: 8
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDLI74YgPlEsEAMZHibswyGts1zFV7gfVk&callback=initMap"
    async defer></script>
    </div>
    
    <!-- User list -->
    <div id="list">
        <ul id="aims"> List of places:
        </ul>      
    </div>
      
    <!-- form to input aims -->
    <div id="userInput">
       Where are you going today?
       
       <form action="" id="routeForm">
        <input type="text" id="routeStart" value="" placeholder="Input any address">
        <input type="submit" value="Find">
        </form>
    </div>
    
  </body>
</html>