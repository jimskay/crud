$(document).ready(function(){
	
	//Check to see if the window is top if not then display button
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.ui-corner-all').fadeIn();
		} else {
			$('.ui-corner-all').fadeOut();
		}
	});
	
	//Click event to scroll to top
	$('.ui-corner-all').click(function(){
		$('html, body').animate({scrollTop : 0},200);
		return false;
	});
	
});