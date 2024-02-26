<?php
include"top.php";
include"menu.php";
?>
<?php
if(isset($_POST['forgot'])){
    
   $empid=$_POST['empid'];   
   $sq=$_POST['sq'];
   $ans=$_POST['ans'];
   include "config.php";
  $sql="select * from developer_master where
 empid='".$empid."' and securityquestion='".$sq."' and answer='".$ans."'";
 
  $q=mysqli_query($con,$sql);
if($arr=mysqli_fetch_array($q))
{

	$msg= "your password is  " .$arr["password"];
}
else
	{
		$msg= "Invalid input data!";
	}
  
}
 ?>
<div class="col-sm-3"></div>
<div class="col-sm-6">

<h2><center>forgot your password??</center></h2>
<form method="post" id="devforgotform">    
  <fieldset class="form-group">
    <label for="exampleInputEmail1">Employee ID</label>
    <input type="text" class="form-control" name="empid">
  
  </fieldset>
 
  <fieldset class="form-group">
    <label for="exampleSelect1">Security Question</label>
    <select class="form-control" id="exampleSelect1" name="sq">
       <option>What is your favourite color?</option>
      <option>What is your nick name?</option>
    </select>
  </fieldset>
  
  <fieldset class="form-group">
    <label for="exampleInputPassword1">answer</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="ans">
  </fieldset>
<button type="submit" class="btn btn-primary" name="forgot">Submit</button>
<?php
if(isset($msg))
{
	echo '<p class="text-danger">'.$msg.'</p>';
}
?>
</form>
</div>


<div class="col-sm-3">
</div>
<div style="clear:both;"></div>
                 



<?php
include"foot.php";
?>