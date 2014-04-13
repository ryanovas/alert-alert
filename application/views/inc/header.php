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
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<?php 
		if (isset($js)) {
			foreach ($js as $rule) {
				echo '<script src="' . base_url() . 'assets/js/' . $rule . '"></script>';
			}
		} 
	?>

</head>

<body>

	<nav class="navbar">
		<?php echo anchor('app/home', '<img src="' . base_url() . 'assets/images/logo.png" alt="SkyWatch">'); ?>
		<ul class="navbar-nav">
			<?php 

				if ($current === 'Feed') {
					echo '<li class="active">' . anchor('app/feed', 'Feed') . '</li>'; 
				}

				else {
					echo '<li>' . anchor('app/feed', 'Feed') . '</li>'; 
				}

			?>

			<?php 

				if ($current === 'About') {
					echo '<li class="active">' . anchor('app/about', 'About') . '</li>'; 
				}

				else {
					echo '<li>' . anchor('app/about', 'About') . '</li>'; 
				}

			?>

			<?php 

				if ($current === 'Contact') {
					echo '<li class="active">' . anchor('app/contact', 'Contact') . '</li>'; 
				}

				else {
					echo '<li>' . anchor('app/contact', 'Contact') . '</li>'; 
				}

			?>

		</ul>
	</nav>