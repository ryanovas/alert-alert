function createSkyEvent(e,t){var n=Object.size(skyEvent);skyEvent[n]={center:new google.maps.LatLng(e,t)}}function mapinitialize(){var e={zoom:3,center:new google.maps.LatLng(37.09024,-95.712891),mapTypeId:google.maps.MapTypeId.TERRAIN,streetViewControl:false};var t=new google.maps.Map(document.getElementById("map-canvas"),e);for(var n in skyEvent){var r={strokeColor:"#FF0000",strokeOpacity:.8,strokeWeight:2,fillColor:"#FF0000",fillOpacity:.35,map:t,center:skyEvent[n].center,radius:2e5};eventCircle=new google.maps.Circle(r)}}var skyEvent={};Object.size=function(e){var t=0,n;for(n in e){if(e.hasOwnProperty(n))t++}return t};var lat,lng;createSkyEvent(43.7182713,-79.3777061);createSkyEvent(47.614848,-122.3358423);createSkyEvent(41.878113,-87.629798);createSkyEvent(40.714352,-74.005973);createSkyEvent(34.052234,-118.243684);createSkyEvent(62.474876,-114.408995);createSkyEvent(32.2324358,-110.9473494);createSkyEvent(34.137658,-118.125269);var eventCircle;google.maps.event.addDomListener(window,"load",mapinitialize)