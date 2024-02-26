<?php
if(isset($_POST["login"]))
{
  $empid=$_POST['empid'];
  $pwd=$_POST['pwd'];
  
  include "config.php";
  $sql="select * from developer_master where empid='".$empid."' and password='".$pwd."'";
    
	 $q=mysqli_query($con,$sql);
	 
    if($arr=mysqli_fetch_array($q))
	{
	
	 $status=$arr['status'];
		if($status=="1")
		{
		  $_SESSION['empid']=$empid;
	 header('location:developerhome.php');
		}
		else
	{
		$msg= "Account is block contact to Admin!";
	}
    }
else
	{
		$msg="invalid userid or password!";
	}
  
}
?>
<div class="col-sm-3">
</div>

<div class="col-sm-6">
<h2><center>Developer Login</center></h2>
<form method="post" id="devlogform">
<fieldset class="form-group">
    <label for="exampleInputEmail1">Employee ID</label>
    <input type="text" class="form-control" name="empid">
      </fieldset>
  <fieldset class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="pwd">
  </fieldset>
<button type="submit" class="btn btn-primary" name="login">Login</button>
                              
                              
                              <ul class="new">
								<li class="new_left"><p><a href="developerforgotpwd.php">Forgot Password ?</a></p></li>
								<li class="new_right"><p class="sign">New here ?&nbsp;&nbsp;<a href="developerregister.php" >Sign Up</a></p></li>
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