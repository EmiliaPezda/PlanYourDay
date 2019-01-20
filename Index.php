<?php include("App.php");?>
<!DOCTYPE html>
<html>
<head>
    <title>Plan your route with Google Maps</title>
<meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="includes/style.css">
  </head>
  <body>
    <div id="map"></div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 8
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDLI74YgPlEsEAMZHibswyGts1zFV7gfVk&callback=initMap"
    async defer></script>
    <div id="userInput">
       Where are you going today?
       
       <form action="" id="routeForm">
        <input type="text" id="routeStart" value="">
        <input type="submit" value="Find">
        </form>
    </div>
    
  </body>
</html>