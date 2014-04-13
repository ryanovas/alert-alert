<?php   
header( 'Expires: Sat, 26 Jul 1997 05:00:00 GMT' );   
header( 'Last-Modified: ' . gmdate( 'D, d M Y H:i:s' ) . ' GMT' );   
header( 'Cache-Control: no-store, no-cache, must-revalidate' );   
header( 'Cache-Control: post-check=0, pre-check=0', false );   
header( 'Pragma: no-cache' );   
?> 

<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-language" content="en"; charset="UTF-8">
	<title>SkyWatch - the way our skies were meant to be discovered</title>
	<meta name="keywords" content="NEEDED">	
	<meta name="description" content="NEEDED">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="shortcut icon" type="image/x-icon" href=""> -->

	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
	
	<?php echo '<link href="' . base_url() . 'assets/css/bootstrap.css?v1.1" rel="stylesheet" type="text/css">'; ?>

	<?php echo '<script src="' . base_url() . 'assets/js/jquery-1.11.0.min.js"></script>'; ?>

	<!--Google Map-->
	<style>
    	html, body, #map-canvas {
        height: 100%;
        margin: 0px;
        padding: 0px
      	}
    </style>
    
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    
    <script>
		
		var skyEvent = {};
				
		// Function for size of an object
		Object.size = function(obj) {
    		var size = 0, key;
    		for (key in obj) {
        		if (obj.hasOwnProperty(key)) size++;
    		}
    		return size;
		};

		var lat, lng;

		// Function for creating a Sky Event
		function createSkyEvent(lat, lng) {
			var index = Object.size(skyEvent);
			skyEvent[index] = {
				center: new google.maps.LatLng(lat, lng)
			};
		}

		// DUMMY COORDINATES
		// createSkyEvent(43.7182713, -79.3777061);
		// createSkyEvent(47.614848, -122.3358423);
		// createSkyEvent(41.878113, -87.629798);
		// createSkyEvent(40.714352, -74.005973);
		// createSkyEvent(34.052234, -118.243684);
		// createSkyEvent(62.474876,-114.408995);
		// createSkyEvent(32.2324358,-110.9473494); //LPL (Lunar and Planetary Laboratory)
		// createSkyEvent(34.137658,-118.125269); //Caltech (California Institute of Technology)

		var eventCircle;

		function initialize() {
		  // Create the map
		  var mapOptions = {
		    zoom: 3,
		    center: new google.maps.LatLng(37.09024, -95.712891),
		    mapTypeId: google.maps.MapTypeId.TERRAIN,
		    streetViewControl: false
		  };

		  var map = new google.maps.Map(document.getElementById('map-canvas'),
		      mapOptions);

		  for (var sEvent in skyEvent) {
		    var addCircle = {
		      strokeColor: '#FF0000',
		      strokeOpacity: 0.8,
		      strokeWeight: 2,
		      fillColor: '#FF0000',
		      fillOpacity: 0.35,
		      map: map,
		      center: skyEvent[sEvent].center,
		      radius: 200000
		    };
		    // Add the circle for this coordinate to the map
		    eventCircle = new google.maps.Circle(addCircle);
		  }
		}

		google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <!--Google Map-->

</head>

<body>
	
	<nav class="navbar">
		<img src="assets/images/logo.png">
		<ul class="navbar-nav">
			<li class="active">Feed</li><li>About</li><li>Team</li><li>Contact</li>
		</ul>
	</nav>

	<div class="container">

		<ul>
			<li>Land</li><li>Sky</li><li>Schema</li>
		</ul>
		<ul class="filter">
			<li>Filters</li><li>Subscribe</li>
		</ul>

		<div class="displayCont">

			<div id="map-canvas"></div>

		</div>

		<div class="feedCont">

			<div class="feedCard">
				<div class="imgCont">
				</div>
				<div class="cardHeader">
					<h2>Supernuvae</h2>
					<p>From: NASA GCN</p>
					<p>Author: Ryan Ovas</p>
				</div>
				<div class="coordinates">
					<ul>
						<li>RA: 24.594</li><li>Dec: 41.485</li><li>PosError: 0</li>
					</ul>
				</div>
				<div class="description">
					<p>This is a description of this event and some of the observation's taking place</p>
				</div>
					<p class="ivo">ivo://nvo.caltech/voeventnet/catot#1004071150784109051</p>
					<p class="timestamp">1918-11-11T11:11:11</p>
			</div>

			<div class="feedCard">
				<div class="imgCont">
				</div>
				<div class="cardHeader">
					<h2>Supernuvae</h2>
					<p>From: NASA GCN</p>
					<p>Author: Ryan Ovas</p>
				</div>
				<div class="coordinates">
					<ul>
						<li>RA: 24.594</li><li>Dec: 41.485</li><li>PosError: 0</li>
					</ul>
				</div>
				<div class="description">
					<p>This is a description of this event and some of the observation's taking place</p>
				</div>
					<p class="ivo">ivo://nvo.caltech/voeventnet/catot#1004071150784109051</p>
					<p class="timestamp">1918-11-11T11:11:11</p>
			</div>

			<div class="feedCard">
				<div class="imgCont">
				</div>
				<div class="cardHeader">
					<h2>Supernuvae</h2>
					<p>From: NASA GCN</p>
					<p>Author: Ryan Ovas</p>
				</div>
				<div class="coordinates">
					<ul>
						<li>RA: 24.594</li><li>Dec: 41.485</li><li>PosError: 0</li>
					</ul>
				</div>
				<div class="description">
					<p>This is a description of this event and some of the observation's taking place</p>
				</div>
					<p class="ivo">ivo://nvo.caltech/voeventnet/catot#1004071150784109051</p>
					<p class="timestamp">1918-11-11T11:11:11</p>
			</div>

			<div class="feedCard">
				<div class="imgCont">
				</div>
				<div class="cardHeader">
					<h2>Supernuvae</h2>
					<p>From: NASA GCN</p>
					<p>Author: Ryan Ovas</p>
				</div>
				<div class="coordinates">
					<ul>
						<li>RA: 24.594</li><li>Dec: 41.485</li><li>PosError: 0</li>
					</ul>
				</div>
				<div class="description">
					<p>This is a description of this event and some of the observation's taking place</p>
				</div>
					<p class="ivo">ivo://nvo.caltech/voeventnet/catot#1004071150784109051</p>	
					<p class="timestamp">1918-11-11T11:11:11</p>
			</div>

			<div class="feedCard">
				<div class="imgCont">
				</div>
				<div class="cardHeader">
					<h2>Supernuvae</h2>
					<p>From: NASA GCN</p>
					<p>Author: Ryan Ovas</p>
				</div>
				<div class="coordinates">
					<ul>
						<li>RA: 24.594</li><li>Dec: 41.485</li><li>PosError: 0</li>
					</ul>
				</div>
				<div class="description">
					<p>This is a description of this event and some of the observation's taking place</p>
				</div>
					<p class="ivo">ivo://nvo.caltech/voeventnet/catot#1004071150784109051</p>	
					<p class="timestamp">1918-11-11T11:11:11</p>
			</div>

			<div class="feedCard">
				<div class="imgCont">
				</div>
				<div class="cardHeader">
					<h2>Supernuvae</h2>
					<p>From: NASA GCN</p>
					<p>Author: Ryan Ovas</p>
				</div>
				<div class="coordinates">
					<ul>
						<li>RA: 24.594</li><li>Dec: 41.485</li><li>PosError: 0</li>
					</ul>
				</div>
				<div class="description">
					<p>This is a description of this event and some of the observation's taking place</p>
				</div>
					<p class="ivo">ivo://nvo.caltech/voeventnet/catot#1004071150784109051</p>	
					<p class="timestamp">1918-11-11T11:11:11</p>
			</div>

			<div class="feedCard">
				<div class="imgCont">
				</div>
				<div class="cardHeader">
					<h2>Supernuvae</h2>
					<p>From: NASA GCN</p>
					<p>Author: Ryan Ovas</p>
				</div>
				<div class="coordinates">
					<ul>
						<li>RA: 24.594</li><li>Dec: 41.485</li><li>PosError: 0</li>
					</ul>
				</div>
				<div class="description">
					<p>This is a description of this event and some of the observation's taking place</p>
				</div>
					<p class="ivo">ivo://nvo.caltech/voeventnet/catot#1004071150784109051</p>	
					<p class="timestamp">1918-11-11T11:11:11</p>
			</div>

			<div class="feedCard">
				<div class="imgCont">
				</div>
				<div class="cardHeader">
					<h2>Supernuvae</h2>
					<p>From: NASA GCN</p>
					<p>Author: Ryan Ovas</p>
				</div>
				<div class="coordinates">
					<ul>
						<li>RA: 24.594</li><li>Dec: 41.485</li><li>PosError: 0</li>
					</ul>
				</div>
				<div class="description">
					<p>This is a description of this event and some of the observation's taking place</p>
				</div>
					<p class="ivo">ivo://nvo.caltech/voeventnet/catot#1004071150784109051</p>	
					<p class="timestamp">1918-11-11T11:11:11</p>
			</div>

			<div class="feedCard">
				<div class="imgCont">
				</div>
				<div class="cardHeader">
					<h2>Supernuvae</h2>
					<p>From: NASA GCN</p>
					<p>Author: Ryan Ovas</p>
				</div>
				<div class="coordinates">
					<ul>
						<li>RA: 24.594</li><li>Dec: 41.485</li><li>PosError: 0</li>
					</ul>
				</div>
				<div class="description">
					<p>This is a description of this event and some of the observation's taking place</p>
				</div>
					<p class="ivo">ivo://nvo.caltech/voeventnet/catot#1004071150784109051</p>	
					<p class="timestamp">1918-11-11T11:11:11</p>
			</div>

			<div class="feedCard">
				<div class="imgCont">
				</div>
				<div class="cardHeader">
					<h2>Supernuvae</h2>
					<p>From: NASA GCN</p>
					<p>Author: Ryan Ovas</p>
				</div>
				<div class="coordinates">
					<ul>
						<li>RA: 24.594</li><li>Dec: 41.485</li><li>PosError: 0</li>
					</ul>
				</div>
				<div class="description">
					<p>This is a description of this event and some of the observation's taking place</p>
				</div>
					<p class="ivo">ivo://nvo.caltech/voeventnet/catot#1004071150784109051</p>	
					<p class="timestamp">1918-11-11T11:11:11</p>
			</div>

			<div class="feedCard">
				<div class="imgCont">
				</div>
				<div class="cardHeader">
					<h2>Supernuvae</h2>
					<p>From: NASA GCN</p>
					<p>Author: Ryan Ovas</p>
				</div>
				<div class="coordinates">
					<ul>
						<li>RA: 24.594</li><li>Dec: 41.485</li><li>PosError: 0</li>
					</ul>
				</div>
				<div class="description">
					<p>This is a description of this event and some of the observation's taking place</p>
				</div>
					<p class="ivo">ivo://nvo.caltech/voeventnet/catot#1004071150784109051</p>	
					<p class="timestamp">1918-11-11T11:11:11</p>
			</div>

			<div class="feedCard">
				<div class="imgCont">
				</div>
				<div class="cardHeader">
					<h2>Supernuvae</h2>
					<p>From: NASA GCN</p>
					<p>Author: Ryan Ovas</p>
				</div>
				<div class="coordinates">
					<ul>
						<li>RA: 24.594</li><li>Dec: 41.485</li><li>PosError: 0</li>
					</ul>
				</div>
				<div class="description">
					<p>This is a description of this event and some of the observation's taking place</p>
				</div>
					<p class="ivo">ivo://nvo.caltech/voeventnet/catot#1004071150784109051</p>	
					<p class="timestamp">1918-11-11T11:11:11</p>
			</div>

		</div>
	
	</div>

</body>
</html>