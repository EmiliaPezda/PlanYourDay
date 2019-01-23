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
   <div id="map"></div>
    <script>
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 8,
          center: {lat: 50.287063, lng: 21.4238101}
        });
        var geocoder = new google.maps.Geocoder();

        document.getElementById('submit').addEventListener('click', function() {
          geocodeAddress(geocoder, map);
        });
      }

      function geocodeAddress(geocoder, resultsMap) {
        var address = document.getElementById('address').value;
        geocoder.geocode({'address': address}, function(results, status) {
          if (status === 'OK') {
            resultsMap.setCenter(results[0].geometry.location);
            var marker = new google.maps.Marker({
              map: resultsMap,
              position: results[0].geometry.location
            });
          } else {
            alert('Geocode was not successful for the following reason: ' + status);
          }
        });
      }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDLI74YgPlEsEAMZHibswyGts1zFV7gfVk&callback=initMap"
    ></script>
    
    <!-- User list -->
    <div id="list">
        <ul id="aims"> List of places:
        </ul>      
    </div>
      
    <!-- form to input aims -->
    <div id="userInput">
       Where are you going today?
       
       <form action="" id="routeForm">
        <input type="text" id="address" value="" placeholder="Input any address">
        <input type="submit" id="submit" value="Find">
        </form>
    </div>
    
  </body>
</html>
