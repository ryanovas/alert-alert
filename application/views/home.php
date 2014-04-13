	<div class="share"></div>

	<div class="container">

		<ul class="filter">
			<li>Filters</li><li>Subscribe</li>
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

				$coords = array('43.7182713, -79.3777061, 
								 47.614848, -122.3358423, 
								 41.878113, -87.629798,
								 40.714352, -74.005973,
								 34.052234, -118.243684,
								 62.474876,-114.408995,
								 32.2324358,-110.9473494, 
								 34.137658,-118.125269,
								 29.817178,-95.4012915,
								 46.8580074,-71.3460728,
								 34.078611,-107.618316,
								 10.4683918,-66.8903658,
								 19.8199996,-155.47');
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
		<div class="visibilityBarCont"><?php 

			if ($weather['visibility'] == 100) {
				echo '<div style="width:' . $weather['visibility'] . '%;" class="visibilityBar"><p>Full Visibility</p>'; 
			}

			else {
				echo '<div style="width:' . $weather['visibility'] . '%;" class="visibilityBar"><p>' . $weather['visibility'] . '% Visibility</p>'; 
			}

		?></div>
	</div>
	
	<script>
		jQuery.urlShortener.settings.apiKey='AIzaSyB5G9uHkh_xMaazDUV2loBWUpnuROvEiHA';
	
		jQuery.urlShortener({
		    longUrl: window.location.href,
		    success: function (shortUrl) {
		        
		        var text = 'See #cosmic events in real time via @SkyWatch!';
	
	    		$('.share').share({
	    			url: shortUrl,
	    			text: text,
	    			image: 'https://d72q7iu7osckw.cloudfront.net/images/sproutr.png',
	    			button_text: 'Share',
	    			flyout: 'bottom left'
	    		});
	
		    },
		    error: function(err)
		    {
		        console.log(JSON.stringify(err));
		    }
		});
	</script>









