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
		createSkyEvent(43.7182713, -79.3777061);
		createSkyEvent(47.614848, -122.3358423);
		createSkyEvent(41.878113, -87.629798);
		createSkyEvent(40.714352, -74.005973);
		createSkyEvent(34.052234, -118.243684);
		createSkyEvent(62.474876,-114.408995);
		createSkyEvent(32.2324358,-110.9473494); //LPL (Lunar and Planetary Laboratory)
		createSkyEvent(34.137658,-118.125269); //Caltech (California Institute of Technology)

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