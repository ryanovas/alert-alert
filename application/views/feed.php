	<?php echo anchor('home', '<img style="height:65px;margin:3px;" src="' . base_url() . 'assets/images/logo.png" alt="SkyWatch Logo">'); ?>

	<div id="modalCover">
	</div>

	<div id="mobile"><p>Sorry, but your screen should be at least 1450px wide to view this prototype.</p></div>

	<div id="filterModal">
		<h1>Filter by:</h1>

		<div class="options">
			<h3>EVENTS</h3>
				<form>
					<input type="checkbox" name="event" value="Supernova">Supernovae<br>
					<input type="checkbox" name="event" value="Gamma-ray Bursts">Gamma-ray Bursts<br>
					<input type="checkbox" name="event" value="Gravitational Microlensing">Gravitational Microlensing<br>
					<input type="checkbox" name="event" value="Asteroids">Asteroids<br>
					<input type="checkbox" name="event" value="Other">Other<br>
				</form>
			<h3>SOURCE</h3>
				<form>
					<input type="checkbox" name="Source" value="Astronomers Telegram">Astronomers Telegram<br>
					<input type="checkbox" name="Source" value="Central Bureau for Astronomical Telegrams">Central Bureau for Astronomical Telegrams<br>
					<input type="checkbox" name="Source" value="NASA GCN">NASA GCN<br>
					<input type="checkbox" name="Source" value="GRB Coordinates Network">GRB Coordinates Network<br>
					<input type="checkbox" name="Source" value="Other">Other<br>
				</form>
			<h3>DATE</h3>
				<form action="demo_form.asp">
				  From: <input type="date" name="from">
				  To: <input type="date" name="to">
				</form>
		</div>

		<div class="modalButtons">
			<ul>
				<li id="filterCancel" class="cancel">Cancel</li><li id="filterOK" class="ok">Ok</li>
			</ul>
		</div>
	</div>

	<div id="subscribeModal">
		<h1>Subscribe with:</h1>

		<div class="options">
			<h3>METHODS</h3>
			<form>
				<input type="checkbox" name="event" value="Supernova">Email<br>
				<input type="checkbox" name="event" value="Gamma-ray Bursts">RSS<br>
				<input type="checkbox" name="event" value="Gravitational Microlensing">Tweets<br>
			</form>
		</div>

		<div class="modalButtons">
			<ul>
				<li id="subCancel" class="cancel">Cancel</li><li id="subOK" class="ok">Ok</li>
			</ul>
		</div>
	</div>

	<div class="container">

		<ul class="filter">
			<li id="filterButton">Filters</li><li id="subButton">Subscribe</li>
		</ul>

		<div class="displayCont">

			<div id="map-canvas"></div>

			<div class="subMenu">
				<ul>
					<li id="land">Land</li><li id="sky">Sky</li>
				</ul>
			</div>

		</div>

		<div class="feedCont">

			<?php

				$coords = array('43.7182713, -79.3777061', 
								'47.614848, -122.3358423', 
								'41.878113, -87.629798',
								'40.714352, -74.005973',
								'34.052234, -118.243684',
								'62.474876,-114.408995',
								'32.2324358,-110.9473494', 
								'34.137658,-118.125269',
								'29.817178,-95.4012915',
								'46.8580074,-71.3460728',
								'34.078611,-107.618316',
								'10.4683918,-66.8903658',
								'19.8199996,-155.47');
				$i = 0;

				foreach ($voevents as $key => $event) : ?>

					<div class="feedCard">
						<p class="actionLink viewButton">Sky View</p>
						<p class="actionLink schemaButton">Schema</p>
						<span style="display:none;" class="xmlLink"><?php echo $event['xml']; ?></span>
						<div class="imgCont">
							<?php echo '<img src="' . $event['picture'] . '" alt="Space Watch - ' . $event['title'] . '">'; ?>
						</div>
						<div class="cardHeader">
							<h2 class="title"><?php echo $event['title']; ?></h2>
							<p><?php echo $event['institute']; ?></p>
							<p><?php echo $event['author']; ?></p>
						</div>
						<div class="coordinates">
							<ul>
								<li><strong>RA</strong></li><li class="ra"><?php echo $event['RA']; ?></li><li><strong>Dec</strong></li><li class="dec"><?php echo $event['dec'] ?></li><li><strong>PosError</strong></li><li><?php echo $event['error']; ?></li>
							</ul>
						</div>
						<div class="description">
							<h4>Description</h4>
							<p><?php echo $event['desc']; ?></p>
						</div>
							<p class="ivo"><?php echo $key; ?></p>
							<p class="timestamp"><?php echo $event['date']; ?></p>

						<?php

						$spanCoords = explode(',', $coords[$i]);
						foreach ($spanCoords as $key => $row) {
							echo '<span style="display:none;" class="coord' . $key . '">' . $row . '</span>';
						}

						$i++;

						?>
					</div>

			<?php endforeach; ?>

		</div>
	
	</div>

	<div class="cloudCover">
		<p>Visibility Right Now</p>
		<div class="visibilityBarCont">
			<?php 

			echo '<p>' . $weather['visibility'] . '% Visibility</p>';

			if ($weather['visibility'] == 100) {
				echo '<div style="width:' . $weather['visibility'] . '%;" class="visibilityBar">'; 
			}

			else {
				echo '<div style="width:' . $weather['visibility'] . '%;" class="visibilityBar">'; 
			}

			?>
		</div>
	</div>

<script type="text/javascript">

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

</script>









