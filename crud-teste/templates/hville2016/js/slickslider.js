 $(document).on('ready', function() {
      $(".regular").slick({
        dots:false,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 3,
		    variableWidth: true
		
      });
      $(".center").slick({
        dots: true,
        infinite: true,
        centerMode: true,
        slidesToShow: 1,
        slidesToScroll: 1
      });
      $(".variable").slick({
        dots: true,
        infinite: true,
        variableWidth: true
      });
    });
