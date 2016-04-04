var app = {};

$(function(){
	$('.searchToggle').on('click', function() {
		$('#search-2').slideToggle();
	});
	app.hamburger();
});

app.hamburger = function(){
	$('.hamburger').click(function(){
		if($(this).hasClass('active')) {
			$('.active').removeClass('active');
	    	} else {
	    		$(this).addClass('active');
	    		$('nav').addClass('active');
	    		$('.navFilter').addClass('active');
	    	}
	});
	$('nav ul li a').click(function(){
		$('.active').removeClass('active');
	});
    
}