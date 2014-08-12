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
	'product3',
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

	// Open and close popup
	setTimeout(function() {
		$('#infoPopup').removeClass('hide noPointer');
	}, 800);

	$('#popupClose').click(function() {
		$('#infoPopup').addClass('hide noPointer');
	});

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

				case 'market3':
					
					if (!steps.market3 || steps.market3 < 1) {
						steps.market3 = 1;
						if (!animated.marketHeader3) extendHeader('marketHeader3');
						if (!animated.teachersInterviewed) show('teachersInterviewed');
						if (!animated.marketLooper3) looperOpen('marketLooper3', 100);
					}

					else if (steps.market3 == 1) {
						steps.market3 = 2;
						if (!animated.marketHeader4) extendHeader('marketHeader4');
						if (!animated.teachersInterviewed2) show('teachersInterviewed2');
						if (!animated.marketLooper4) looperOpen('marketLooper4', 100);
					}

					else if (steps.market3 == 2) {
						steps.market3 = 3;
						if (!animated.marketHeader5) extendHeader('marketHeader5');
						if (!animated.techGraph) show('techGraph');
					}

					break;

				case 'market4':
					
					if (!steps.market4 || steps.market4 < 1) {
						steps.market4 = 1;
						if (!animated.marketHeader7) extendHeader('marketHeader7');
						if (!animated.marketLooper6) looperOpen('marketLooper6', 100);						
					}

					break;

				case 'revenue':
					
					if (!steps.revenue || steps.revenue < 1) {
						steps.revenue = 1;
						if (!animated.revenueLooper) looperOpen('revenueLooper', 200);
					}

					else if (steps.revenue == 1) {
						steps.revenue = 2;
						if (!animated.revenueLooper2) looperOpen('revenueLooper2', 200);
					}

					else if (steps.revenue == 2) {
						steps.revenue = 3;
						if (!animated.revenueLooper3) looperOpen('revenueLooper3', 200);
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

				case 'market3':
					
					if (steps.market3 == 1) {
						steps.market3 = 0;
						if (animated.marketHeader3) retractHeader('marketHeader3');
						if (animated.marketLooper3) looperClose('marketLooper3', 100);
						setTimeout(function() {
							if (animated.teachersInterviewed) hide('teachersInterviewed');
						}, 1000);
					}

					else if (steps.market3 == 2) {
						steps.market3 = 1;
						if (animated.marketHeader4) retractHeader('marketHeader4');
						if (animated.marketLooper4) looperClose('marketLooper4', 100);
						setTimeout(function() {
							if (animated.teachersInterviewed2) hide('teachersInterviewed2');
						}, 1000);
					}

					else if (steps.market3 == 3) {
						steps.market3 = 2;
						if (animated.marketHeader5) retractHeader('marketHeader5');
						if (animated.techGraph) hide('techGraph');
					}

					break;

				case 'market4':

					if (steps.market4 == 1) {
						steps.market4 = 0;
						if (animated.marketHeader7) retractHeader('marketHeader7');
						if (animated.marketLooper6) looperClose('marketLooper6', 200);
					}

					break;

				case 'revenue':
					
					if (steps.revenue == 1) {
						steps.revenue = 0;
						if (animated.revenueLooper) looperClose('revenueLooper', 200);
					}

					else if (steps.revenue == 2) {
						steps.revenue = 1;
						if (animated.revenueLooper2) looperClose('revenueLooper2', 200);
					}

					else if (steps.revenue == 3) {
						steps.revenue = 2;
						if (animated.revenueLooper3) looperClose('revenueLooper3', 200);
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

	if (display.scrollTop >= display.height * contents.indexOf('problem3')) {
		if (!animated.questionGuy) looperOpen('questionGuy', 150);
		
		setTimeout(function() {
			if (!animated.questionMark) looperOpen('questionMark', 150);
		}, 150);

		setTimeout(function() {
			if (!animated.questionText) show('questionText');
		}, 1050);
	}

	if (display.scrollTop >= display.height * contents.indexOf('solution')) {

		if (!animated.solutionImg) looperOpen('solutionImg', 200);

		setTimeout(function() {
			if (!animated.solutionText) show('solutionText');
		}, 800);

	}

	if (display.scrollTop >= display.height * contents.indexOf('product')) {

		if (!animated.productLooper) looperOpen('productLooper', 200);

		setTimeout(function() {
			if (!animated.productText) show('productText');
		}, 800);

	}

	if (display.scrollTop >= display.height * contents.indexOf('product2')) {

		if (!animated.productLooper2) looperOpen('productLooper2', 200);

	}

	if (display.scrollTop >= display.height * contents.indexOf('product')) {
		if (!animated.productHeader1) extendHeader('productHeader1');
		if (!animated.productText) looperOpen('productText', 400);
	}

	if (display.scrollTop >= display.height * contents.indexOf('product3')) {
		if (!animated.productHeader2) extendHeader('productHeader2');
		if (!animated.dataFlow) animateTimeline('dataFlow', 200);
	}

	if (display.scrollTop >= display.height * contents.indexOf('market')) {
		if (!animated.marketHeader1) extendHeader('marketHeader1');
		if (!animated.marketLooper1) looperOpen('marketLooper1', 300);
	}

	if (display.scrollTop >= display.height * contents.indexOf('market2')) {
		if (!animated.marketHeader2) extendHeader('marketHeader2');
		if (!animated.marketLooper2) looperOpen('marketLooper2', 300);
	}

	if (display.scrollTop >= display.height * contents.indexOf('market4')) {
		if (!animated.marketHeader6) extendHeader('marketHeader6');
		if (!animated.marketLooper5) looperOpen('marketLooper5', 200);
	}

	if (display.scrollTop >= display.height * contents.indexOf('revenue')) {
		if (!animated.revenueHeader) extendHeader('revenueHeader');
		if (!animated.revImg) looperOpen('revImg', 400);
	}

	if (display.scrollTop >= display.height * contents.indexOf('revenue2')) {
		if (!animated.revenueHeader2) extendHeader('revenueHeader2');
		if (!animated.revenueChart) show('revenueChart');
	}

	if (display.scrollTop >= display.height * contents.indexOf('cost')) {
		if (!animated.costHeader) extendHeader('costHeader');
		if (!animated.costStructure) show('costStructure');
	}

	if (display.scrollTop >= display.height * contents.indexOf('risk')) {
		if (!animated.riskLooper) looperOpen('riskLooper', 400);
	}

	if (display.scrollTop >= display.height * contents.indexOf('team')) {
		if (!animated.supernova) show('supernova');

		setTimeout(function() {
			if (!animated.teampic) show('teampic');
		}, 800);

		setTimeout(function() {
			if (!animated.teamRow) show('teamRow');
			if (!animated.teamColumn) looperOpen('teamColumn', 200);
		}, 1200);
	}

	if (display.scrollTop >= display.height * contents.indexOf('timeline')) {
		if (!animated.devTime) animateTimeline('devTime', 200);
	}

	if (display.scrollTop >= display.height * contents.indexOf('questions')) {
		if (!animated.finalImage) show('finalImage');
	}

	// Fix supernova
	if (display.scrollTop >= display.height * contents.indexOf('team') && display.scrollTop < display.height * contents.indexOf('howMuch')) {
		$('.supernova').css('position', 'fixed');
		$('.supernova').css('opacity', '1');
	}

	else {
		$('.supernova').css('opacity', '0');
		setTimeout(function() {
			$('.supernova').css('position', 'absolute');
		}, 1000);
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

}

function animateTimeline(id, speed) {

	animated[id] = true;

	var entries = $('#' + id).find('.entry');
	
	function opacity(i) {

		setTimeout(function() {
			$(entries[i]).css('opacity', '1');
		}, speed * i);

	}

	for (var i = 0; i < entries.length; i++) {
		opacity(i);
	};

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

























