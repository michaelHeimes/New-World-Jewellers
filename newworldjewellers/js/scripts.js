jQuery( document ).ready(function($) {

	// Add header BG when scrolled past entry header	
	$(window).scroll(function() {
	    var scroll = $(window).scrollTop(); // how many pixels you've scrolled
	    var os = $('#masthead').offset().top; // pixels to the top of div1
	    var ht = $('#masthead').height(); // height of div1 in pixels
	    var nh = $('.main-navigation').height();
	    // if you've scrolled further than the top of div1 plus it's height
	    // change the color. either by adding a class or setting a css property
	    if (scroll > os + ht - nh) {
	        $('.main-navigation').addClass('header-bg');
	    } else {
	        $('.main-navigation').removeClass('header-bg');
	    }
	});	
	
// 	BG Color Change on Prodcut Hover
	$('ul.products li.product > a').hover(
function(){$(this).parent().toggleClass('link-hovered');}
	);
	
	
			
    console.log( "scripts ready son!" );
});

