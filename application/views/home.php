<?php   
header( 'Expires: Sat, 26 Jul 1997 05:00:00 GMT' );   
header( 'Last-Modified: ' . gmdate( 'D, d M Y H:i:s' ) . ' GMT' );   
header( 'Cache-Control: no-store, no-cache, must-revalidate' );   
header( 'Cache-Control: post-check=0, pre-check=0', false );   
header( 'Pragma: no-cache' );   
?> 

<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="content-language" content="en"; charset="UTF-8">
	<title>SkyWatch - the way our skies were meant to be discovered</title>
	<meta name="keywords" content="NEEDED">	
	<meta name="description" content="NEEDED">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="shortcut icon" type="image/x-icon" href=""> -->

	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
	
	<?php echo '<link href="' . base_url() . 'assets/css/bootstrap.css?v1.1" rel="stylesheet" type="text/css">'; ?>

	<?php echo '<script src="' . base_url() . 'assets/js/jquery-1.11.0.min.js"></script>'; ?>

</head>

<body>
	
	<nav class="navbar">
		<img src="assets/images/logo.png">
		<ul class="navbar-nav">
			<li class="active">Feed</li><li>About</li><li>Team</li><li>Contact</li>
		</ul>
	</nav>

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
								<li>RA: <?php echo substr($event['position'], 0, strpos($event['position'], ',')); ?></li><li>Dec: <?php echo substr($event['position'], strpos($event['position'], ',') + 1, strpos($event['position'], ' ')); ?></li><li>PosError: <?php echo substr($event['position'], strpos($event['position'], ' '), strlen($event['position'])); ?></li>
							</ul>
						</div>
						<div class="description">
							<p><?php echo $event['desc']; ?></p>
						</div>
							<p class="ivo"><?php echo $key; ?></p>
							<p class="timestamp"><?php echo $event['date']; ?></p>
					</div>

			<?php endforeach; ?>

		</div>
	
	</div>

</body>
</html>








