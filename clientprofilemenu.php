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
            <li class="current_page"><a href="home.php">Home</a></li>
          
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Setting<span class="caret"></span></a>
              <ul class="dropdown-menu drop_menu" role="menu">
                <li><a href="clientprofile.php">Profile</a></li>
                <li><a href="clientchangepwd.php">Change Password</a></li>
                
               
              </ul>
            </li>
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Project<span class="caret"></span></a>
              <ul class="dropdown-menu drop_menu" role="menu">
                <li><a href="#">Add</a></li>
                <li><a href="#">Manage</a></li>
                </ul>
                </li>        
            <li><a href="logout.php">Logout</a></li>
        </ul>
        
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
        