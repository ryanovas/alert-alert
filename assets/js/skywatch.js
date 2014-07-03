$(document).ready(function() {

	// LOGO
	var logo = $('#contentCont');
	
	// CONTENT
	var whatIs = $('#whatIs');
	var team = $('#team');
	var media = $('#media');

	// MENU OPTIONS
	var opt1 = $('#menu li:first-of-type');
	var opt2 = $('#menu li:nth-child(2)');
	var opt3 = $('#menu li:nth-child(3)');
	var opt4 = $('#menu li:last-of-type');

	function dropActive() {
		$(opt1).removeClass('active');
		$(opt2).removeClass('active');
		$(opt3).removeClass('active');
	}

	function closeContent() {
		$(whatIs).removeClass('open');
		$(team).removeClass('open');
		$(media).removeClass('open');
	}

	function openContent() {
		$('#wrapper').addClass('contentOpen');
		$(logo).addClass('contentOpen');
	}

	// TEAM
	function dexter(){
		$('.bioCont:first-of-type').addClass('open');
		$('#dexter').addClass('open');
	}

	function ryan(){
		$('.bioCont:nth-child(2)').addClass('open');
		$('#ryan').addClass('open');
	}

	function roland(){
		$('.bioCont:nth-child(3)').addClass('open');
		$('#roland').addClass('open');
	}

	function stefan(){
		$('.bioCont:nth-child(4)').addClass('open');
		$('#stefan').addClass('open');
	}

	function james(){
		$('.bioCont:nth-child(5)').addClass('open');
		$('#james').addClass('open');
	}

	function closeAll() {
		$('.bioCont').removeClass('open');
		$('#imgWrapper > div').removeClass('open');
	}


	$(opt1).click(function() {

		openContent();
		dropActive();
		closeContent();

		$(opt1).addClass('active');
		$(whatIs).addClass('open');

		closeAll();

	});

	$(opt2).click(function() {

		openContent();
		dropActive();
		closeContent();

		$(opt2).addClass('active');
		$(media).addClass('open');

		closeAll();

	});

	$(opt3).click(function() {

		openContent();
		dropActive();
		closeContent();

		$(opt3).addClass('active');
		$(team).addClass('open');

		dexter();

	});

	$('#dexter').click(function() {

		closeAll();
		dexter();

	});

	$('#ryan').click(function() {

		closeAll();
		ryan();

	});

	$('#roland').click(function() {

		closeAll();
		roland();

	});

	$('#stefan').click(function() {

		closeAll();
		stefan();

	});

	$('#james').click(function() {

		closeAll();
		james();

	});

	function isEmail(email) {
		var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		return regex.test(email);
	}

	var submitted = false;

	$('#submit').click(function() {

		if (submitted == true) return;
		
		var self = $(this);
		var email = $('#email').val();

		if (isEmail(email)) {

			console.log('running');
			
			var postData = {};
			postData['email'] = email;

			var http = location.protocol + '//';			
			var url = http + document.domain + '/app/emailList';

			$.ajax({

				type: 'POST',
				url: url,
				data: postData,
				async: true,
				beforeSend: function() {
					self.text('Loading...');
				},

				success: function(data) {	

					submitted = true;				
					
					if (data == 'true') {
						self.text('Success!');
						self.css('background', '#16A085');
						$('.arrow-left').css('border-right', '14px solid #16A085');
					}

					else {
						self.text('Email already added');

						setTimeout(function() {

							self.text('Sign Up for Private Beta');
							submitted = false;

						}, 3000);

					}

				}

			});

		}

		else {
			$('#errors').html('<p style="text-align:center;width:100%;display:block;margin-top:5px;">Please enter a valid email</p>');
		}

	});

});


































