$(document).ready(function(){
	$('.slide').slick({
		autoplay: false,
		arrows: false,
		dots: false
	});

	$('.slide2').slick({
		autoplay: false,
		dots: false,
		infinite: true,
  		slidesToShow: 5,
  		slidesToScroll: 1,
  		arrows:false,
  		autoplay:true,
  		responsive: [
		    {
		      breakpoint: 768,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 3,
		        infinite: true,
		        
		      }
    	}]
	});

	$('.counter').counterUp({
        delay: 100,
        time: 1000
    });
});