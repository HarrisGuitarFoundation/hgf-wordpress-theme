callColorbox = function(){
	$('.colorbox').colorbox();
	$('.youtube').colorbox({iframe:true, innerWidth:640, innerHeight:390});
}

addPatternAfterTan = function(){
	$('.collection-content .ezcol-two-third p:last-of-type').after('<span class="single-close-up">Click on images for close up.</span>');
}


// DOM Ready
$(function() {
	
	// SVG fallback
	// toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script#update
	if (!Modernizr.svg) {
		var imgs = document.getElementsByTagName('img');
		var dotSVG = /.*\.svg$/;
		for (var i = 0; i != imgs.length; ++i) {
			if(imgs[i].src.match(dotSVG)) {
				imgs[i].src = imgs[i].src.slice(0, -3) + "png";
			}
		}
	}

	

	$.getScript('wp-content/themes/hgf-wordpress-theme/js/jquery.colorbox-min.js', function()
	{
	    callColorbox();
	    addPatternAfterTan();
	});

});