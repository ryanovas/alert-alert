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
    
	function markSpaceEvent() {
      convertCoords(160.99, 39.99, 'Wham-o space event', 'Although you may think astronomy is boring, some telescope discovered something fantasmagoric.  You should be excited about this too!');
      convertCoords(39.99, 160.99, 'Wham-o space event2', 'Astronomy is cool! Some telescope discovered something awesome.  You are excited!');
      convertCoords(500.99, -39.99, 'Wham-o space event3', 'Coffee is the elixer of life, and some telescope discovered something out of this world.  Booya!');
      convertCoords(39.99, -500.99, 'Wham-o space event4', 'We like space so much we gave up a whole weekend to create this web site.  You should be excited about this too!');
	}