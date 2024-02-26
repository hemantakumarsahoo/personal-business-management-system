<?php
include"top.php";
include"menu.php";
?>
<?php
if(isset($_POST["register"]))
 {
   $name=$_POST["name"];
   $email=$_POST["email"];
   $pwd=$_POST["pwd"];
   $sq=$_POST["sq"];
   $ans=$_POST["ans"];
    $city=$_POST["city"];
   $state=$_POST["state"];
    $country=$_POST["country"];
   $zip=$_POST["zip"];
    $contact=$_POST["contact"];
	 $gen=$_POST["gen"];
   $about=$_POST["about"];
   
   
   include "config.php";
  $sql="insert into client_master
  values('".$name."','".$email."','".$pwd."','".$sq."','".$ans."','".$city."','".$state."','".$country."','".$zip."','".$contact."','".$gen."','".$about."','1','client.jpg')";
  
  $i=mysqli_query($con,$sql);
    if($i)
	{
     $msg="Registration Successfull";    
	}
	else
	{
		$msg="Not registered properly";
	}
 }
?>
<div class="col-sm-3"></div>
<div class="col-sm-6">

<h2><center>Client Sign Up</center></h2>
<form method="post" id="regform">
<fieldset class="form-group">
    <label for="exampleInputPassword1">Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1"  name="name">
  </fieldset>
  <fieldset class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email">
    </fieldset>
  <fieldset class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="pwd">
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
    <input type="text" class="form-control" id="exampleInputPassword1"  name="ans">
  </fieldset>
  
  
   <fieldset class="form-group">
    <label for="city">City</label>
    <input type="text" class="form-control" name="city">
  </fieldset>
  
   <fieldset class="form-group">
    <label for="exampleInputPassword1">State</label>
    <input type="text" class="form-control"  name="state">
  </fieldset>
  
   <fieldset class="form-group">
    <label for="exampleInputPassword1">Country</label>
    <input type="text" class="form-control"  placeholder="country" name="country">
  </fieldset>
  
   <fieldset class="form-group">
    <label for="exampleInputPassword1">Zipcode</label>
    <input type="text" class="form-control"  name="zip">
  </fieldset>
  
   <fieldset class="form-group">
    <label for="exampleInputPassword1">Contact no</label>
    <input type="text" class="form-control"  name="contact">
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
      <input type="radio"   value="Male" name="gen">
      Male
    </label>
  </div>
  </fieldset>
  
  <fieldset class="form-group">
    <label for="exampleTextarea">About me</label>
    <textarea class="form-control"  rows="3" name="about"></textarea>
  </fieldset>
   <button type="submit" class="btn btn-primary" name="register">Submit</button>
   
</form>
   <?php
if(isset($msg))
{
	echo '<p class="text-danger">'.$msg.'</p>';
}
?>
            </p>
</div>

<div class="col-sm-3">
</div>
<div style="clear:both;"></div>

<?php
include"foot.php";
?>