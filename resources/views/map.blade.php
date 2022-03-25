<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ubicacion</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            #map {
            height: 100%;
            }

            html,
            body {
            height: 100%;
            margin: 0;
            padding: 0;
            }
        </style>
    </head>
    <body class="antialiased">
        <div id="map"></div>
        <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA7HFk5-RVpEKm-pOhwlhua0-8cglfAM6g&callback=initMap&v=weekly"
        ></script>
        
        <script>
            let map;
            function initMap() {
            map = new google.maps.Map(document.getElementById("map"), {
                center: { lat: -34.397, lng: 150.644 },
                zoom: 8,
            });
            }
        </script>
    </body>
</html>
