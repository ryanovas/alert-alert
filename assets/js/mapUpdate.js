$(document).ready(function() {

	$('.feedCard').each(function() {
	
		var RA = $(this).find('.coordinates .ra').html();

		$(this).hover(

			function() {

				// Behaviour of when a feed card is hovered-on.
				//mapinitialize('00FF00');

			},

			function() {
				
				// Behaviour of when a feed card is hovered-off.
				//google.maps.event.addDomListener(window, , mapinitialize('#FF0000'));
				//mapinitialize('#FF0000');
			}

		);
	});
});