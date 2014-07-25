/***************************************************************************************************

	GLOBAL VARIABLES

***************************************************************************************************/

var display = {
	height: $(window).innerHeight(),
	width: $(window).width(),
	scrollTop: $(window).scrollTop()
};

var contents = [
	'title',
	'prologue',
	'problem',
	'problem2',
	'problem3',
	'solution',
	'market',
	'market2',
	'market3',
	'product',
	'revenue',
	'cost',
	'risk',
	'team',
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
	});

});

/***************************************************************************************************

	WINDOW SCOLL

***************************************************************************************************/

$(window).scroll(function() {

	display.scrollTop = $(window).scrollTop();
	setCurrent(display.scrollTop);

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



























