<?php

include '../app/vendor/autoload.php';
$foo = new App\Acme\Foo();

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Leaflet.heat demo</title>
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
        <style>
            #map { width: 800px; height: 600px; }
            body { font: 16px/1.4 "Helvetica Neue", Arial, sans-serif; }
            .ghbtns { position: relative; top: 4px; margin-left: 5px; }
            a { color: #0077ff; }
        </style>
    </head>
    <body>
        <div id="map"></div>
        <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
        <script src="../js/leaflet-heat.js"></script>

        <script src="js/realworld.10000.js"></script>
        <script>
            var map = L.map('map').setView([-37.87, 175.475], 12);

            var tiles = L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors',
            }).addTo(map);

            addressPoints = addressPoints.map(function (p) { return [p[0], p[1]]; });

            var heat = L.heatLayer(addressPoints).addTo(map);

        </script>
    </body>
</html>
