callColorbox = function(){
	$('.colorbox').colorbox();
}

addPatternAfterTan = function(){
	$('.tan-background').after('<div class="after-tan"></div>');
	$('.homepage-hero').after('<div class="after-tan"></div>');
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