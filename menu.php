<nav class="navbar nav_bottom" role="navigation">
 <div class="container">
 <!-- Brand and toggle get grouped for better mobile display -->
   <div class="navbar-header nav_2">
      <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">Menu
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"></a>
   </div> 
    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
        <ul class="nav navbar-nav nav_1">
            <li class="current_page"><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About us</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="portfollio.php">Portfollio</a></li>
            
             
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login<span class="caret"></span></a>
              <ul class="dropdown-menu drop_menu" role="menu">
                <li><a href="clientlogin.php">Client</a></li>
                <li><a href="developerlogin.php">Developer</a></li>
                <li><a href="adminlogin.php">Admin</a></li>
               
              </ul>
            </li>
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Register<span class="caret"></span></a>
              <ul class="dropdown-menu drop_menu" role="menu">
                <li><a href="clientregister.php">Client</a></li>
                <li><a href="developerregister.php">Developer</a></li>
                </ul>
                </li>        
            <li><a href="contactus.php">Contact Us</a></li>
            <li><a href="faq.php">FAQ</a></li>

        </ul>
        <div class="help_line"><div id="txtblnk"><p>HELP LINE : (+91)-06742548713</p></div></div>
     </div><!-- /.navbar-collapse -->
   </div>
   </nav>

        <script type="text/javascript">
		$(function() {
		blinkeffect('#txtblnk');
		})
		function blinkeffect(selector) {
		$(selector).fadeOut('slow', function() {
		$(this).fadeIn('slow', function() {
		blinkeffect(this);
		});
		});
		}
		</script>
        