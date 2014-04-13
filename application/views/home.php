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

		?></div></div>
	</div>
	
	<div class="share">
	</div>
	
	<script>
		jQuery.urlShortener.settings.apiKey='AIzaSyB5G9uHkh_xMaazDUV2loBWUpnuROvEiHA';
	
		jQuery.urlShortener({
		    longUrl: window.location.href,
		    success: function (shortUrl) {
		        
		        var text = 'SkyWatch via @SproutrTO';
	
	    		$('.share').share({
	    			url: shortUrl,
	    			text: text,
	    			image: 'https://d72q7iu7osckw.cloudfront.net/images/sproutr.png',
	    			button_text: 'Share this Question',
	    			flyout: 'top center'
	    		});
	
		    },
		    error: function(err)
		    {
		        console.log(JSON.stringify(err));
		    }
		});
	<script>









