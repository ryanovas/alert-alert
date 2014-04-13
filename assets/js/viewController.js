// VIEW CONTROLLER

$(document).ready(function() {

	var currentView = 'map';

	// MAP VIEW

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
				createSkyEvent(29.817178,-95.4012915);
				createSkyEvent(46.8580074,-71.3460728);
				createSkyEvent(34.078611,-107.618316);
				createSkyEvent(10.4683918,-66.8903658);
				createSkyEvent(19.8199996,-155.47);

				var eventCircle;

				function mapinitialize() {

				  currentView = 'map';

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

				google.maps.event.addDomListener(window, 'load', mapinitialize);




	// SKY VIEW

		    var mapTypes = {};
		 
		    mapTypes['sky'] = {
		      getTileUrl: function(coord, zoom) {
		        return getHorizontallyRepeatingTileUrl(coord, zoom, function(coord, zoom) {
		          return "http://mw1.google.com/mw-planetary/sky/skytiles_v1/" +
		                 coord.x + "_" + coord.y + '_' + zoom + '.jpg';
		 
		        });
		      },
		      tileSize: new google.maps.Size(256, 256),
		      isPng: false,
		      maxZoom: 13,
		      radius: 57.2957763671875,
		      name: 'Sky',
		      credit: 'Image Credit: SDSS, DSS Consortium, NASA/ESA/STScI'
		    };
		 
		 
		    // Normalizes the tile URL so that tiles repeat across the x axis (horizontally) like the
		    // standard Google map tiles.
		    function getHorizontallyRepeatingTileUrl(coord, zoom, urlfunc) {
		      var y = coord.y;
		      var x = coord.x;
		 
		      // tile range in one direction range is dependent on zoom level
		      // 0 = 1 tile, 1 = 2 tiles, 2 = 4 tiles, 3 = 8 tiles, etc
			  var tileRange = 1 << zoom;
		 
		      // don't repeat across y-axis (vertically)
			  if (y < 0 || y >= tileRange) {
			    return null;
			   }
		 
		      // repeat across x-axis
			  if (x < 0 || x >= tileRange) {
		        x = (x % tileRange + tileRange) % tileRange;
		      }
		 
		      return urlfunc({x:x,y:y}, zoom)
		    }
		 
		    var map;
		 
		    // Setup a copyright/credit line, emulating the standard Google style
		    var creditNode = document.createElement('div');
		    creditNode.id = 'credit-control';
		    creditNode.style.fontSize = '11px';
		    creditNode.style.fontFamily = 'Arial, sans-serif';
		    creditNode.style.margin = '0 2px 2px 0';
		    creditNode.style.whitespace = 'nowrap';
		    creditNode.index = 0;
		 
		    function setCredit(credit) {
		      creditNode.innerHTML = credit + ' -';
		    }
		 
		    function convertCoords(ra, dec, title, desc) {
		    	var x = Math.cos(dec) * Math.cos(ra);
		    	var y = Math.cos(dec) * Math.sin(ra);
		    	var z = Math.sin(dec);
				var r = Math.sqrt(x*x + y*y + z*z);
				var lng = Math.acos(z / r);
				var lat = Math.atan(y / x);
				var loc = new google.maps.LatLng(lat,lng);
		        var marker = new google.maps.Marker({
				  position: loc,
				  title: title
		        });
			    marker.setMap(map);
			    map.setCenter(loc);
				var contentString = '<div class="content">'+
			      '<div class="siteNotice">'+
			      '</div>'+
			      '<h1 class="firstHeading">' +
			      title +
			      '</h1>'+
			      '<div class="bodyContent">'+
			      '<p>' +
			      desc +
				  '</p>'+
			      '</div>'+
			      '</div>';
			
				  var infowindow = new google.maps.InfoWindow({
				      content: contentString
				  });   

				  google.maps.event.addListener(marker, 'click', function() {
				     infowindow.open(map,marker);
				   });    
			};
		 
		    function skyinitialize() {

		      currentView = 'sky';
		 
		      var mapOptions = {
		        zoom: 2,
		        center: new google.maps.LatLng(0,0),
			    mapTypeControl: false,
			    streetViewControl: false
		      };

		      map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
		 
		      // push the credit/copyright custom control
		      map.controls[google.maps.ControlPosition.BOTTOM_RIGHT].push(creditNode);
		 
		      // add the new map types to map.mapTypes
		      map.mapTypes.set('sky', new google.maps.ImageMapType(mapTypes['sky']));
		 
		      // handle maptypeid_changed event to set the credit line
		      google.maps.event.addListener(map, 'maptypeid_changed', function() {
		        setCredit(mapTypes[map.getMapTypeId()].credit);
		      });
		 
		      // start with the sky map type
		      map.setMapTypeId('sky');
		            
		    }

		    var Coords = {};

		    function createCoords(raInput, decInput, titleInput, descInput) {
		    	var index = Object.size(Coords);
		    	Coords[index] = {
		    		ra: raInput,
		    		dec: decInput,
		    		title: titleInput,
		    		desc: descInput
		    	};
		    }
		    
			function markSpaceEvent() {
		    	
				for (var coord in Coords) {

					convertCoords(Coords[coord].ra, Coords[coord].dec, Coords[coord].title, Coords[coord].desc);

				}

			}





	
	$('#land').click(function() {
		mapinitialize();
	});

	$('#sky').click(function() {
		skyinitialize();
	});

	$('.schemaButton').click(function() {
		
		var xml = $(this).parent().find('.xmlLink').html();
		var win=window.open(xml, '_blank');
		win.focus();

	});

	$('.viewButton').click(function() {

		var parent = $(this).parent();

		var ra = parent.find('.coordinates ul').find('.ra').html();
		var dec = parent.find('.coordinates ul').find('.dec').html();
		var title = parent.find('.cardHeader .title').html();
		var desc = parent.find('.description p').html();

		if (currentView !== 'sky') {
			skyinitialize();
		}

		createCoords(ra, dec, title, desc);
		markSpaceEvent();

	});

});


























