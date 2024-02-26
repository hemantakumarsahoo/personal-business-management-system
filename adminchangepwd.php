<?php
include"admintop.php";
include"adminmenu.php";
?>
<?php

if(isset($_POST['change'])){
    
   $oldpwd=$_POST['opwd'];   
   $newpwd=$_POST['npwd'];
   include "config.php";
  $sql="update admin_master set password = '".$newpwd."' where
  password = '".$oldpwd."' and adminid='". $_SESSION['adminid']."'";
 
  $q=mysqli_query($con,$sql);
  if ($q)
{

	$msg="Password changed successfully!! " ;
}
else
	{
		echo "wrong input data!";
	}
  
}
 ?>


<div class="col-sm-3"></div>
<div class="col-sm-6">

<center>
<form method="post" id="adminchangeform">
<u>Change password</u>
<table>
<tr><td>Current Password:</td><td><input type="password" name="opwd"/></td></tr>

<tr><td>New Password:</td><td><input type="password" name="npwd"/></td></tr>
<tr><td>Confirm Password:</td><td><input type="password" name="cpwd"/></td></tr>
<tr><td></td>
<td><input type="submit" value="submit" name="change"/></td>
</tr>
</table>

                       
       <?php
	   if(isset($msg))
	   {
		  echo '<p class="text-danger">'.$msg.'</p>'; 
		}
	   ?>    
</form>
</center>
</div>
<div class="col-sm-3"></div>

<div style="clear:both;"></div>
<?php
include"foot.php";
?>