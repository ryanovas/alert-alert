<div id="bgGrad">

	<div id="wrapper">

		<div id="contentCont">
			<img src="../../assets/images/logo.png" alt="SkyWatch Logo">
		</div>

		<div id="whatIs">
			
			<h1>What is SkyWatch?</h1>

			<p>When transient phenomena are discovered by telescopes around the world, raw telemetric data about the event is shared over an international network of satellites and observatories. In real-time, this network collects, unpacks, and converts this data into standard formats that are then sent to other telescopes on the network. With this data, telescopes around the world can shift their focus and keep a constant watch on important events happening in the cosmos.</p>
			<p>We built SkyWatch to tap into these networks and present to the world the ability to follow the cosmos in real-time. We created a Twitter-like interface to stream the events from the cosmos right into the palm of your hands. We’ve also provided access to Google Maps to plot where on Earth these observations are coming from, and access to Google Sky to plot where in the cosmos these events are taking place.</p>
			<p>We have the goal of bringing SkyWatch to science centres, universities, and smartphones all around the world. For the first time in history, at the touch of a button, any child anywhere in the world could play witness to a supernova at the same time as an astrophysicist at NASA. We know that space is the next frontier and we hope that by providing everyone with access to the stars that they will one day aspire to reach for them.</p>
		</div>
			
		<div id="emails">
			<input type="text" name="email" placeholder="Your Email"><button>Get Updates</button>
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

	var whatIs = $('#whatIs');
	var opt1 = $('#menu li:first-of-type');

	texteditor(submit, textarea);

	$('.emailMe').click(function() {


		$('#openMessage').css('display','block');
		$('#overlay').css('display','block');
		openModal = true;

	});

	$('#emailSubmit').click(function() {

		$('#emailSubmit').css('opacity', '0');
		$('.loading').css('opacity', '1');

	});

</script>