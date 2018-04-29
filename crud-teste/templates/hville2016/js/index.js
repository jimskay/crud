 
			$(document).ready(function() {
				//responsive menu toggle
				$("#menutoggle").click(function() {
					$('.xs-menu').toggleClass('displaynone');

					});
				//add active class on menu
			//	$('ul li').click(function(e) {					
			//		$('li').removeClass('active');
			//		$(this).addClass('active');
			//	});

			//drop down menu	

				$(".drop-down").hover(function() {					 
					$(this).children('.mega-menu').addClass('display-on');
				});

				$(".drop-down").mouseleave(function() {
					$(this).children('.mega-menu').removeClass('display-on');
				});				
			
			});