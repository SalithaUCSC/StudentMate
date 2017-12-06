<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Places Searchbox</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/map/styles.css">
    <script src="<?php echo base_url();?>assets/js/map/searchByPlaces.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>


</head>
<body>
<div>
    <input id="pac-input" class="controls" type="text" placeholder="Search">

    <select id ="type">
        <option value="restuarent">Restuarents</option>
        <option value="atm">ATM</option>
        <option value="bar">Bar</option>
        <option value="audi">Audi</option>
    </select>
    <button id="search-by-selection" onclick="getMarker()">Search</button>

</div>

<div id="map">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDccLlV_rbSEOElJchCKxcP8ayVoatGNFc&libraries=places&callback=initAutocomplete"
            async defer>

    </script>

</div>

<script type="text/javascript">

    function getMarker() {
      var type = document.getElementById("type").value;
        $.ajax({
            type: "GET",
            url: "<?php echo base_url() ?>Markers/closest_locations?keyword="+type,
            dataType: "json",

            success: function(data) {
                // when request is successed add markers with results
                console.log(data);
                addMarkers(data);

            },
            error: function(){
              console.log('error');
            }
        });
    }



    function addMarkers(data){
      var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 10,
          center: new google.maps.LatLng(6.902431,79.861326),
          mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        var infowindow = new google.maps.InfoWindow();
        var marker, i;

        for (i = 0; i < data.length; i++) {
            var coords = [data[i].lat, data[i].lng];
            //console.log(coords);
            var pt = new google.maps.LatLng(parseFloat(coords[0]), parseFloat(coords[1]));
            marker = new google.maps.Marker({
                position: pt,
                map: map,
                address: data[i].address,
                title: data[i].name,
            });

            var contentString = '<div id="content">'+
              '<div id="siteNotice">'+
              '</div>'+
              '<h1 id="firstHeading" class="firstHeading">'+data[i].name+'</h1>'+
              '<div id="bodyContent">'+
              '<p><b>'+data[i].address+'</b></p></br>'+
              '<p>'+data[i].description+'</p>'+
              '</div>'+
              '</div>';

            google.maps.event.addListener(marker, 'click', (function(marker, i) {
              return function() {
                infowindow.setContent( contentString);
                infowindow.open(map, marker);
              }
            })
            (marker, i));

        }

    }

</script>
</body>
</html>
