<?php
include"top.php";
include"menu.php";
?>
<?php
if(isset($_POST["register"]))
 {
   $name=$_POST["name"];
   $empid=$_POST["empid"];
   $pwd=$_POST["pwd"];
   $sq=$_POST["sq"];
   $ans=$_POST["ans"];   
	$tech=$_POST["tech"];
	 $gen=$_POST["gen"];
   $contactno=$_POST["contactno"];
   $email=$_POST["email"];
    $addr=$_POST["addr"];
	 $exp=$_POST["exp"];
   
   
   include "config.php";
  $sql="insert into developer_master
  values('".$name."','".$empid."','".$pwd."','".$sq."','".$ans."','".$tech."','".$gen."','".$contactno."','".$email."','".$addr."','".$exp."','1','developer.jpg')";
  
  $i=mysqli_query($con,$sql);
    if($i){
        $msg="Registration Successfull";
	}
	else
	{
		$msg="Not Registered Properly";
	}
 }
?>
<div class="col-sm-3"></div>
<div class="col-sm-6">

<h2><center>Developer Sign Up</center></h2>
<form method="post" id="regform">
<fieldset class="form-group">
    <label for="exampleInputPassword1">Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="name">
  </fieldset>
  <fieldset class="form-group">
    <label for="exampleInputEmail1">Employee Id</label>
    <input type="text" class="form-control" name="empid">
  </fieldset>
  <fieldset class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control"name="pwd">
  </fieldset>
  <fieldset class="form-group">
    <label for="sq">Security Question</label>
    <select class="form-control"  name="sq">
      <option>What is your favourite color?</option>
      <option>What is your nick name?</option>
    </select>
  </fieldset>
  
  <fieldset class="form-group">
    <label for="exampleInputPassword1">Answer</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="ans">
  </fieldset> 
  
   <fieldset class="form-group">
    <label for="city">Technology</label>
    <input type="text" class="form-control" name="tech">
  </fieldset>
  
  <fieldset class="form-group">
    <label for="gen">Gender</label>
   <div class="radio">
    <label>
      <input type="radio"  value="Female" name="gen">
      Female
    </label>
     </div>
      <div class="radio">
    <label>
      <input type="radio" value="Male" name="gen">
      Male
    </label>
  </div>
  </fieldset> 
  
   <fieldset class="form-group">
    <label for="exampleInputPassword1">Contact No</label>
    <input type="text" class="form-control" name="contactno">
  </fieldset>
  
   <fieldset class="form-group">
    <label for="exampleInputPassword1">Email id</label>
    <input type="email" class="form-control"   name="email">
  </fieldset>
  
   <fieldset class="form-group">
    <label for="exampleInputPassword1">Address</label>
    <input type="text" class="form-control" name="addr">
  </fieldset>
  
   <fieldset class="form-group">
    <label for="exampleInputPassword1">Experience</label>
    <input type="text" class="form-control" name="exp">
  </fieldset>
 
  <button type="submit" class="btn btn-primary" name="register">Submit</button>
</form>
<?php 
if(isset($msg))
{
	echo $msg;
}
?>
</div>

<div class="col-sm-3">
</div>
<div style="clear:both;"></div>

<?php
include"foot.php";
?>