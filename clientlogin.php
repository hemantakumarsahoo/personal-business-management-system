<?php
include"top.php";
include"menu.php";
?>
<?php
if(isset($_POST["login"]))
{
  $emailid=$_POST['email'];
  $pwd=$_POST['pwd'];
  
  include "config.php";
  $sql="select * from client_master where emailid='".$emailid."' and password='".$pwd."'";
    
	 $q=mysqli_query($con,$sql);
	 
    if($arr=mysqli_fetch_array($q))
	{
		$status=$arr['status'];
		if($status=="1")
		{
		 $_SESSION['emailid']=$emailid;
		 header('location:clienthome.php');
		}
		else
	{
		$msg= "Account is block contact to Admin!";
	}
    }
else
	{
		$msg= "Invalid email id or password!";
	}
  
}
?>
<div class="col-sm-3">
</div>

<div class="col-sm-6">
<h2><center>Client Login</center></h2>
<form method="post" id="loginform">
<fieldset class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email">
    
  </fieldset>
  <fieldset class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="pwd">
  </fieldset>
  <button type="submit" class="btn btn-primary" name="login">Login</button>
                              
                              
                              <ul class="new">
								<li class="new_left"><p><a href="clientforgotpwd.php">Forgot Password ?</a></p></li>
								<li class="new_right"><p class="sign">New here ?&nbsp;&nbsp;<a href="clientregister.php">Sign Up</a></p></li>
								<div class="clearfix"></div>
						     </ul>
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