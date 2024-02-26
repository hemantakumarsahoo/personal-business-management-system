<?php
include"admintop.php";
include"menu.php";
?>
<?php
if(isset($_POST["login"]))
{
  $adminid=$_POST['adminid'];
  $pwd=$_POST['pwd'];
  
  include "config.php";
  $sql="select * from admin_master where adminid='".$adminid."' and password='".$pwd."'";
    
	 $q=mysqli_query($con,$sql);
	 
    if($arr=mysqli_fetch_array($q))
	{
	 $_SESSION['adminid']=$adminid;
	 header('location:adminhome.php');
    }
else
	{
		$msg="Invalid  adminid or password!";
	}
  
}
?>
<div class="col-sm-3">
</div>

<div class="col-sm-6">
<h2><center>Admin Login</center></h2>
<form method="post" id="adminlogform">
<fieldset class="form-group">
    <label for="exampleInputEmail1">Admin ID</label>
    <input type="text" class="form-control" name="adminid">
    
  </fieldset>
  <fieldset class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="pwd">
  </fieldset>
  <button type="submit" class="btn btn-primary" name="login">Login</button>
                              
       <?php
	   if(isset($msg))
	   {
		  echo '<p class="text-danger">'.$msg.'</p>'; 
		}
	   ?>                       
                             
</form>
</div>
</div>
<div style="clear:both;"></div>

                             
                          
                        </div>
				    </div>
				 </div>
                 </div>
                 </div>
                 </div>
                 
                 

<div class="col-sm-3">
</div>

<div style="clear:both;"></div>
<?php
include"foot.php";
?>