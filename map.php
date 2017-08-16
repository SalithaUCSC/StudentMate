<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Places Searchbox</title>
    <link rel="stylesheet" href="css/map.css">
    <script src="js/searchByPlaces.js"></script>
    <script src="js/markers.js"></script>

</head>
<body>
<div>
    <input id="pac-input" class="controls" type="text" placeholder="Search Box">

    <select>
        <option value="restuarent">Restuarents</option>
        <option value="atm">ATM</option>
        <option value="mercedes">Mercedes</option>
        <option value="audi">Audi</option>
    </select>
    <button id="search-by-selection" onclick="initMap()">Search</button>

</div>

<div id="map">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDccLlV_rbSEOElJchCKxcP8ayVoatGNFc&libraries=places&callback=initAutocomplete"
            async defer>

    </script>

</div>

<!--
<script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAedNpRttiadInjnTKXjhf3u9BASciS5AE&callback=initMap">
    </script>

-->
</body>
</html>