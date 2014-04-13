	<div class="container">

		<ul>
			<li>Land</li><li>Sky</li><li>Schema</li>
		</ul>
		<ul class="filter">
			<li>Filters</li><li>Subscribe</li>
		</ul>

		<div class="displayCont">

			<iframe
			  width="100%"
			  height="100%"
			  frameborder="0" style="border:0"
			  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDuc2Lie8N0rCNGCqG2S2_rRPb5xiC_EcM
			    &q=Space+Needle,Seattle+WA">
			</iframe>

		</div>

		<div class="feedCont">

			<?php

				foreach ($voevents as $key => $event) : ?>

					<div class="feedCard">
						<div class="imgCont">
							<?php echo '<img src="' . $event['picture'] . '" alt="Space Watch - ' . $event['title'] . '">'; ?>
						</div>
						<div class="cardHeader">
							<h2><?php echo $event['title']; ?></h2>
							<p><?php echo $event['institute']; ?></p>
							<p><?php echo $event['author']; ?></p>
						</div>
						<div class="coordinates">
							<ul>
								<li><strong>RA</strong></li><li><?php echo $event['RA']; ?></li><li><strong>Dec</strong></li><li><?php echo $event['dec'] ?></li><li><strong>PosError</strong></li><li><?php echo $event['error']; ?></li>
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








