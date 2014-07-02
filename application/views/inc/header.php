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
	<?php echo '<link rel="shortcut icon" type="image/x-icon" href="' . base_url() . 'assets/images/favicon.ico">'; ?>

	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
	
	<?php echo '<link href="' . base_url() . 'assets/css/bootstrap.css?v1.1" rel="stylesheet" type="text/css">'; ?>

	<?php echo '<script src="' . base_url() . 'assets/js/jquery-1.11.0.min.js"></script>'; ?>
	<?php echo '<script src="' . base_url() . 'assets/js/share.min.js"></script>'; ?>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<?php 
		if (isset($js)) {
			foreach ($js as $rule) {
				echo '<script src="' . base_url() . 'assets/js/' . $rule . '"></script>';
			}
		} 
	?>

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-50966936-1', 'skywatch.co');
	  ga('send', 'pageview');

	</script>

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

		</ul>
	</nav>