  
  <footer class="footer-bg m-top0">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-12 m-bottom2">
          <div class="call-to-action clearfix"><span class="fa fa-envelope-o font30 left"></span>
            <div class="feature-icon-col font-white left-padd9 m-top1">
              <h2 class="font20 font-white m-bottom1">Email</h2>
              <p><a href="mailto:info@example.com">info@example.com</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 m-bottom2">
          <div class="call-to-action clearfix"><span class="fa fa-phone font30 left"></span>
            <div class="feature-icon-col font-white left-padd9 m-top1">
              <h2 class="font20 font-white m-bottom1">Phone</h2>
              <p>+1 123 4567 890</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 m-bottom2">
          <div class="call-to-action clearfix"><span class="fa fa-map-marker font30 left"></span>
            <div class="feature-icon-col font-white left-padd9 m-top1">
              <h2 class="font-white font20 m-bottom1">Location</h2>
              <p>Road #152, Chorley, NJ, USA</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <div class="copyrights">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-12">
          <ul class="social-icons">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-flickr"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            <li><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
            <li><a href="#"><i class="fa fa-rss"></i></a></li>
          </ul>
        </div>
        <div class="col-md-12 m-top4"> Copyright &copy; 2016 yourdomian. All Rights Reserved. </div>
      </div>
    </div>
  </div>
  <!-- end footer --> 
</div>
<!-- site wrapper end --> 

<a href="#" class="scrollup"></a> 
<!-- end scroll to top of the page--> 

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery.min.js"></script> 

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script> 

<!-- MasterSlider --> 
<script src="js/masterslider/jquery.easing.min.js"></script> 
<script src="js/masterslider/masterslider.min.js"></script> 
<script type="text/javascript">	
(function($) {
  "use strict";	
	    var slider = new MasterSlider();

	    // adds Arrows navigation control to the slider.
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
</script> 

<!-- load cubeportfolio --> 
<script type="text/javascript" src="js/cubeportfolio/jquery-latest.min.js"></script> 
<script type="text/javascript" src="js/cubeportfolio/jquery.cubeportfolio.min.js"></script> 

<!-- init cubeportfolio --> 
<script type="text/javascript" src="js/cubeportfolio/main4.js"></script> 

<!-- Forms --> 
<script src="js/form/jquery-ui.min.js"></script> 
<script src="js/form/jquery.form.min.js"></script> 
<script src="js/form/jquery.validate.min.js"></script> 
<script type="text/javascript">
(function($) {
  "use strict";
	$(function()
			{
				// Datepickers
				$('#start').datepicker({
					dateFormat: 'dd.mm.yy',
					prevText: '<i class="fa fa-chevron-left"></i>',
					nextText: '<i class="fa fa-chevron-right"></i>',
					onSelect: function( selectedDate )
					{
						$('#finish').datepicker('option', 'minDate', selectedDate);
					}
				});
				$('#finish').datepicker({
					dateFormat: 'dd.mm.yy',
					prevText: '<i class="fa fa-chevron-left"></i>',
					nextText: '<i class="fa fa-chevron-right"></i>',
					onSelect: function( selectedDate )
					{
						$('#start').datepicker('option', 'maxDate', selectedDate);
					}
				});
				
				// Validation
				$("#sky-form").validate(
				{					
					// Rules for form validation
					rules:
					{
						name:
						{
							required: true
						},
						email:
						{
							required: true,
							email: true
						},
						phone:
						{
							required: true
						},
						interested:
						{
							required: true
						},
						budget:
						{
							required: true
						}
					},
										
					// Messages for form validation
					messages:
					{
						name:
						{
							required: 'Please enter your name'
						},
						email:
						{
							required: 'Please enter your email address',
							email: 'Please enter a VALID email address'
						},
						phone:
						{
							required: 'Please enter your phone number'
						},
						interested:
						{
							required: 'Please select interested service'
						},
						budget:
						{
							required: 'Please select your budget'
						}
					},

					// Ajax form submition
					submitHandler: function(form)
					{
						$(form).ajaxSubmit(
						{
							beforeSend: function()
							{
								$('#sky-form button[type="submit"]').addClass('button-uploading').attr('disabled', true);
							},
					    uploadProgress: function(event, position, total, percentComplete)
					    {
					    	$("#sky-form .progress").text(percentComplete + '%');
					    },
							success: function()
							{
								$("#sky-form").addClass('submited');
								$('#sky-form button[type="submit"]').removeClass('button-uploading').attr('disabled', false);
							}
						});
					},	
					
					// Do not change code below
					errorPlacement: function(error, element)
					{
						error.insertAfter(element.parent());
					}
				});
			});	
	})(jQuery);		
</script> 

<!-- Scroll to Fixied Sticky --> 
<script src="js/mainmenu/sticky.js" type="text/javascript"></script> 

<!-- Scroll Up --> 
<script src="js/scrolltotop/totop.js" type="text/javascript"></script> 

<!-- Counters --> 
<script src="js/aninum/jquery.animateNumber.min.js"></script>
</body>
</html>