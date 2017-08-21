<!DOCTYPE html>
<html>
    <head>
   	    <meta charset="utf-8">
        <title>Maps | StudentMate</title>
        <meta name="viewport" content="initial-scale=1.0">        
        <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="./css/map.css">
        <link rel="stylesheet" type="text/css" href="./css/footer.css">
	    <script src="js/searchByPlaces.js"></script>
	    <script src="js/markers.js"></script>
        
    </head>
    <body>
        
        <!-- container -->
    <div class="container">
            <header>
            <div class='nav'>
                <ul id='ul-nav'>
                  
                    <li class='home'><a href='index.php'>StudentMate</a></li>
                    
                </ul>
          
            </div>
        </header>
		<center>
		<div id="mapdiv">
		<center><h1>Find your places</h1></center>
		    <input id="pac-input" class="controls" type="text" placeholder="Search Box">

		    <select id="selectplace">
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
	</div></center>
        
 <?php include('./import/footer.php'); ?>
    </body>
</html>