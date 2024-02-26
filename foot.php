<div class="footer_widget">
	<div class="container">
		<div class="col-md-4">
			<aside id="text-1" class="widget widget_text">
				<h5 class="widget-title"><span>Quick Links</span></h5>
				<div class="textwidget"><a href="aboutus.php"> >About Us</a>
                <br/>
                <a href="services.php"> >Services</a>
                <br/>
                <a href="portfollio.php"> >Portfollio</a>
                <br/>
                <a href="#"> >Contact Us</a>
                
				   
				</div> 
			</aside>
		</div>
		<div class="col-md-4">
			<aside id="text-2" class="widget widget_text">
				<h5 class="widget-title"><span>About Us</span></h5>
				<div class="textwidget">
					<p>Pbms  is a technology partner of choice for global organizations looking to strategically transform, grow, and lead in today’s challenging business environment.Backed by a strong track-record of innovation, over 7000 associates and footprint in more than 20 global locations.</p></div>
		    </aside>
		</div>
		<div class="col-md-4">
			<aside>
				<h3 class="widget-title"><span>OUR PARTNERS</span></h3>
				<ul class="gallery">
					<li><a href="images/pic5.jpg" class="img-responsive" title="Rose" rel="title1">
						<img src="images/pic5.jpg" class="img-responsive" alt="name">
					   </a>
					</li>
					<li><a href="images/pic6.jpg" class="img-responsive" title="Rose" rel="title1">
						<img src="images/pic6.jpg" class="img-responsive" alt="name">
					   </a>
					</li>
					<li><a href="images/pic11.jpg" class="img-responsive" title="Rose" rel="title1">
						<img src="images/pic11.jpg" class="img-responsive" alt="name">
					   </a>
					</li>
					<li class="last">
						<a href="images/pic12.jpg" class="img-responsive" title="Rose" rel="title1">
						<img src="images/pic12.jpg" class="img-responsive" alt="name">
					   </a>
					</li>
					<li>
						<a href="images/pic6.jpg" class="img-responsive" title="Rose" rel="title1">
						<img src="images/pic6.jpg" class="img-responsive" alt="name">
					   </a>
					</li>
					<li>
					   <a href="images/pic5.jpg" class="img-responsive" title="Rose" rel="title1">
						<img src="images/pic5.jpg" class="img-responsive" alt="name">
					   </a>
				    </li>
					<li>
						<a href="images/pic11.jpg" class="img-responsive" title="Rose" rel="title1">
						<img src="images/pic11.jpg" class="img-responsive" alt="name">
					   </a>
					</li>
					<li class="last">
						<a href="images/pic12.jpg" class="img-responsive" title="Rose" rel="title1">
						<img src="images/pic12.jpg" class="img-responsive" alt="name">
					   </a>
				    </li>
					<div class="clearfix"> </div>
				</ul>
			</aside>
		</div>
	</div>
</div>
<div class="footer_middle">
	<div class="container">
       <br />
    </div>
</div>		
<div class="footer_bottom">
	<div class="container">
		<div class="copy">
            <p>Copyright © 2023 seeree. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">STUDENT</a> </p>
	    </div>
	</div>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;">TOP </span></a>
      <script type="text/javascript" src="js/move-top.js"></script>
      <script type="text/javascript" src="js/easing.js"></script>
      <script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
	  			containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
	 		};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	  </script>
</div>	
<!----language selector----->
<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
<link href="css/jquery.uls.css" rel="stylesheet"/>
<link href="css/jquery.uls.grid.css" rel="stylesheet"/>
<link href="css/jquery.uls.lcd.css" rel="stylesheet"/>
<!-- Source -->
<script type="text/javascript" src="js/JQuery.js"></script>
<script src="js/jquery.uls.data.js"></script>
<script src="js/jquery.uls.data.utils.js"></script>
<script src="js/jquery.uls.lcd.js"></script>
<script src="js/jquery.uls.languagefilter.js"></script>
<script src="js/jquery.uls.regionfilter.js"></script>
<script src="js/jquery.uls.core.js"></script>
<script type="text/javascript" src="js/valid.js"></script>
<script type="text/javascript" src="js/myscript.js"></script>
<script>
	$( document ).ready( function() {
		$( '.uls-trigger' ).uls( {
			onSelect : function( language ) {
				var languageName = $.uls.data.getAutonym( language );
				$( '.uls-trigger' ).text( languageName );
			},
			quickList: ['en', 'hi', 'he', 'ml', 'ta', 'fr'] //FIXME
		} );
	} );
</script>		
<!-- FlexSlider -->
<link href="css/flexslider.css" rel='stylesheet' type='text/css' />
<script defer src="js/jquery.flexslider.js"></script>
	  <script type="text/javascript">
		$(function(){
		  SyntaxHighlighter.all();
		});
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	  </script>
<!-- FlexSlider -->		
</body>
</html>