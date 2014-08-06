<div id="bgGrad">
	
	<div id="title" class="slide">
		
		<div class="starContainer">
			<?php 

			for ($i = 0; $i <= 16; $i++) { 
				echo '<div class="starTop"></div>';
			} 

			?>
		</div>
		<div>
			<?php 

			for ($i = 0; $i <= 16; $i++) { 
				echo '<div class="starRight"></div>';
			} 

			?>
		</div>
		<div>
			<?php 

			for ($i = 0; $i <= 16; $i++) { 
				echo '<div class="starBottom"></div>';
			} 

			?>
		</div>
		<div>
			<?php 

			for ($i = 0; $i <= 16; $i++) { 
				echo '<div class="starLeft"></div>';
			} 

			?>	
		</div>

		<?php echo '<img src="' . base_url() . 'assets/images/pitch/logo.png" alt="SkyWatch">'; ?>

	</div>

	<div id="prologue" class="slide">
		
		<div class="container">
			<div class="row">

				<div class="col12 logoTitle">
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/starman.png" alt="SkyWatch">'; ?>
					<h1>Prologue</h1>
				</div>

			</div>

			<div class="row">
				<div class="col12 header prologueHeader1">
					<div>NASA Space Apps 2014</div>
				</div>
			</div>

			<div class="row">
				
				<div class="col3">
					<?php echo anchor('https://2014.spaceappschallenge.org/', '<img class="prologueLooper1 hide link" src="' . base_url() . 'assets/images/pitch/NASA.png" alt="NASA">', 'target="_blank"'); ?>
				</div>

				<div class="col3 nasaStats prologueLooper1 hide">
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/green_guy.png" alt="NASA">'; ?>
					<div class="inlineCont nasa">
						<h2 id="participants">8196</h2>
						<p><span class="allCaps">Participants</span></p>
					</div>
				</div>

				<div class="col3 nasaStats prologueLooper1 hide">
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/pin.png" alt="NASA">'; ?>
					<div class="inlineCont nasa">
						<h2 id="locations">95</h2>
						<p><span class="allCaps">Locations</span></p>
					</div>
				</div>

				<div class="col3 nasaStats prologueLooper1 hide">
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/bulb.png" alt="NASA">'; ?>
					<div class="inlineCont nasa">
						<h2 id="projects">671</h2>
						<p><span class="allCaps">Projects</span></p>
					</div>
				</div>

			</div>

			<div class="row">
				<div class="col12 header prologueHeader2">
					<div>SkyWatch Wins "Best Use of Data 2014"</div>
				</div>
			</div>

			<div class="row">

				<div class="col3">
					<?php echo '<img class="hide prologueLooper2" style="width: 100%;" src="' . base_url() . 'assets/images/pitch/skywatch_team.png" alt="NASA">'; ?>
				</div>

				<div class="col8">
					
					<div class="row">

						<div class="col6 hide prologueLooper2">
							<?php echo '<img src="' . base_url() . 'assets/images/pitch/news1.png" alt="NASA">'; ?>
						</div>

						<div class="col6 hide prologueLooper2">
							<?php echo '<img src="' . base_url() . 'assets/images/pitch/news2.png" alt="NASA">'; ?>
						</div>

					</div>

					<div class="row">

						<div class="col6 hide prologueLooper2">
							<?php echo '<img src="' . base_url() . 'assets/images/pitch/news3.png" alt="NASA">'; ?>
						</div>

						<div class="col6 hide prologueLooper2">
							<?php echo '<img src="' . base_url() . 'assets/images/pitch/news4.png" alt="NASA">'; ?>
						</div>

					</div>

					<div class="row">

						<div class="col6 hide prologueLooper2">
							<?php echo '<img src="' . base_url() . 'assets/images/pitch/news5.png" alt="NASA">'; ?>
						</div>

						<div class="col6 hide prologueLooper2">
							<?php echo '<img src="' . base_url() . 'assets/images/pitch/news6.png" alt="NASA">'; ?>
						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

	<div id="problem" class="slide">
		
		<div class="container">
			<div class="row">

				<div class="col12 logoTitle">
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/starman.png" alt="SkyWatch">'; ?>
					<h1>Problem</h1>
				</div>

				<div style="top: 15px; margin: 0; padding: 0;" class="row">

					<div class="col12 hide problemStatement">
						<p>“There is no go-to source for following and learning about events as they unfold in the universe”</p>
					</div>

				</div>

				<div class="row">
					
					<div class="col6 header problemHeader1">
						<div>Space Telescopes</div>
					</div>

					<div class="col6 header problemHeader2">
						<div>Ground-Based Telescopes</div>
					</div>

				</div>

				<div class="row">
					
					<div class="col6 hide spaceTelescopes">
						<div class="row">
							<div class="col4">
								<?php echo '<img class="earth" src="' . base_url() . 'assets/images/pitch/sky.png" alt="SkyWatch">'; ?>
							</div>

							<div class="dataText" class="col6">
								<h1>12</h1>
								<p>Space Telescopes</p>
							</div>
						</div>
					</div>

					<div class="col6 hide leftBorder groundTelescopes">
						<div class="row">
							<div class="col4">
								<?php echo '<img class="ground" src="' . base_url() . 'assets/images/pitch/ground.png" alt="SkyWatch">'; ?>
							</div>

							<div class="dataText" class="col6">
								<h1>175</h1>
								<p>Ground-based Telescopes</p>
							</div>
						</div>
					</div>

				</div>

				<div class="row">
					<div class="col12 header problemHeader3">
						<div>Where Does All This Data Go?</div>
					</div>
				</div>

				<div class="row">

					<div class="col4 galaxies">
						<?php echo '<img class="hide galaxies" src="' . base_url() . 'assets/images/pitch/galaxy.png" alt="SkyWatch">'; ?>
						<?php echo '<img class="hide galaxies" src="' . base_url() . 'assets/images/pitch/galaxy.png" alt="SkyWatch">'; ?>
						<?php echo '<img class="hide galaxies" src="' . base_url() . 'assets/images/pitch/galaxy.png" alt="SkyWatch">'; ?>
						<?php echo '<img class="hide galaxies" src="' . base_url() . 'assets/images/pitch/galaxy.png" alt="SkyWatch">'; ?>
						<?php echo '<img class="hide galaxies" src="' . base_url() . 'assets/images/pitch/galaxy.png" alt="SkyWatch">'; ?>
						<?php echo '<img class="hide galaxies" src="' . base_url() . 'assets/images/pitch/galaxy.png" alt="SkyWatch">'; ?>
						<?php echo '<img class="hide galaxies" src="' . base_url() . 'assets/images/pitch/galaxy.png" alt="SkyWatch">'; ?>
						<?php echo '<img class="hide galaxies" src="' . base_url() . 'assets/images/pitch/galaxy.png" alt="SkyWatch">'; ?>
						<?php echo '<img class="hide galaxies" src="' . base_url() . 'assets/images/pitch/galaxy.png" alt="SkyWatch">'; ?>
					</div>

					<div class="col4 center hide whereStored events">
						<h1>15</h1>
						<p>different systems store celestial events detected everyday</p>
						<?php echo '<img class="arrow" src="' . base_url() . 'assets/images/pitch/arrow.png" alt="SkyWatch">'; ?>
					</div>

					<div class="col3 right hide whereStored">
						<?php echo '<img src="' . base_url() . 'assets/images/pitch/NASA_servers.png" alt="SkyWatch">'; ?>
						<?php echo '<img src="' . base_url() . 'assets/images/pitch/sloan_servers.png" alt="SkyWatch">'; ?>
						<?php echo '<img src="' . base_url() . 'assets/images/pitch/MAST_servers.png" alt="SkyWatch">'; ?>
					</div>

				</div>

			</div>
		</div>

	</div>

	<div id="problem2" class="slide">
		
		<div class="container astronomers">

			<div class="row">

				<div class="col3 problem2Parts hide">
					<?php echo '<img class="guy" src="' . base_url() . 'assets/images/pitch/astronomer.png" alt="SkyWatch">'; ?>
				</div>

				<div class="col6 problem2Parts hide center">
					<p>In order to connect to and make use of this data, <b>one must have a strong knowledge of technology AND astronomy.</b></p>
					<p class="margin">The only way the general public can learn about these events is for <b>an astronomer to send out a press release.</b></p>
				</div>

				<div class="col3 problem2Parts hide right">
					<?php echo '<img class="news" src="' . base_url() . 'assets/images/pitch/news.png" alt="SkyWatch">'; ?>
				</div>

			</div>

		</div>

	</div>

	<div id="problem3" class="slide">
		
		<div class="questions">

			<div class="people">
				<div class="questionPerson">
					<?php echo '<img class="person" src="' . base_url() . 'assets/images/pitch/question.png" alt="SkyWatch">'; ?>
					<?php echo '<img class="person" src="' . base_url() . 'assets/images/pitch/question_guy.png" alt="SkyWatch">'; ?>
				</div>
				<div class="questionPerson boost">
					<?php echo '<img class="person" src="' . base_url() . 'assets/images/pitch/question.png" alt="SkyWatch">'; ?>
					<?php echo '<img class="person" src="' . base_url() . 'assets/images/pitch/question_guy.png" alt="SkyWatch">'; ?>
				</div>
				<div class="questionPerson">
					<?php echo '<img class="person" src="' . base_url() . 'assets/images/pitch/question.png" alt="SkyWatch">'; ?>
					<?php echo '<img class="person" src="' . base_url() . 'assets/images/pitch/question_guy.png" alt="SkyWatch">'; ?>
				</div>
				<br>
				<div class="questionPerson">
					<?php echo '<img class="person" src="' . base_url() . 'assets/images/pitch/question.png" alt="SkyWatch">'; ?>
					<?php echo '<img class="person" src="' . base_url() . 'assets/images/pitch/question_guy.png" alt="SkyWatch">'; ?>
				</div>
				<div class="questionPerson boost">
					<?php echo '<img class="person" src="' . base_url() . 'assets/images/pitch/question.png" alt="SkyWatch">'; ?>
					<?php echo '<img class="person" src="' . base_url() . 'assets/images/pitch/question_guy.png" alt="SkyWatch">'; ?>
				</div>
				<div class="questionPerson">
					<?php echo '<img class="person" src="' . base_url() . 'assets/images/pitch/question.png" alt="SkyWatch">'; ?>
					<?php echo '<img class="person" src="' . base_url() . 'assets/images/pitch/question_guy.png" alt="SkyWatch">'; ?>
				</div>
			</div>

			<div class="questionText">

				<h1>This data isn't available<br> to the general public</h1>

			</div>

		</div>

	</div>

	<div id="solution" class="slide">
		
		<div class="container">
			<div class="row">

				<div class="col12 logoTitle">
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/starman.png" alt="SkyWatch">'; ?>
					<h1>Solution</h1>
				</div>

			</div>

			<div class="row">
				<div class="col12 header">
					<div>Introducing SkyWatch</div>
				</div>
			</div>

			<div class="row">

				<div class="col5 right">
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/skywatch.png" alt="SkyWatch">'; ?>
				</div>

				<div class="col1 center">
					<?php echo '<img class="wave" src="' . base_url() . 'assets/images/pitch/wave.png" alt="SkyWatch">'; ?>
				</div>

				<div class="col4 people">
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/solution_guy.png" alt="SkyWatch">'; ?>
					<?php echo '<img class="boost" src="' . base_url() . 'assets/images/pitch/solution_guy.png" alt="SkyWatch">'; ?>
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/solution_guy.png" alt="SkyWatch">'; ?>
					<?php echo '<img class="boost" src="' . base_url() . 'assets/images/pitch/solution_guy.png" alt="SkyWatch">'; ?>
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/solution_guy.png" alt="SkyWatch">'; ?>
					<?php echo '<img class="boost" src="' . base_url() . 'assets/images/pitch/solution_guy.png" alt="SkyWatch">'; ?>
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/solution_guy.png" alt="SkyWatch">'; ?>
					<?php echo '<img class="boost" src="' . base_url() . 'assets/images/pitch/solution_guy.png" alt="SkyWatch">'; ?>
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/solution_guy.png" alt="SkyWatch">'; ?>
					<?php echo '<img class="boost" src="' . base_url() . 'assets/images/pitch/solution_guy.png" alt="SkyWatch">'; ?>
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/solution_guy.png" alt="SkyWatch">'; ?>
					<?php echo '<img class="boost" src="' . base_url() . 'assets/images/pitch/solution_guy.png" alt="SkyWatch">'; ?>
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/solution_guy.png" alt="SkyWatch">'; ?>
					<?php echo '<img class="boost" src="' . base_url() . 'assets/images/pitch/solution_guy.png" alt="SkyWatch">'; ?>
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/solution_guy.png" alt="SkyWatch">'; ?>
					<?php echo '<img class="boost" src="' . base_url() . 'assets/images/pitch/solution_guy.png" alt="SkyWatch">'; ?>
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/solution_guy.png" alt="SkyWatch">'; ?>
					<?php echo '<img class="boost" src="' . base_url() . 'assets/images/pitch/solution_guy.png" alt="SkyWatch">'; ?>
				</div>

			</div>

			<div class="center clear solutionText">
				
				<p>SkyWatch will constantly be <b>connected to all networks and provide near real-time updates</b> to it’s users in a unparalled user experience.</p>
				<p>Users will be able to browse a <b>3D model of the universe and learn about everything they discover</b> in detail based on their personal knowledge of space</p>

			</div>
		</div>

	</div>

	<div id="product" class="slide">
		
		<div class="container">
			<div class="row">

				<div class="col12 logoTitle">
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/starman.png" alt="SkyWatch">'; ?>
					<h1>Product Detail</h1>
				</div>

			</div>

			<div class="row">
				<div class="col12 header">
					<div>SkyWatch Discovery Model</div>
				</div>
			</div>

			<div class="row">

				<div class="col6">
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/earthLookingOut.png" alt="SkyWatch">'; ?>
					<?php echo '<img class="laser1" src="' . base_url() . 'assets/images/pitch/laser.png" alt="SkyWatch">'; ?>
					<?php echo '<img class="laser2" src="' . base_url() . 'assets/images/pitch/laser2.png" alt="SkyWatch">'; ?>
					<?php echo '<img class="laser3" src="' . base_url() . 'assets/images/pitch/laser3.png" alt="SkyWatch">'; ?>
					<?php echo '<img class="wave" src="' . base_url() . 'assets/images/pitch/wave.png" alt="SkyWatch">'; ?>
					<p class="margin">SkyWatch will connect to 8 networks that release real-time or frequent data. Whenever new data is pushed across a network, SkyWatch will pick it up and plot it in the 3D Universe.</p>
				</div>

				<div class="col2 pushDown">
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/NASA_servers.png" alt="SkyWatch">'; ?>
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/sloan_servers.png" alt="SkyWatch">'; ?>
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/MAST_servers.png" alt="SkyWatch">'; ?>
				</div>

				<div class="col4 pushDown">
					<?php echo '<img class="wave3" src="' . base_url() . 'assets/images/pitch/wave3.png" alt="SkyWatch">'; ?>
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/skywatch2.png" alt="SkyWatch">'; ?>
					<?php echo '<img class="waveDown" src="' . base_url() . 'assets/images/pitch/waveDown.png" alt="SkyWatch">'; ?>
					<?php echo '<img class="productPeople" src="' . base_url() . 'assets/images/pitch/product_people.png" alt="SkyWatch">'; ?>
				</div>

			</div>
		</div>

	</div>

	<div id="product2" class="slide">
		
		<div class="container">
			<div class="row">
				<div class="col12 header">
					<div>Backend Data Flow</div>
				</div>
			</div>

			<div class="row">

				<div class="col12">
					<div id="dataFlow" class="timeline" style="height: 600px;">
						
						<div class="backbone"></div>

						<div class="entry rightside">
							
							<div class="point"></div>	
							<div class="cont">
								<span class="headerText">Telescopes and Observatories</span>
								<span class="text">As transient objects are discovered in the universe, they are sent or stored in a publically accessible server.</span>
							</div>						

						</div>

						<div class="entry leftside">
							
							<div class="cont">
								<span class="headerText">Data Processing Server</span>
								<span class="text">A cloud server will ve constantly running Java programs to connect to the public networks looking for new data.</span>
							</div>	
							<div class="point"></div>						

						</div>

						<div class="entry rightside">
							
							<div class="point"></div>	
							<div class="cont">
								<span class="headerText">MongoDB and Hadoop</span>
								<span class="text">When new data is found , noise and duplicated will be filtered out. The fresh data will then be stored in a Hadoop cluster for big data processing and MongoDB for unstant use.</span>
							</div>						

						</div>

						<div class="entry leftside">
							
							<div class="cont">
								<span class="headerText">REST API</span>
								<span class="text">A REST API running Python will serve all data and perform all logic for client side use. Using sockets, real-time notifications will be sent to clients with new transient event data.</span>
							</div>	
							<div class="point"></div>						

						</div>

						<div class="entry rightside">
							
							<div class="point"></div>	
							<div class="cont">
								<span class="headerText">Front End Client</span>
								<span class="text">This could be a website, mobile app, VR client, or anything you could imagine. Since all logic is performed on the API, connecting a front-end client will only require 3D modelling.</span>
							</div>						

						</div>

					</div>
				</div>

				<script>

					timeline('#dataFlow');

				</script>

			</div>
		</div>

	</div>

	<div id="market" class="slide">
		
		<div class="container">
			<div class="row">

				<div class="col12 logoTitle">
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/starman.png" alt="SkyWatch">'; ?>
					<h1>Market Opportunities</h1>
				</div>

			</div>

			<div class="row">
				<div class="col12 header">
					<div>Three Profitable Markets</div>
				</div>
			</div>

			<div class="row">

				<div class="col4 center">
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/education.png" alt="SkyWatch">'; ?>
					<h3>Education</h3>
					<?php echo '<img class="need" src="' . base_url() . 'assets/images/pitch/need.png" alt="SkyWatch">'; ?>
				</div>

				<div class="col4 center">
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/OSC.png" alt="SkyWatch">'; ?>
					<h3>Science Centres</h3>
				</div>

				<div class="col4 center">
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/telescope.png" alt="SkyWatch">'; ?>
					<h3>Astronomers</h3>
				</div>

			</div>
		</div>

	</div>

	<div id="market2" class="slide">
		
		<div class="container">

			<div class="row">
				<div class="col12 header">
					<div>Building on the Core Product</div>
				</div>
			</div>

			<div class="row">

				<div class="col6 right">
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/market_skywatch.png" alt="SkyWatch">'; ?>
				</div>

				<div class="col6">
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/market_edu.png" alt="SkyWatch">'; ?>
				</div>

			</div>
		</div>

	</div>

	<div id="market3" class="slide">

		<div class="container">

			<div class="row">
				
				<div class="col6 header">
					<div>Importance of Space Ed</div>
				</div>

				<div class="col6 header">
					<div>Teacher Strength in Space Ed</div>
				</div>

			</div>

			<div class="row">
				
				<div class="col6">

					<div class="row">
						
						<div class="col12">
							<?php echo '<img src="' . base_url() . 'assets/images/pitch/man_filled.png" alt="SkyWatch">'; ?>
							<?php echo '<img src="' . base_url() . 'assets/images/pitch/man_filled.png" alt="SkyWatch">'; ?>
							<?php echo '<img src="' . base_url() . 'assets/images/pitch/man_filled.png" alt="SkyWatch">'; ?>
							<?php echo '<img src="' . base_url() . 'assets/images/pitch/man_filled.png" alt="SkyWatch">'; ?>
							<?php echo '<img src="' . base_url() . 'assets/images/pitch/man_filled.png" alt="SkyWatch">'; ?>
							<?php echo '<img src="' . base_url() . 'assets/images/pitch/man_filled.png" alt="SkyWatch">'; ?>
							<?php echo '<img src="' . base_url() . 'assets/images/pitch/man_filled.png" alt="SkyWatch">'; ?>
							<?php echo '<img src="' . base_url() . 'assets/images/pitch/man_filled.png" alt="SkyWatch">'; ?>
							<?php echo '<img src="' . base_url() . 'assets/images/pitch/man_empty.png" alt="SkyWatch">'; ?>
							<?php echo '<img src="' . base_url() . 'assets/images/pitch/man_empty.png" alt="SkyWatch">'; ?>
						</div>

					</div>

					<div class="row">

						<div class="col3">
							<h1>80%</h1>
						</div>

						<div class="col9">
							<p class="margin">of teachers interviewed <b>find space education important</b></p>
						</div>

					</div>

				</div>

				<div class="col6 leftBorder">

					<div class="row">
						
						<div class="col12">
							<?php echo '<img src="' . base_url() . 'assets/images/pitch/man_filled.png" alt="SkyWatch">'; ?>
							<?php echo '<img src="' . base_url() . 'assets/images/pitch/man_filled.png" alt="SkyWatch">'; ?>
							<?php echo '<img src="' . base_url() . 'assets/images/pitch/man_filled.png" alt="SkyWatch">'; ?>
							<?php echo '<img src="' . base_url() . 'assets/images/pitch/man_empty.png" alt="SkyWatch">'; ?>
							<?php echo '<img src="' . base_url() . 'assets/images/pitch/man_empty.png" alt="SkyWatch">'; ?>
							<?php echo '<img src="' . base_url() . 'assets/images/pitch/man_empty.png" alt="SkyWatch">'; ?>
							<?php echo '<img src="' . base_url() . 'assets/images/pitch/man_empty.png" alt="SkyWatch">'; ?>
							<?php echo '<img src="' . base_url() . 'assets/images/pitch/man_empty.png" alt="SkyWatch">'; ?>
							<?php echo '<img src="' . base_url() . 'assets/images/pitch/man_empty.png" alt="SkyWatch">'; ?>
							<?php echo '<img src="' . base_url() . 'assets/images/pitch/man_empty.png" alt="SkyWatch">'; ?>
						</div>

					</div>

					<div class="row">

						<div class="col3">
							<h1>30%</h1>
						</div>

						<div class="col9">
							<p class="margin">of teachers interviewed <b>feel comfortable teaching space</b></p>
						</div>

					</div>

				</div>

			</div>

			<div class="row">
				<div class="col12 header">
					<div>Technology in Schools</div>
				</div>
			</div>

			<div class="row">

				<div class="col12">

					<div id="techInSchools" style="height: 300px;"></div>
					<script>

						new Morris.Line({
						  // ID of the element in which to draw the chart.
						  element: 'techInSchools',
						  // Chart data records -- each entry in this array corresponds to a point on
						  // the chart.
						  data: [
						    { year: '2010', chromebooks: 5000, ipads: 10000, wifi: 50000 },
						    { year: '2011', chromebooks: 50000, ipads: 100000, wifi: 120000 },
						    { year: '2012', chromebooks: 180000, ipads: 400000, wifi: 200000 },
						    { year: '2013', chromebooks: 600000, ipads: 400000, wifi: 600000 },
						    { year: '2014', chromebooks: 1000000, ipads: 350000, wifi: 800000 }
						  ],
						  // The name of the data record attribute that contains x-values.
						  xkey: 'year',
						  // A list of names of data record attributes that contain y-values.
						  ykeys: ['chromebooks', 'ipads', 'wifi'],
						  // Labels for the ykeys -- will be displayed when you hover over the
						  // chart.
						  labels: ['Students using Chromebooks', 'Students using iPads', 'Schools with WiFi'],
						  resize: true,
						  lineColors: ['#5befbb', '#48a5e1', '#ef69ae'],
						});

					</script>

				</div>

			</div>

		</div>

	</div>

	<div id="market4" class="slide">

		<div class="container">

			<div class="row">
				<div class="col12 header">
					<div>Current Software Solutions</div>
				</div>
			</div>

			<div class="row">

				<div class="col3 center">
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/starry_night.png" alt="SkyWatch">'; ?>
					<h3>Starry Night</h3>
				</div>

				<div class="col3 center">
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/khan_academy.png" alt="SkyWatch">'; ?>
					<h3>Khan Academy</h3>
				</div>

				<div class="col3 center">
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/stellarium.png" alt="SkyWatch">'; ?>
					<h3>Stellarium</h3>
				</div>

				<div class="col3 center">
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/csa.png" alt="SkyWatch">'; ?>
					<h3>CSA</h3>
				</div>

			</div>

			<div class="row">
				<div class="col12 header">
					<div>Market Numbers</div>
				</div>
			</div>

			<div class="row">

				<div class="col4">

					<div id="marketNumbers1" style="height: 300px;"></div>
					<script>

						new Morris.Donut({
						  // ID of the element in which to draw the chart.
						  element: 'marketNumbers1',
						  // Chart data records -- each entry in this array corresponds to a point on
						  // the chart.
						  data: [
						    { label: 'Gr.9 Students in Public School', value: 4700000 },
						    { label: 'Gr.9 Students in Private School', value: 450000 },
						    { label: 'Gr.9 Students Homeschooled', value: 150000 },
						  ],
						  colors: ['#7fac9d', '#ee779e', '#91daef'],
						  labelColor: '#fff',
						  resize: true,
						});

					</script>

				</div>

				<div class="col4">

					<div id="marketNumbers2" style="height: 300px;"></div>
					<script>

						new Morris.Donut({
						  // ID of the element in which to draw the chart.
						  element: 'marketNumbers2',
						  // Chart data records -- each entry in this array corresponds to a point on
						  // the chart.
						  data: [
						    { label: 'Gr.9 Students in Public School', value: 4700000 },
						    { label: 'Gr.9 Students in Private School', value: 450000 },
						    { label: 'Gr.9 Students Homeschooled', value: 150000 },
						  ],
						  colors: ['#7fac9d', '#ee779e', '#91daef'],
						  labelColor: '#fff',
						  resize: true,
						});

					</script>

				</div>

				<div class="col4">

					<div id="marketNumbers3" style="height: 300px;"></div>
					<script>

						new Morris.Donut({
						  // ID of the element in which to draw the chart.
						  element: 'marketNumbers3',
						  // Chart data records -- each entry in this array corresponds to a point on
						  // the chart.
						  data: [
						    { label: 'Gr.9 Students in Public School', value: 4700000 },
						    { label: 'Gr.9 Students in Private School', value: 450000 },
						    { label: 'Gr.9 Students Homeschooled', value: 150000 },
						  ],
						  colors: ['#7fac9d', '#ee779e', '#91daef'],
						  labelColor: '#fff',
						  resize: true,
						});

					</script>

				</div>

			</div>

		</div>

	</div>

	<div id="revenue" class="slide">
		
		<div class="container">
			<div class="row">

				<div class="col12 logoTitle">
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/starman.png" alt="SkyWatch">'; ?>
					<h1>Revenue Model</h1>
				</div>

			</div>

			<div class="row">
				<div class="col12 header">
					<div>Competitive Analysis</div>
				</div>
			</div>

			<div class="row">

				<div class="col2 center revImg">
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/starry_night.png" alt="SkyWatch">'; ?>
					<h3>Starry Night</h3>
				</div>
				
				<div class="col2 center revImg">
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/market_skywatch.png" alt="SkyWatch">'; ?>
					<h3>Skywatch</h3>
				</div>

			</div>

			<div class="row comparison">

				<div class="col2 center">
					<h1>$350</h1>
				</div>

				<div class="col2 center">
					<h1>0</h1>
				</div>

				<div class="col8">
					<p>Cost per <b>teacher</b></p>
				</div>

			</div>

			<div class="row comparison">

				<div class="col2 center">
					<h1>$30</h1>
				</div>

				<div class="col2 center">
					<h1>$5</h1>
				</div>

				<div class="col8">
					<p>Cost per <b>student</b></p>
				</div>

			</div>

			<div class="row comparison">

				<div class="col2 center">
					<h1 id="starryNightsCount">$1250</h1>
				</div>

				<div class="col2 center">
					<h1 id="skywatchCount">$150</h1>
				</div>

				<div class="col8">
					<p><b>Total for <input id="classes" type="text" value="1"> Classes</b><br>(30 students each)</p>
				</div>

			</div>

		</div>

	</div>

	<div id="revenue2" class="slide">
		
		<div class="container">

			<div class="row">
				<div class="col12 header">
					<div>Revenue Streams</div>
				</div>
			</div>

			<div class="row">

				<div class="col12">

					<div id="revenueChart" style="height: 500px;"></div>
					<script>

						new Morris.Area({
						  // ID of the element in which to draw the chart.
						  element: 'revenueChart',
						  // Chart data records -- each entry in this array corresponds to a point on
						  // the chart.
						  data: [
						    { year: '2014 Q3', highschool: 0, elemschool: 0, scicenters: 0, astronomers: 0 },
						    { year: '2014 Q4', highschool: 0, elemschool: 0, scicenters: 0, astronomers: 0 },
						    { year: '2015 Q1', highschool: 0, elemschool: 0, scicenters: 0, astronomers: 0 },
						    { year: '2015 Q2', highschool: 0, elemschool: 0, scicenters: 0, astronomers: 0 },
						    { year: '2015 Q3', highschool: 43312.50, elemschool: 0, scicenters: 0, astronomers: 0 },
						    { year: '2015 Q4', highschool: 82605.19, elemschool: 0, scicenters: 0, astronomers: 0 },
						    { year: '2016 Q1', highschool: 109947.74, elemschool: 68268.75, scicenters: 0, astronomers: 0 },
						    { year: '2016 Q2', highschool: 146340.13, elemschool: 90865.71, scicenters: 0, astronomers: 0 },
						    { year: '2016 Q3', highschool: 190920.80, elemschool: 120942.26, scicenters: 0, astronomers: 50000 },
						    { year: '2016 Q4', highschool: 218804.13, elemschool: 160974.14, scicenters: 0, astronomers: 80000 },
						    { year: '2017 Q1', highschool: 246408.98, elemschool: 200173.27, scicenters: 100000, astronomers: 110000 },
						    { year: '2017 Q2', highschool: 277496.54, elemschool: 219053.44, scicenters: 250000, astronomers: 140000 },
						  ],
						  // The name of the data record attribute that contains x-values.
						  xkey: 'year',
						  // A list of names of data record attributes that contain y-values.
						  ykeys: ['highschool', 'elemschool', 'scicenters', 'astronomers'],
						  // Labels for the ykeys -- will be displayed when you hover over the
						  // chart.
						  labels: ['High Schools', 'Elementary Schools', 'Science Centres', 'Astronomers'],
						  resize: true,
						  lineColors: ['#5befbb', '#48a5e1', '#ef69ae', '#fc6c5e'],
						  fillOpacity: 0.3
						});

					</script>

				</div>

			</div>
		</div>

	</div>

	<div id="cost" class="slide">
		
		<div class="container">
			<div class="row">

				<div class="col12 logoTitle">
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/starman.png" alt="SkyWatch">'; ?>
					<h1>Cost Structure</h1>
				</div>

			</div>

			<div class="row">
				<div class="col12 header">
					<div>First Fiscal Year</div>
				</div>
			</div>

			<div class="row">

				<div class="col12">
					
					<div id="costStructure" style="height: 500px;"></div>
					<script>

						new Morris.Donut({
						  // ID of the element in which to draw the chart.
						  element: 'costStructure',
						  // Chart data records -- each entry in this array corresponds to a point on
						  // the chart.
						  data: [
						    { label: 'Labour', value: 220000 },						    
						    { label: 'Office', value: 18000 },	
						    { label: 'Cost of Goods Sold', value: 3568 },					    
						    { label: 'Legal', value: 16000 },
						    { label: 'Marketing', value: 5000 },
						  ],
						  colors: ['#01c6fe', '#5befbb', '#34424e', '#f5ebb6', '#fc6c5e'],
						  labelColor: '#fff',
						  resize: true,
						});

					</script>

				</div>

			</div>
		</div>

	</div>

	<div id="risk" class="slide">
		
		<div class="container">
			<div class="row">

				<div class="col12 logoTitle">
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/starman.png" alt="SkyWatch">'; ?>
					<h1>Risk Analysis</h1>
				</div>

			</div>

			<div class="row risksRow">

				<div class="col4">
					<h3>Technical Risk</h3>
					<p><b>Lorem ipsum</b> dolor sit amet, consectetur adipiscing elit. Nam porttitor tempus ante.</p>
					<p><b>vel vulputate</b> neque ultricies non. Vestibulum congue tincidunt tempus. Phasellus elementum imperdiet mi vitae condimentum.</p>
				</div>
				<div class="col4">
					<h3>Market Risk</h3>
					<p><b>Lorem ipsum</b> dolor sit amet, consectetur adipiscing elit. Nam porttitor tempus ante.</p>
					<p><b>vel vulputate</b> neque ultricies non. Vestibulum congue tincidunt tempus. Phasellus elementum imperdiet mi vitae condimentum.</p>
				</div>
				<div class="col4">
					<h3>Customer Risk</h3>
					<p><b>Lorem ipsum</b> dolor sit amet, consectetur adipiscing elit. Nam porttitor tempus ante.</p>
					<p><b>vel vulputate</b> neque ultricies non. Vestibulum congue tincidunt tempus. Phasellus elementum imperdiet mi vitae condimentum.</p>
				</div>

			</div>
		</div>

	</div>

	<div id="team" class="slide">
		
		<div class="container">
			<div class="row">

				<div class="col12 logoTitle">
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/starman.png" alt="SkyWatch">'; ?>
					<h1>Team</h1>
				</div>

			</div>

			

		</div>

	</div>

	<div id="team2" class="slide">
		
		

	</div>

	<div id="howMuch" class="slide">
		
		<div class="container">
			<div class="row">

				<div class="col12 logoTitle">
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/starman.png" alt="SkyWatch">'; ?>
					<h1>How Much We Need</h1>
				</div>

			</div>

			<div class="asking">
				<h1>$300,000 for x%</h1>
			</div>
		</div>

	</div>

	<div id="timeline" class="slide">
		
		<div class="container">
			<div class="row">

				<div class="col12 logoTitle">
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/starman.png" alt="SkyWatch">'; ?>
					<h1>Timeline</h1>
				</div>

			</div>

			<div class="row">

				<div class="col12">
					<div id="devTime" class="timeline" style="height: 600px;">
						
						<div class="backbone"></div>

						<div class="entry rightside">
							
							<div class="point"></div>	
							<div class="cont">
								<span class="headerText">Month 1</span>
								<span class="text">ESOP Shares Agreement, buy equipment, make hires, find office</span>
							</div>						

						</div>

						<div class="entry leftside">
							
							<div class="cont">
								<span class="headerText">Month 2</span>
								<span class="text">Development underway, licenses for data figured out</span>
							</div>	
							<div class="point"></div>						

						</div>

						<div class="entry rightside">
							
							<div class="point"></div>	
							<div class="cont">
								<span class="headerText">Month 5</span>
								<span class="text">100 Customer interviews complete, SkyWatch QA begins, SkyWatch EDU planning begins</span>
							</div>						

						</div>

						<div class="entry leftside">
							
							<div class="cont">
								<span class="headerText">Month 6</span>
								<span class="text">SWEDU development begins</span>
							</div>	
							<div class="point"></div>						

						</div>

						<div class="entry rightside">
							
							<div class="point"></div>	
							<div class="cont">
								<span class="headerText">Month 8</span>
								<span class="text">Promo video completed, SkyWatch private beta unveilied at Space Apps 2015, SWEDU previewed</span>
							</div>						

						</div>

						<div class="entry leftside">
							
							<div class="cont">
								<span class="headerText">Month 10</span>
								<span class="text">SWEDU QA begins, teacher solution interviews</span>
							</div>	
							<div class="point"></div>						

						</div>

						<div class="entry rightside">
							
							<div class="point"></div>	
							<div class="cont">
								<span class="headerText">Month 11</span>
								<span class="text">SWEDU goes on sale</span>
							</div>						

						</div>

					</div>
				</div>

				<script>

					timeline('#devTime');

				</script>

			</div>
		</div>

	</div>

	<div id="questions" class="slide">

		<div class="starContainer">
			<?php 

			for ($i = 0; $i <= 16; $i++) { 
				echo '<div class="starTop"></div>';
			} 

			?>
		</div>
		<div>
			<?php 

			for ($i = 0; $i <= 16; $i++) { 
				echo '<div class="starRight"></div>';
			} 

			?>
		</div>
		<div>
			<?php 

			for ($i = 0; $i <= 16; $i++) { 
				echo '<div class="starBottom"></div>';
			} 

			?>
		</div>
		<div>
			<?php 

			for ($i = 0; $i <= 16; $i++) { 
				echo '<div class="starLeft"></div>';
			} 

			?>	
		</div>

		<?php echo '<a href="mailto:team@skywatch.co"><img src="' . base_url() . 'assets/images/pitch/logo2.png" alt="SkyWatch"></a>'; ?>

	</div>

</div>





























