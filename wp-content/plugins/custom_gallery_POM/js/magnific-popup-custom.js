// CUSTOM MAGNIFIC POPUP

$(document).ready(function () {
	// gallery
	$('.post-images').magnificPopup({
		delegate: 'a', // child items selector, by clicking on it popup will open
		type: 'image',
		gallery: {
			enabled: true, // set to true to enable gallery
			
			preload: [0, 2], // read about this option in next Lazy-loading section
			
			navigateByImgClick: true,
			
			arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>', // markup of an arrow button
			
			tPrev: 'Previous (Left arrow key)', // title for left button
			tNext: 'Next (Right arrow key)', // title for right button
			tCounter: '<span class="mfp-counter">%curr% of %total%</span>' // markup of counter
		},
		
		// Delay in milliseconds before popup is removed
		removalDelay: 300,
		
		// Class that is added to popup wrapper and background
		// make it unique to apply your CSS animations just to this exact popup
		mainClass: 'mfp-fade',
	});
	
});

