<div id="bgGrad">

	<div id="wrapper" class="contentOpen">

		<div id="contentCont">
			<img src="../../assets/images/logo.png" alt="SkyWatch Logo" class="contentOpen">
		</div>

		<div id="whatIs">
			
			<h1>What is SkyWatch?</h1>

			<p>When transient phenomena are discovered by telescopes around the world, raw telemetric data about the event is shared over an international network of satellites and observatories. In real-time, this network collects, unpacks, and converts this data into standard formats that are then sent to other telescopes on the network. With this data, telescopes around the world can shift their focus and keep a constant watch on important events happening in the cosmos.</p>
			<p>We built SkyWatch to tap into these networks and present to the world the ability to follow the cosmos in real-time. We created a Twitter-like interface to stream the events from the cosmos right into the palm of your hands. We’ve also provided access to Google Maps to plot where on Earth these observations are coming from, and access to Google Sky to plot where in the cosmos these events are taking place.</p>
			<p>We have the goal of bringing SkyWatch to science centres, universities, and smartphones all around the world. For the first time in history, at the touch of a button, any child anywhere in the world could play witness to a supernova at the same time as an astrophysicist at NASA. We know that space is the next frontier and we hope that by providing everyone with access to the stars that they will one day aspire to reach for them.</p>
		</div>

		<div id="team">

			<div class="bioCont">
				<div class="bioHeader">
					<h1>Dexter Jagula</h1>
					<a href="dexterjagula@gmail.com" target="_blank"><span class="socialIcon">circleemail</span></a>
					<a href="https://twitter.com/djagula" target="_blank"><span class="socialIcon">circletwitterbird</span></a>
					<a href="https://www.linkedin.com/in/dexterjagula" target="_blank"><span class="socialIcon">circlelinkedin</span></a>
				</div>
				<div class="bio">
					<p>Dexter is an entrepreneur and IT consultant with over 5 years of experience in various roles and industries. He holds a Bachelor’s in Software Engineering from the University of Ottawa, and a Master’s in Space Studies from the International Space University.</p>
				</div>
			</div>

			<div id="imgWrapper">

				<!-- <div class="imgCont"> -->
					<img src="../../assets/images/dexter.jpg" alt="Dexter Jagula">
				<!-- </div> -->
				<!-- <div class="imgCont"> -->
					<img src="../../assets/images/ryan.jpg" alt="Ryan Ovas">
				<!-- </div> -->
				<!-- <div class="imgCont"> -->
					<img src="../../assets/images/roland.jpg" alt="Roland Sing">
				<!-- </div> -->
				<!-- <div class="imgCont"> -->
					<img src="../../assets/images/stefan.jpg" alt="Stefan Sing">
				<!-- </div> -->
				<!-- <div class="imgCont"> -->
					<img src="../../assets/images/james.jpg" alt="James Slifierz">
				<!-- </div> -->

			</div>

		</div>
			
		<div id="emails">
			<input type="text" name="email" placeholder="Your Email"><button>Sign Up for Private Beta</button>
		</div>

		<div id="menu">
			<ul><li>What is SkyWatch?</li><li>Media</li><li>Team</li><li class="active">Prototype</li></ul>
		</div>

		<div id="footer">
			<ul>
				<li>&copySkyWatch 2014</li>
				<li>
					<a href="mailto:team@skywatch.co" target="_blank"><span class="socialIcon">circleemail</span></a>
					<a href="https://twitter.com/SkyWatchApps" target="_blank"><span class="socialIcon">circletwitterbird</span></a>
					<a href="#" target="_blank"><span class="socialIcon">circleinstagram</span></a>
					<a href="#" target="_blank"><span class="socialIcon">circlegoogleplus</span></a>
				</li>
				<li><a href="mailto:team@skywatch.co">Contact Us</a></li>
			</ul>
		</div>

	</div>

</div>

<script type="text/javascript">
	
	var logo = $('#contentCont > img');
	var whatIs = $('#whatIs');
	var opt1 = $('#menu li:first-of-type');

	$(opt1).click(function() {

		$(whatIs).addClass('open');
		$('#wrapper').addClass('contentOpen');
		$(logo).addClass('contentOpen');

	});

</script>