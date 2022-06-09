(function($) {
  "use strict";	
	    var slider = new MasterSlider();

	    slider.control('arrows', {insertTo:'#masterslider'});
	    slider.control('timebar');
	    slider.control('bullets');

	     slider.setup('masterslider' , {
	         width:1020,    // slider standard width
	         height:750,   // slider standard height
	         space:1,
	         layout:'fullwidth',
	         loop:true,
	         preload:0,
	         autoplay:true
	    });
	    
	    SyntaxHighlighter.all();
})(jQuery);