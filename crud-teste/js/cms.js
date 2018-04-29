jQuery(document).ready(function() {
	// initialize slider
	jQuery('.rsContent img').addClass('rsImg');
	jQuery('#full-slider').royalSlider({
		arrowsNav: true,
		arrowsNavAutoHide: false,
		autoPlay: {
    		// autoplay options go gere
    		enabled: true,
    		pauseOnHover: true,
    		delay: 3500
    	},
		autoScaleSlider: false,
		controlsInside: false,
    		controlNavigation: 'bullets',
		imageScaleMode: 'fill',
		imgWidth: null,
		imgHeight: 475,
		keyboardNavEnabled: true,
		loop: true,
		loopRewind: true,
		navigateByClick: false,
		thumbsFitInViewport: true,
		transitionType: 'move',
		sliderDrag: true,
		sliderTouch: true,
		slidesSpacing: 0,
		startSlideId: 0
	});
});