$(document).ready(function () {

	function createCookie(name, value, days) {
		if (days) {
			var date = new Date();
			date.setTime(date.getTime()+(days*24*60*60*1000));
			var expires = "; expires="+date.toGMTString();
		}

		else var expires = "";
		document.cookie = name+"="+value+expires+"; path=/";
	}

	function readCookie(name) {
	  var nameEQ = name + "=";
	  var ca = document.cookie.split(';');
	  for(var i=0;i < ca.length;i++) {
	    var c = ca[i];
	    while (c.charAt(0)==' ') c = c.substring(1,c.length);
	    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	  }
	  return null;
	}

	if (readCookie('alertTimer') === null) {

		alert('Please note this is just a prototype, we are currently developing a fully functional product.');
		createCookie('alertTimer', true, 0.076);

	}

    $('#filterButton').click(function() {

        $('#filterModal').css({
        	opacity: '1',
        	zIndex: '9999',
        	pointerEvents: 'auto'
        });
        $('#modalCover').css('display', 'block');

    });

    $('#filterCancel').click(function() {

    	$('#filterModal').css({
        	opacity: '0',
        	zIndex: '-9999',
        	pointerEvents: 'none'
        });
        $('#modalCover').css('display', 'none');

    });

    $('#filterOK').click(function() {

    	$('#filterModal').css({
        	opacity: '0',
        	zIndex: '-9999',
        	pointerEvents: 'none'
        });
        $('#modalCover').css('display', 'none');

    });

    $('#subButton').click(function() {

        $('#subscribeModal').css({
        	opacity: '1',
        	zIndex: '9999',
        	pointerEvents: 'auto'
        });
        $('#modalCover').css('display', 'block');

    });

    $('#subCancel').click(function() {

    	$('#subscribeModal').css({
        	opacity: '0',
        	zIndex: '-9999',
        	pointerEvents: 'none'
        });
        $('#modalCover').css('display', 'none');

    });

    $('#subOK').click(function() {

    	$('#subscribeModal').css({
        	opacity: '0',
        	zIndex: '-9999',
        	pointerEvents: 'none'
        });
        $('#modalCover').css('display', 'none');

    });    

    	jQuery.urlShortener.settings.apiKey='AIzaSyB5G9uHkh_xMaazDUV2loBWUpnuROvEiHA';

    	jQuery.urlShortener({
    	    longUrl: window.location.href,
    	    success: function (shortUrl) {
    	        
    	        var text = 'Check out the "Best Use of Data" winner of #SpaceApps2014 @SkyWatchApps! #space #astronomy #bigdata';

        		$('.share').share({
        			url: shortUrl,
        			text: text,
        			image: 'http://skywatch.co/assets/images/logo.png',
        			button_text: 'Share',
        			flyout: 'bottom left'
        		});

    	    },
    	    error: function(err)
    	    {
    	        console.log(JSON.stringify(err));
    	    }
    	});

});