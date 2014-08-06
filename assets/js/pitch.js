/***************************************************************************************************

	GLOBAL VARIABLES

***************************************************************************************************/

var display = {
	height: $(window).innerHeight(),
	width: $(window).width(),
	scrollTop: $(window).scrollTop()
};

var animated = {};
var steps = {};

var contents = [
	'title',
	'prologue',
	'problem',
	'problem2',
	'problem3',
	'solution',
	'product',
	'product2',
	'market',
	'market2',
	'market3',
	'market4',
	'revenue',
	'revenue2',
	'cost',
	'risk',
	'team',
	'team2',
	'howMuch',
	'timeline',
	'questions',
];

var current = 0;

/***************************************************************************************************

	DOCUMENT READY

***************************************************************************************************/

$(document).ready(function() {
	
	// Set slides to all have height of screen
	$('.slide').css('height', display.height);

	// Set current variable
	setCurrent(display.scrollTop);

	// Move screen when up or down arrow pushed
	$(window).on('keydown', function(event) {
		if (event.which === 40) {
			event.preventDefault();
			
			if (current < (contents.length - 1)) {
				$('html, body').animate({ scrollTop: display.height * (current + 1) });
				current++;
			}			
		}

		else if (event.which === 38) {
			event.preventDefault();

			if (current > 0) {
				$('html, body').animate({ scrollTop: display.height * (current - 1) });
				current--;
			}			
		}

		else if (event.which === 39) {
			event.preventDefault();			

			switch (contents[current]) {

				case 'prologue':
					if (!animated.prologueHeader2) extendHeader('prologueHeader2');
					if (!animated.prologueLooper2) looperOpen('prologueLooper2', 200);
					break;
				
				case 'problem':
					
					if (!steps.problem || steps.problem < 1) {
						steps.problem = 1;
						if (!animated.problemHeader1) extendHeader('problemHeader1');
						if (!animated.spaceTelescopes) show('spaceTelescopes');
					}

					else if (steps.problem == 1) {
						steps.problem = 2;
						if (!animated.problemHeader2) extendHeader('problemHeader2');
						if (!animated.groundTelescopes) show('groundTelescopes');
					}

					else if (steps.problem == 2) {
						steps.problem = 3;
						if (!animated.problemHeader3) extendHeader('problemHeader3');
						if (!animated.galaxies) looperOpen('galaxies', 80);
						setTimeout(function() {
							if (!animated.whereStored) looperOpen('whereStored', 500);
						}, 720);
					}

					break;

			}

			console.log(steps);
					
		}

		else if (event.which === 37) {
			event.preventDefault();

			switch (contents[current]) {

				case 'prologue':
					if (animated.prologueHeader2) retractHeader('prologueHeader2');
					if (animated.prologueLooper2) looperClose('prologueLooper2', 200);
					break;
				
				case 'problem':
					
					if (steps.problem == 1) {
						steps.problem = 0;
						if (animated.problemHeader1) retractHeader('problemHeader1');
						if (animated.spaceTelescopes) hide('spaceTelescopes');
					}

					else if (steps.problem == 2) {
						steps.problem = 1;
						if (animated.problemHeader2) retractHeader('problemHeader2');
						if (animated.groundTelescopes) hide('groundTelescopes');
					}

					else if (steps.problem == 3) {
						steps.problem = 2;
						if (animated.problemHeader3) retractHeader('problemHeader3');
						if (animated.whereStored) looperClose('whereStored', 500);
						setTimeout(function() {
							if (animated.galaxies) looperClose('galaxies', 80);
						}, 720);
					}

					break;

			}

			console.log(steps);
					
		}
	});

	// Revenue Model Cost Comparison Function
	$('#classes').on('keyup', function() {

		var count = $(this).val() * 30;
		var starryNights = (count * 30) + 350;
		var skywatch = count * 5;

		$('#starryNightsCount').text('$' + starryNights);
		$('#skywatchCount').text('$' + skywatch);

		if (starryNights > 999999 || skywatch > 999999) {
			$('#starryNightsCount, #skywatchCount').css('font-size', '25px');
		}

		else if (starryNights > 99999999999 || skywatch > 99999999999) {
			$('#starryNightsCount, #skywatchCount').css('font-size', '15px');
		}

		else {
			$('#starryNightsCount, #skywatchCount').css('font-size', '40px');
		}

	});

});

/***************************************************************************************************

	WINDOW SCOLL

***************************************************************************************************/

$(window).scroll(function() {

	display.scrollTop = $(window).scrollTop();
	setCurrent(display.scrollTop);

	// console.log(display.scrollTop);

	// scrolling functions controller

	if (display.scrollTop >= display.height * contents.indexOf('prologue')) {
		if (!animated.prologueHeader1) extendHeader('prologueHeader1');
		if (!animated.prologueLooper1) looperOpen('prologueLooper1', 200);
		if (!animated.participants) countUp('participants', 0.3, 8196);
		if (!animated.locations) countUp('locations', 28, 95);
		if (!animated.projects) countUp('projects', 3, 671);
	}

	if (display.scrollTop >= display.height * contents.indexOf('problem')) {
		if (!animated.problemStatement) show('problemStatement');
	}

	if (display.scrollTop >= display.height * contents.indexOf('problem2')) {
		if (!animated.problem2Parts) looperOpen('problem2Parts', 200);
	}

});

/***************************************************************************************************

	FUNCTIONS

***************************************************************************************************/

function setCurrent(scroll) {

	for (var i = 0; i < contents.length; i++) {
		if (scroll >= display.height * i && scroll < display.height * (i + 1)) {			
			current = i;
			break;
		}
	};

}

function timeline(id) {

	var timeline = $(id);
	var height = timeline.height();
	var entryCount = timeline.find('.entry').length;
	var i = 0;

	// position entries based on count
	timeline.find('.entry').each(function() {

		var pointPos = (height / entryCount) * i;
		$(this).css('top', pointPos);

		i++;

	});

	// get rid of "stems" on top and bottom of backbone

}

function extendHeader(id) {

	animated[id] = true;

	var s = $('.' + id).attr('class');
	var elemClass = s.substring(0, s.indexOf(' '));
	var width = Math.ceil(Math.floor(elemClass.replace('col', '')) * 8.333333);

	$('.' + id).css('width', width + '%');
	$('.' + id).find('div').css('height', '25px');
	$('.' + id).find('div').css('opacity', '1');

}

function retractHeader(id) {

	animated[id] = false;

	$('.' + id).find('div').css('opacity', '0');
	$('.' + id).find('div').css('height', '0');
	$('.' + id).css('width', '0');

}

function show(id) {
	animated[id] = true;
	$('.' + id).css('opacity', '1');
}

function hide(id) {
	animated[id] = false;
	$('.' + id).css('opacity', '0');	
}

function looperOpen(id, speed) {

	animated[id] = true;
	var elements = $('.' + id);

	function opacity(i) {

		setTimeout(function() {
			$(elements[i]).css('opacity', '1');
		}, speed * i);

	}

	for (var i = 0; i < elements.length; i++) {
		opacity(i);
	};

}

function looperClose(id, speed) {

	animated[id] = false;
	var elements = $('.' + id).get().reverse();

	function opacity(i) {

		setTimeout(function() {
			$(elements[i]).css('opacity', '0');
		}, speed * i);

	}

	for (var i = 0; i < elements.length; i++) {
		opacity(i);
	};

}

function countUp(id, speed, total) {

	animated[id] = true;

	function count(i) {

		setTimeout(function() {
			$('#' + id).text(i);
		}, speed * i);

	}

	for (i = 0; i <= total; i++) {
		count(i);
	}

}

function countDown(id, speed) {

	animated[id] = false;
	var total = Math.floor($('#' + id).text());

	function count(i) {

		setTimeout(function() {
			$('#' + id).text(i);
		}, speed * i);

	}

	for (i = total; i >= 0; i--) {
		count(i);
	}

}

























