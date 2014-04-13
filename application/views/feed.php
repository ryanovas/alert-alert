
	<div id="modalCover">
	</div>

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
				<li class="cancel">Cancel</li><li class="ok">Ok</li>
			</ul>
		</div>
	</div>

	<div class="container">

		<ul class="filter">
			<li id="filterButton">Filters</li><li>Subscribe</li>
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

			echo '<p>' . $weather['visibility'] . '% Visibility</p>';

			if ($weather['visibility'] == 100) {
				echo '<div style="width:' . $weather['visibility'] . '%;" class="visibilityBar">'; 
			}

			else {
				echo '<div style="width:' . $weather['visibility'] . '%;" class="visibilityBar">'; 
			}

		?></div></div>
	</div>

<script type="text/javascript">

$(document).ready(function () {

    $('#filterButton').click(function() {

        $('#filterModal').css({
        	opacity: '1',
        	zIndex: '9999',
        	pointerEvents: 'auto'
        });
        $('#modalCover').css('display', 'block');

    });

    $('.cancel').click(function() {

    	$('#filterModal').css({
        	opacity: '0',
        	zIndex: '-9999',
        	pointerEvents: 'none'
        });
        $('#modalCover').css('display', 'none');

    });

    $('.ok').click(function() {

    	$('#filterModal').css({
        	opacity: '0',
        	zIndex: '-9999',
        	pointerEvents: 'none'
        });
        $('#modalCover').css('display', 'none');

    });    

});

</script>









