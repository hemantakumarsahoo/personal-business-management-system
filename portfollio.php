<?php
include "top.php";
include "menu.php";
?>
<div class="about_top">
<h3 class="text-center">PORTFOLLIO DETAILS</h3><br>
 <div class="container">
 
 
	<div class="row">
    
    
    
    <?php
	include "config.php";
	$sql="select * from portfollio_details";
	$q=mysqli_query($con,$sql);
	while($arr=mysqli_fetch_array($q))
	{
    echo '<div class="col-sm-3 portfollio">
    
    <img src="portfollio/'.$arr['image'].'" />
    <p>'.$arr['projectname'].'</p>
    <p>'.$arr['client'].'</p>
    <p>'.$arr['description'].'</p>
    
    
    </div>';
	}
    ?>
    
    </div>
    
    
    
    
        <div class="clearfix"> </div>
    </div>
</div>
<?php
include "foot.php";
?>