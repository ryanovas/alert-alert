<div id="bgGrad">

	<div id="infoPopup" class="hide noPointer">

		<div class="popCont">
			<h1>How to View This Pitch Deck</h1>
			<p>We built this deck in HTML5 for interactivity. To navigate the slides, use the up and down arrows. To view the content within slides, use the right and left arrows. Slides with more content are marked with an * in the top right corner.</p>
			<p>Some elements in this deck link to external content. Elements that are clickable will pulse every few seconds.</p>
			<button id="popupClose">OK, Got It!</button>
		</div>

	</div>
	
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

		<div class="moreMarker">*</div>
		
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
							<?php echo anchor('http://motherboard.vice.com/read/black-holes-and-supernovas-are-getting-the-google-map-treatment', '<img class="link delay1" src="' . base_url() . 'assets/images/pitch/news1.png" alt="NASA">', 'target="_blank"'); ?>
						</div>

						<div class="col6 hide prologueLooper2">
							<?php echo anchor('http://www.dailymail.co.uk/sciencetech/article-2640497/The-Google-Maps-SPACE-Skywatch-app-lets-witness-supernovas-comets-real-time.html', '<img class="link delay1" src="' . base_url() . 'assets/images/pitch/news2.png" alt="NASA">', 'target="_blank"'); ?>
						</div>

					</div>

					<div class="row">

						<div class="col6 hide prologueLooper2">
							<?php echo anchor('http://www.macleans.ca/news/canada/were-no-1-18-reasons-why-its-great-to-be-canadian/', '<img class="link delay2" src="' . base_url() . 'assets/images/pitch/news3.png" alt="NASA">', 'target="_blank"'); ?>
						</div>

						<div class="col6 hide prologueLooper2">
							<?php echo anchor('http://www.thestar.com/news/gta/2014/05/16/canadian_team_wins_nasa_space_apps_challenge.html', '<img class="link delay2" src="' . base_url() . 'assets/images/pitch/news4.png" alt="NASA">', 'target="_blank"'); ?>
						</div>

					</div>

					<div class="row">

						<div class="col6 hide prologueLooper2">
							<?php echo anchor('http://www.engadget.com/2014/05/28/skywatch-software-galactic-events/', '<img class="link delay3" src="' . base_url() . 'assets/images/pitch/news5.png" alt="NASA">', 'target="_blank"'); ?>
						</div>

						<div class="col6 hide prologueLooper2">
							<?php echo anchor('http://acuriousguy.blogspot.ca/2014/05/cdn-skywatch-wins-best-use-of-data-at.html', '<img class="link delay3" src="' . base_url() . 'assets/images/pitch/news6.png" alt="NASA">', 'target="_blank"'); ?>
						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

	<div id="problem" class="slide">

		<div class="moreMarker">*</div>
		
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
								<h1>18</h1>
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
								<h1>100's</h1>
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
					<p>In order to connect to and make use of this data, <a class="link" href="http://skyalert.org" style="color: white;" target="_blank"><b>one must have a strong knowledge of technology AND astronomy.</b></a></p>
					<p class="margin">The only way the general public can learn about these events <b>is through a press release.</b></p>
					<p class="margin">Simply stated...</p>
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
					<?php echo '<img class="person hide questionMark" src="' . base_url() . 'assets/images/pitch/question.png" alt="SkyWatch">'; ?>
					<?php echo '<img class="person hide questionGuy" src="' . base_url() . 'assets/images/pitch/question_guy.png" alt="SkyWatch">'; ?>
				</div>
				<div class="questionPerson boost">
					<?php echo '<img class="person hide questionMark" src="' . base_url() . 'assets/images/pitch/question.png" alt="SkyWatch">'; ?>
					<?php echo '<img class="person hide questionGuy" src="' . base_url() . 'assets/images/pitch/question_guy.png" alt="SkyWatch">'; ?>
				</div>
				<div class="questionPerson">
					<?php echo '<img class="person hide questionMark" src="' . base_url() . 'assets/images/pitch/question.png" alt="SkyWatch">'; ?>
					<?php echo '<img class="person hide questionGuy" src="' . base_url() . 'assets/images/pitch/question_guy.png" alt="SkyWatch">'; ?>
				</div>
				<br>
				<div class="questionPerson">
					<?php echo '<img class="person hide questionMark" src="' . base_url() . 'assets/images/pitch/question.png" alt="SkyWatch">'; ?>
					<?php echo '<img class="person hide questionGuy" src="' . base_url() . 'assets/images/pitch/question_guy.png" alt="SkyWatch">'; ?>
				</div>
				<div class="questionPerson boost">
					<?php echo '<img class="person hide questionMark" src="' . base_url() . 'assets/images/pitch/question.png" alt="SkyWatch">'; ?>
					<?php echo '<img class="person hide questionGuy" src="' . base_url() . 'assets/images/pitch/question_guy.png" alt="SkyWatch">'; ?>
				</div>
				<div class="questionPerson">
					<?php echo '<img class="person hide questionMark" src="' . base_url() . 'assets/images/pitch/question.png" alt="SkyWatch">'; ?>
					<?php echo '<img class="person hide questionGuy" src="' . base_url() . 'assets/images/pitch/question_guy.png" alt="SkyWatch">'; ?>
				</div>
			</div>

			<div class="questionText hide">

				<h1>This data isn't accessible<br> to the general public</h1>

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
				<div class="col12 header problemHeader3">
					<div></div>
				</div>
			</div>

			<div class="row">

				<div class="col5 right">
					<?php echo '<img class="solutionImg hide" src="' . base_url() . 'assets/images/pitch/galaxy.png" alt="SkyWatch">'; ?>
					<?php echo '<img class="solutionImg hide" src="' . base_url() . 'assets/images/pitch/sky.png" alt="SkyWatch"><br>'; ?>
					<?php echo '<img class="solutionImg hide" src="' . base_url() . 'assets/images/pitch/ground.png" alt="SkyWatch">'; ?>					
					<?php echo '<img class="solutionImg hide" src="' . base_url() . 'assets/images/pitch/NASA_servers.png" alt="SkyWatch">'; ?>					
				</div>

				<div class="col1 center">
					<?php echo '<img class="delay5 wave flash4" src="' . base_url() . 'assets/images/pitch/wave.png" alt="SkyWatch">'; ?>
				</div>

				<div class="col4">
					<?php echo '<img class="monitor" src="' . base_url() . 'assets/images/pitch/skywatch.png" alt="SkyWatch">'; ?>
				</div>

			</div>

			<div class="center clear solutionText hide">
				
				<p>We built SkyWatch to tap into NASA’s telescope infrastructure to provide anyone with an internet connection the ability to <b>follow everything happening in the cosmos, in real-time.</b></p>
				<p>SkyWatch will provide the public with a truly new and interactive way of exploring and learning about the universe.</p>

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
				<div class="col12 header productHeader1">
					<div>Open Astronomy Data</div>
				</div>
			</div>

			<div class="row">

				<div class="col6 productLooper hide">
					<?php echo anchor('http://www.space.com/6716-major-space-telescopes.html', '<img class="link" src="' . base_url() . 'assets/images/pitch/earthLookingOut.png" alt="SkyWatch">', 'target="_blank"'); ?>
					<?php echo '<img class="laser1 flash3 delay1" src="' . base_url() . 'assets/images/pitch/laser.png" alt="SkyWatch">'; ?>
					<?php echo '<img class="laser2 flash3 delay3" src="' . base_url() . 'assets/images/pitch/laser2.png" alt="SkyWatch">'; ?>
					<?php echo '<img class="laser3 flash3 delay7" src="' . base_url() . 'assets/images/pitch/laser3.png" alt="SkyWatch">'; ?>
					<?php echo '<img class="wave flash4 delay2" src="' . base_url() . 'assets/images/pitch/wave.png" alt="SkyWatch">'; ?>
				</div>

				<div class="col3 right pushDown">
					<?php echo anchor('https://docs.google.com/a/sproutr.co/spreadsheets/d/1jobUIsESIU9UQ3Q0q1E101ilQ4uBA4LspQ-kEp8fQLQ', '<img class="link delay1 productLooper hide" src="' . base_url() . 'assets/images/pitch/NASA_servers.png" alt="SkyWatch">', 'target="_blank"') . '<br>'; ?>
					<?php echo anchor('https://docs.google.com/a/sproutr.co/spreadsheets/d/1jobUIsESIU9UQ3Q0q1E101ilQ4uBA4LspQ-kEp8fQLQ', '<img class="link delay1 productLooper hide" src="' . base_url() . 'assets/images/pitch/sloan_servers.png" alt="SkyWatch">', 'target="_blank"') . '<br>'; ?>
					<?php echo anchor('https://docs.google.com/a/sproutr.co/spreadsheets/d/1jobUIsESIU9UQ3Q0q1E101ilQ4uBA4LspQ-kEp8fQLQ', '<img class="link delay1 productLooper hide" src="' . base_url() . 'assets/images/pitch/MAST_servers.png" alt="SkyWatch">', 'target="_blank"') . '<br>'; ?>
				</div>

			</div>

			<div class="clear"></div>

			<div class="productText hide center">
				<p>Whenever an event is detected or a discovery made public, SkyWatch will collect that data and instantly push it across the SkyWatch infrastructure. Any technologies connected to this infrastructure, including our web client and future products, will receive this new data over a socket connection and update in real-time.</p>
				<p class="margin">Click on the Earth or Servers to learn more about the data available.</p>
			</div>
		</div>

	</div>

	<div id="product2" class="slide">
		
		<div class="container">

			<div class="row">
				<div class="col12 header productHeader1">
					<div>The SkyWatch 3D Universe</div>
				</div>
			</div>

			<div class="row">

				<div class="col6 productLooper2 hide right">
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/skywatch2.png" alt="SkyWatch">'; ?>
					<?php echo '<img class="wave flash5" src="' . base_url() . 'assets/images/pitch/wave.png" alt="SkyWatch">'; ?>
				</div>

				<div class="col6 productLooper2 hide pushDown">
					<?php echo '<img class="productPeople" src="' . base_url() . 'assets/images/pitch/product_people.png" alt="SkyWatch">'; ?>
				</div>

			</div>

			<div class="clear"></div>

			<div class="productText2 productLooper2 hide center">
				<p>For our beta, we are building a <b>web based 3D model of the universe</b> that will plot all known objects in the cosmos, and update in real time.</p> 
				<p class="margin">Users will be able to explore the universe and learn about everything they discover in detail, setting the complexity of the information based on their personal understanding.</p> 
				<p class="margin"><a class="link" style="color: white;" href="http://stars.chromeexperiments.com/" target="_blank"><b>Click here</b></a> to see a fantastic example of a 3D Space Model.</p>
			</div>
		</div>

	</div>

	<div id="product3" class="slide">
		
		<div class="container">
			<div class="row">
				<div class="col12 header productHeader2">
					<div>Backend Data Flow</div>
				</div>
			</div>

			<div class="row">

				<div class="col12">
					<div id="dataFlow" class="timeline" style="height: 600px;">
						
						<div class="backbone"></div>

						<div class="entry hide rightside">
							
							<div class="point"></div>	
							<div class="cont">
								<span class="headerText">Telescopes and Observatories</span>
								<span class="text">As transient objects are discovered in the universe, they are sent or stored in a publically accessible server.</span>
							</div>						

						</div>

						<div class="entry hide leftside">
							
							<div class="cont">
								<span class="headerText">Data Processing Server</span>
								<span class="text">A cloud server will be constantly running Java programs to connect to the public networks looking for new data.</span>
							</div>	
							<div class="point"></div>						

						</div>

						<div class="entry hide rightside">
							
							<div class="point"></div>	
							<div class="cont">
								<span class="headerText">MongoDB and Hadoop</span>
								<span class="text">When new data is found , noise and duplicated will be filtered out. The fresh data will then be stored in a Hadoop cluster for big data processing and MongoDB for unstant use.</span>
							</div>						

						</div>

						<div class="entry hide leftside">
							
							<div class="cont">
								<span class="headerText">REST API</span>
								<span class="text">A REST API running Python will serve all data and perform all logic for client side use. Using sockets, real-time notifications will be sent to clients with new transient event data.</span>
							</div>	
							<div class="point"></div>						

						</div>

						<div class="entry hide rightside">
							
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
				<div class="col12 header marketHeader1">
					<div>Three Profitable Markets</div>
				</div>
			</div>

			<div class="row">

				<div class="col3 center hide marketLooper1">
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/education.png" alt="SkyWatch">'; ?>
					<h3>Education</h3>
					<?php echo '<img class="need" src="' . base_url() . 'assets/images/pitch/need.png" alt="SkyWatch">'; ?>
				</div>

				<div class="col3 center hide marketLooper1">
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/OSC.png" alt="SkyWatch">'; ?>
					<h3>Science Centres</h3>
				</div>

				<div class="col3 center hide marketLooper1">
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/telescope.png" alt="SkyWatch">'; ?>
					<h3>Astronomers</h3>
				</div>

				<div class="col3 center hide marketLooper1">
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/gaming.png" alt="SkyWatch">'; ?>
					<h3>Gaming</h3>
				</div>

			</div>
		</div>

	</div>

	<div id="market2" class="slide">
		
		<div class="container">

			<div class="row">
				<div class="col12 header marketHeader2">
					<div>Building on the Core Product</div>
				</div>
			</div>

			<div class="row">

				<div class="col6 right marketLooper2 hide">
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/market_skywatch.png" alt="SkyWatch">'; ?>
				</div>

				<div class="col6 marketLooper2 hide">
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/market_edu.png" alt="SkyWatch">'; ?>
				</div>

			</div>
		</div>

	</div>

	<div id="market3" class="slide">

		<div class="moreMarker">*</div>

		<div class="container">

			<div class="row">
				
				<div class="col6 header marketHeader3">
					<div>Importance of Space Ed</div>
				</div>

				<div class="col6 header marketHeader4">
					<div>Teacher Strength in Space Ed</div>
				</div>

			</div>

			<div class="row">
				
				<div class="col6 hide teachersInterviewed">

					<div class="row">
						
						<div class="col12">
							<?php echo '<img class="marketLooper3 hide" src="' . base_url() . 'assets/images/pitch/man_filled.png" alt="SkyWatch">'; ?>
							<?php echo '<img class="marketLooper3 hide" src="' . base_url() . 'assets/images/pitch/man_filled.png" alt="SkyWatch">'; ?>
							<?php echo '<img class="marketLooper3 hide" src="' . base_url() . 'assets/images/pitch/man_filled.png" alt="SkyWatch">'; ?>
							<?php echo '<img class="marketLooper3 hide" src="' . base_url() . 'assets/images/pitch/man_filled.png" alt="SkyWatch">'; ?>
							<?php echo '<img class="marketLooper3 hide" src="' . base_url() . 'assets/images/pitch/man_filled.png" alt="SkyWatch">'; ?>
							<?php echo '<img class="marketLooper3 hide" src="' . base_url() . 'assets/images/pitch/man_filled.png" alt="SkyWatch">'; ?>
							<?php echo '<img class="marketLooper3 hide" src="' . base_url() . 'assets/images/pitch/man_filled.png" alt="SkyWatch">'; ?>
							<?php echo '<img class="marketLooper3 hide" src="' . base_url() . 'assets/images/pitch/man_filled.png" alt="SkyWatch">'; ?>
							<?php echo '<img class="marketLooper3 hide" src="' . base_url() . 'assets/images/pitch/man_empty.png" alt="SkyWatch">'; ?>
							<?php echo '<img class="marketLooper3 hide" src="' . base_url() . 'assets/images/pitch/man_empty.png" alt="SkyWatch">'; ?>
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

				<div class="col6 leftBorder hide teachersInterviewed2">

					<div class="row">
						
						<div class="col12">
							<?php echo '<img class="marketLooper4 hide" src="' . base_url() . 'assets/images/pitch/man_filled.png" alt="SkyWatch">'; ?>
							<?php echo '<img class="marketLooper4 hide" src="' . base_url() . 'assets/images/pitch/man_filled.png" alt="SkyWatch">'; ?>
							<?php echo '<img class="marketLooper4 hide" src="' . base_url() . 'assets/images/pitch/man_filled.png" alt="SkyWatch">'; ?>
							<?php echo '<img class="marketLooper4 hide" src="' . base_url() . 'assets/images/pitch/man_empty.png" alt="SkyWatch">'; ?>
							<?php echo '<img class="marketLooper4 hide" src="' . base_url() . 'assets/images/pitch/man_empty.png" alt="SkyWatch">'; ?>
							<?php echo '<img class="marketLooper4 hide" src="' . base_url() . 'assets/images/pitch/man_empty.png" alt="SkyWatch">'; ?>
							<?php echo '<img class="marketLooper4 hide" src="' . base_url() . 'assets/images/pitch/man_empty.png" alt="SkyWatch">'; ?>
							<?php echo '<img class="marketLooper4 hide" src="' . base_url() . 'assets/images/pitch/man_empty.png" alt="SkyWatch">'; ?>
							<?php echo '<img class="marketLooper4 hide" src="' . base_url() . 'assets/images/pitch/man_empty.png" alt="SkyWatch">'; ?>
							<?php echo '<img class="marketLooper4 hide" src="' . base_url() . 'assets/images/pitch/man_empty.png" alt="SkyWatch">'; ?>
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
				<div class="col12 header marketHeader5">
					<div>% of Students Using Technology in Schools</div>
				</div>
			</div>

			<div class="row">

				<div class="col12 hide techGraph">

					<div id="techInSchools" style="height: 300px;"></div>
					<script>

						new Morris.Line({
						  // ID of the element in which to draw the chart.
						  element: 'techInSchools',
						  // Chart data records -- each entry in this array corresponds to a point on
						  // the chart.
						  data: [
						    { year: '2009', chromebooks: 0, ipads: 0, wifi: 95 },
						    { year: '2010', chromebooks: 0, ipads: 1, wifi: 96 },
						    { year: '2011', chromebooks: 0, ipads: 10, wifi: 97 },
						    { year: '2012', chromebooks: 1, ipads: 30, wifi: 98 },
						    { year: '2013', chromebooks: 2, ipads: 40, wifi: 99 },
						    { year: '2014', chromebooks: 15, ipads: 45, wifi: 99 },
						    { year: '2015', chromebooks: 30, ipads: 48, wifi: 99 },
						    { year: '2016', chromebooks: 48, ipads: 52, wifi: 99 },
						    { year: '2017', chromebooks: 74, ipads: 55, wifi: 99 }
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

		<div class="moreMarker">*</div>

		<div class="container">

			<div class="row">
				<div class="col12 header marketHeader6">
					<div>Current Software Solutions</div>
				</div>
			</div>

			<div class="row">

				<div class="col3 center marketLooper5 hide">
					<?php echo anchor('http://www.starrynighteducation.com/', '<img class="link" src="' . base_url() . 'assets/images/pitch/starry_night.png" alt="SkyWatch">', 'target="_blank"'); ?>
					<h3>Starry Night</h3>
				</div>

				<div class="col3 center marketLooper5 hide">
					<?php echo anchor('https://www.khanacademy.org/science/cosmology-and-astronomy', '<img class="link delay1" src="' . base_url() . 'assets/images/pitch/khan_academy.png" alt="SkyWatch">', 'target="_blank"'); ?>
					<h3>Khan Academy</h3>
				</div>

				<div class="col3 center marketLooper5 hide">
					<?php echo anchor('http://www.stellarium.org/', '<img class="link delay2" src="' . base_url() . 'assets/images/pitch/stellarium.png" alt="SkyWatch">', 'target="_blank"'); ?>
					<h3>Stellarium</h3>
				</div>

				<div class="col3 center marketLooper5 hide">
					<?php echo anchor('http://www.asc-csa.gc.ca/eng/educators/resources/', '<img class="link delay3" src="' . base_url() . 'assets/images/pitch/csa.png" alt="SkyWatch">', 'target="_blank"'); ?>
					<h3>CSA <span style="font-size: 12px;">(recently ended)</span></h3>
				</div>

			</div>

			<div class="row">
				<div class="col12 header marketHeader7">
					<div>Market Numbers</div>
				</div>
			</div>

			<div class="row">

				<div class="col6 marketLooper6 hide">

					<div id="marketNumbers1" style="height: 300px;"></div>
					<script>

						new Morris.Donut({
						  // ID of the element in which to draw the chart.
						  element: 'marketNumbers1',
						  // Chart data records -- each entry in this array corresponds to a point on
						  // the chart.
						  data: [
						    { label: 'Gr.9 Students in Canada', value: 512000 },
						    { label: 'Gr.9 Students in the US', value: 4700000 },
						    { label: 'Gr.9 Students in the UK', value: 930000 },
						    { label: 'Gr.9 Students in Australia', value: 350000 },
						    { label: 'Gr.9 Students in South Africa', value: 750000 },
						  ],
						  colors: ['#7fac9d', '#ee779e', '#91daef', '#c6d0ae', '#666666'],
						  labelColor: '#fff',
						  resize: true,
						});

					</script>

				</div>

				<div class="col6 marketLooper6 hide">

					<div id="marketNumbers2" style="height: 300px;"></div>
					<script>

						new Morris.Donut({
						  // ID of the element in which to draw the chart.
						  element: 'marketNumbers2',
						  // Chart data records -- each entry in this array corresponds to a point on
						  // the chart.
						  data: [
						    { label: 'Total Available Market Canada', value: 2560000 },
						    { label: 'Total Available Market USA', value: 23500000 },
						    { label: 'Total Available Market UK', value: 4560000 },
						    { label: 'Total Available Market Australia', value: 1750000 },
						    { label: 'Total Available Market South Africa', value: 3750000 },
						  ],
						  colors: ['#7fac9d', '#ee779e', '#91daef', '#c6d0ae', '#666666'],
						  labelColor: '#fff',
						  resize: true,
						});

					</script>

				</div>

			</div>

		</div>

	</div>

	<div id="revenue" class="slide">

		<div class="moreMarker">*</div>
		
		<div class="container">
			<div class="row">

				<div class="col12 logoTitle">
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/starman.png" alt="SkyWatch">'; ?>
					<h1>Revenue Model</h1>
				</div>

			</div>

			<div class="row">
				<div class="col12 header revenueHeader">
					<div>Competitive Analysis</div>
				</div>
			</div>

			<div class="row">

				<div class="col2 center revImg hide">
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/starry_night.png" alt="SkyWatch">'; ?>
					<h3>Starry Night</h3>
				</div>
				
				<div class="col2 center revImg hide">
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/market_skywatch.png" alt="SkyWatch">'; ?>
					<h3>Skywatch</h3>
				</div>

			</div>

			<div class="row comparison">

				<div class="col2 center hide revenueLooper">
					<h1>$350</h1>
				</div>

				<div class="col2 center hide revenueLooper">
					<h1>0</h1>
				</div>

				<div class="col8 hide revenueLooper">
					<p>Cost per <b>teacher</b></p>
				</div>

			</div>

			<div class="row comparison">

				<div class="col2 center hide revenueLooper2">
					<h1>$30</h1>
				</div>

				<div class="col2 center hide revenueLooper2">
					<h1>$5</h1>
				</div>

				<div class="col8 hide revenueLooper2">
					<p>Cost per <b>student</b></p>
				</div>

			</div>

			<div class="row comparison">

				<div class="col2 center hide revenueLooper3">
					<h1 id="starryNightsCount">$1250</h1>
				</div>

				<div class="col2 center hide revenueLooper3">
					<h1 id="skywatchCount">$150</h1>
				</div>

				<div class="col8 hide revenueLooper3">
					<p><b>Total for <input id="classes" type="text" value="1"> Classes</b><br>(30 students each)</p>
				</div>

			</div>

		</div>

	</div>

	<div id="revenue2" class="slide">
		
		<div class="container">

			<div class="row">
				<div class="col12 header revenueHeader2">
					<div>Revenue Streams <a href="https://docs.google.com/a/sproutr.co/spreadsheets/d/1RQqaMRe9fTEtbJja0FC2sEVsaLuPTsyQzTY-fUKLE3k/edit#gid=1895570585" target="_blank">(click here for details)</a></div>
				</div>
			</div>

			<div class="row">

				<div class="col12 hide revenueChart">

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
				<div class="col12 header costHeader">
					<div>First Fiscal Year <a href="https://docs.google.com/a/sproutr.co/spreadsheets/d/1RQqaMRe9fTEtbJja0FC2sEVsaLuPTsyQzTY-fUKLE3k/edit#gid=0" target="_blank">(click here for details)</a></div>
				</div>
			</div>

			<div class="row">

				<div class="col12 hide costStructure">
					
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

				<div class="col4 hide riskLooper">
					<h3>Technical Risk</h3>
					<p><b>Lorem ipsum</b> dolor sit amet, consectetur adipiscing elit. Nam porttitor tempus ante.</p>
					<p><b>vel vulputate</b> neque ultricies non. Vestibulum congue tincidunt tempus. Phasellus elementum imperdiet mi vitae condimentum.</p>
				</div>
				<div class="col4 hide riskLooper">
					<h3>Market Risk</h3>
					<p><b>Lorem ipsum</b> dolor sit amet, consectetur adipiscing elit. Nam porttitor tempus ante.</p>
					<p><b>vel vulputate</b> neque ultricies non. Vestibulum congue tincidunt tempus. Phasellus elementum imperdiet mi vitae condimentum.</p>
				</div>
				<div class="col4 hide riskLooper">
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

			<div class="row">

				<div class="col12 center">
					<?php echo '<img class="teampic hide" src="' . base_url() . 'assets/images/pitch/team.png" alt="SkyWatch">'; ?>
				</div>

			</div>

			<div class="row teamRow hide">

				<div class="col3 center teamColumn hide">
					<span class="teamHeader">Ryan Ovas</span>
					<span class="teamBody">
						<p>Mad Scientist</p>
						<ul>
							<li>2+ years of design and development</li>
							<li>Built Sproutr, a social network, from scratch in ~4 months</li>
							<li>Incredibly fast learner and DIY enthusiast</li>
						</ul>
					</span>
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/webdev.png" alt="SkyWatch">'; ?>
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/design.png" alt="SkyWatch">'; ?>
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/productdev.png" alt="SkyWatch">'; ?>
				</div>
				<div class="col3 center teamColumn hide">
					<span class="teamHeader">Dexter Jagula</span>
					<span class="teamBody">
						<p>Sharp Dressed Man</p>
						<ul>
							<li>5+ years IT experience</li>
							<li>Degrees in Software Engineering and Space Science</li>
							<li>Startup experience</li>
							<li>Knowledgable of the Space industry</li>
						</ul>
					</span>
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/spacescience.png" alt="SkyWatch">'; ?>
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/softwaredev.png" alt="SkyWatch">'; ?>
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/entrepreneur.png" alt="SkyWatch">'; ?>
				</div>
				<div class="col3 center teamColumn hide">
					<span class="teamHeader">James Slifierz</span>
					<span class="teamBody">
						<p>Space Cowboy</p>
						<ul>
							<li>Highest GPA in The Humber Business School 2011 - 2013</li>
							<li>3+ years startup experience</li>
							<li>Co-founded Sproutr in March 2014</li>
						</ul>
					</span>
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/busdev.png" alt="SkyWatch">'; ?>
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/productdev.png" alt="SkyWatch">'; ?>
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/frontend.png" alt="SkyWatch">'; ?>
				</div>
				<div class="col3 center teamColumn hide">
					<span class="teamHeader">Roland Sing</span>
					<span class="teamBody">
						<p>The Brain</p>
						<ul>
							<li>29 years of Software Development experience</li>
							<li>Worked for IBM, Sierra Systems and MDA; currently Critical Mass.</li>
							<li>FIRST Robotics mentor for 4 years.</li>
						</ul>
					</span>
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/softwaredev.png" alt="SkyWatch">'; ?>
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/webdev.png" alt="SkyWatch">'; ?>
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/productdev.png" alt="SkyWatch">'; ?>
				</div>

				<span class="clear"></span>

			</div>

			<?php echo '<img class="supernova hide" src="' . base_url() . 'assets/images/pitch/supernova.png" alt="SkyWatch">'; ?>

		</div>

	</div>

	<div id="team2" class="slide">
		
		<div class="container">

			<div class="row">

				<div class="col12 center">
					<?php echo '<img class="teampic" src="' . base_url() . 'assets/images/pitch/team2.png" alt="SkyWatch">'; ?>
				</div>

			</div>

			<div class="row teamRow newTeam">

				<div class="col4 center teamColumn">
					<span class="teamHeader">WebGL Dev</span>
					<span class="teamBody">
						<p>3D Modelling Master</p>
						<ul>
							<li>In charge of designing all 3D models</li>
							<li>Will be animating all eduation modules</li>
							<li>Experience with game development and VR a huge asset</li>
						</ul>
					</span>
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/webgl.png" alt="SkyWatch">'; ?>
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/3Ddesign.png" alt="SkyWatch">'; ?>
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/animation.png" alt="SkyWatch">'; ?>
				</div>
				<div class="col4 center teamColumn">
					<span class="teamHeader">WebGL Dev</span>
					<span class="teamBody">
						<p>Interaction Visionary</p>
						<ul>
							<li>In charge of all physics and interaction</li>
							<li>Also in charge of plotting all celestial objects and loading correct models</li>
							<li>Creating all games/tests for education</li>
						</ul>
					</span>
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/webgl.png" alt="SkyWatch">'; ?>
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/dataplotting.png" alt="SkyWatch">'; ?>
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/ux.png" alt="SkyWatch">'; ?>
				</div>
				<div class="col4 center teamColumn">
					<span class="teamHeader">Senior Back End</span>
					<span class="teamBody">
						<p>The Architect</p>
						<ul>
							<li>Will design all backend architecture on AWS</li>
							<li>Will design database</li>
							<li>In charge of programming async RESTful API and logic</li>
							<li>Will oversee data collection development</li>
						</ul>
					</span>
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/java.png" alt="SkyWatch">'; ?>
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/python.png" alt="SkyWatch">'; ?>
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/aws.png" alt="SkyWatch">'; ?>
				</div>

				<span class="clear"></span>

			</div>

		</div>

	</div>

	<div id="howMuch" class="slide">
		
		<div class="container">
			<div class="row">

				<div class="col12 logoTitle">
					<?php echo '<img src="' . base_url() . 'assets/images/pitch/starman.png" alt="SkyWatch">'; ?>
					<h1>How Much We Need</h1>
				</div>

			</div>

			<div class="asking center">
				<h3>$280,000 convertable note at 6% interest and 20% discount.</h3>
				<h3>5M valuation cap.</h3>
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

						<div class="entry hide rightside">
							
							<div class="point"></div>	
							<div class="cont">
								<span class="headerText">Month 1</span>
								<span class="text">ESOP Shares Agreement, buy equipment, make hires, find office</span>
							</div>						

						</div>

						<div class="entry hide leftside">
							
							<div class="cont">
								<span class="headerText">Month 2</span>
								<span class="text">Development underway, licenses for data figured out</span>
							</div>	
							<div class="point"></div>						

						</div>

						<div class="entry hide rightside">
							
							<div class="point"></div>	
							<div class="cont">
								<span class="headerText">Month 5</span>
								<span class="text">100 Customer interviews complete, SkyWatch QA begins, SkyWatch EDU planning begins</span>
							</div>						

						</div>

						<div class="entry hide leftside">
							
							<div class="cont">
								<span class="headerText">Month 6</span>
								<span class="text">SWEDU development begins</span>
							</div>	
							<div class="point"></div>						

						</div>

						<div class="entry hide rightside">
							
							<div class="point"></div>	
							<div class="cont">
								<span class="headerText">Month 8</span>
								<span class="text">Promo video completed, SkyWatch private beta unveilied at Space Apps 2015, SWEDU previewed</span>
							</div>						

						</div>

						<div class="entry hide leftside">
							
							<div class="cont">
								<span class="headerText">Month 10</span>
								<span class="text">SWEDU QA begins, teacher solution interviews</span>
							</div>	
							<div class="point"></div>						

						</div>

						<div class="entry hide rightside">
							
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

		<?php echo '<a href="mailto:team@skywatch.co"><img class="hide finalImage" src="' . base_url() . 'assets/images/pitch/logo2.png" alt="SkyWatch"></a>'; ?>

	</div>

</div>





























