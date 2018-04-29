 $(document).on('ready', function() {
      $(".regular").slick({
        dots:false,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
		variableWidth: true
		
      });
      $(".center").slick({
        dots: true,
        infinite: true,
        centerMode: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });
      $(".variable").slick({
        dots: true,
        infinite: true,
        variableWidth: true
      });
    });
