<?php
if(isset($_POST['change'])){
    
   $oldpwd=$_POST['opwd'];   
   $newpwd=$_POST['npwd'];
   include "config.php";
  $sql="update developer_master set password = '".$newpwd."' where
  password = '".$oldpwd."'";
 
  $q=mysqli_query($con,$sql);
  if($q)
{

	$msg="Password changed successfully!! " ;
}
else
	{
		$msq="Invalid input data!";
	}
  
}
 ?>


<div class="col-sm-3"></div>
<div class="col-sm-6">

<h2><center>Change your password</center></h2>
<form method="post" id="devchangeform">    
  <fieldset class="form-group">
   <label for="exampleInputEmail1">Current password</label>
    <input type="password" class="form-control" name="opwd">    
  </fieldset> 
  <fieldset class="form-group">
   <label for="exampleInputEmail1">New password</label>
    <input type="password" class="form-control" name="npwd">    
  </fieldset> 
  <fieldset class="form-group">
   <label for="exampleInputEmail1">Confirm password</label>
    <input type="password" class="form-control" name="npwd">    
  </fieldset> 
  
<button type="submit" class="btn btn-primary" name="change">Submit</button>
   <?php 
			if(isset($msg))
			{
				echo $msg;
				
			}
			?>
</form>
</div>
<div class="col-sm-3"></div>

<div style="clear:both;"></div>