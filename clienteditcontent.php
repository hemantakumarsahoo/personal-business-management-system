<?php
	
	$email=$_GET["emailid"];
	include "config.php";
	$sql="select * from client_master where emailid='".$email."'";
	$q=mysqli_query($con,$sql);
	$arr=mysqli_fetch_array($q); 
	$f="";
	$m="";
	if($arr["gender"]=="Female")
	{
		$f="checked";
		}
		else
		{
			$m="checked";
			}
	
?>

<div class="col-sm-4">
</div>
<div class="col-sm-4">

<form method="post" action="clientupdate.php">
<fieldset class="form-group">
    <label for="exampleInputPassword1">Name</label>
   <input type="text" class="form-control"  value="<?php echo $arr["Name"];?>" name="name">
  </fieldset>
  <fieldset class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" value="<?php echo $arr["emailid"];?>" name="emailid">
    <small class="text-muted">We'll never share your email with anyone else.</small>
  </fieldset>
  <fieldset class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" value="<?php echo $arr["password"];?>" name="pwd">
  </fieldset>
<?php
	$fc=null;
	$nn=null;
	$bf=null;
	$br=null;
	if($arr["securityquestion"]=='fav color')
	{
		$fc='selected';
	}
	else if($arr["securityquestion"]=='nick name')
	{
		$nn='selected';
		}
		else if($arr["securityquestion"]=='best frnd')
	{
		$bf='selected';
		}
		else if($arr["securityquestion"]=='birthday')
	{
		$br='selected';
		}
		?>
    
  <fieldset class="form-group">
    <label for="sq">securityquestion</label>
    <select class="form-control"  name="sq">
      <option value="<?php echo $fc; ?>">fav color</option>
      <option value="<?php echo $nn; ?>">nick name</option>
      <option value="<?php echo $bf; ?>">best frnd</option>
      <option value="<?php echo $br; ?>">birthday</option>
    </select>
  </fieldset>
  
  <fieldset class="form-group">
    <label for="exampleInputPassword1">answer</label>
    <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $arr["answer"];?>" name="ans">
  </fieldset>
  
  
   <fieldset class="form-group">
    <label for="city">City</label>
    <input type="text" class="form-control"  value="<?php echo $arr["city"];?>" name="city">
  </fieldset>
  
   <fieldset class="form-group">
    <label for="exampleInputPassword1">State</label>
    <input type="text" class="form-control"  value="<?php echo $arr["state"];?>" name="state">
  </fieldset>
  
   <fieldset class="form-group">
    <label for="exampleInputPassword1">Country</label>
    <input type="text" class="form-control"  value="<?php echo $arr["country"];?>"name="country">
  </fieldset>
  
   <fieldset class="form-group">
    <label for="exampleInputPassword1">Zipcode</label>
    <input type="text" class="form-control"  value="<?php echo $arr["zipcode"];?>" name="zip">
  </fieldset>
  
   <fieldset class="form-group">
    <label for="exampleInputPassword1">Contact no</label>
    <input type="text" class="form-control"  value="<?php echo $arr["contactno"];?>" name="contactno">
  </fieldset>
  
   <fieldset class="form-group">
    <label for="gen">Gender</label>
   <div class="radio">
    <label>
      <input type="radio"  value="Female" name="gender" <?php echo $f;?>>
      Female
    </label>
     </div>
      <div class="radio">
    <label>
      <input type="radio"   value="Male" name="gender" <?php echo $m;?>>
      Male
    </label>
  </div>
  </fieldset>
  
  <fieldset class="form-group">
    <label for="exampleTextarea">About me</label>
    <textarea class="form-control"  rows="3" name="aboutme"> <?php echo $arr["aboutme"];?></textarea>
  </fieldset>
  <button type="submit" class="btn btn-primary" name="update">Update</button>
  
</form>
</div>
<div class="col-sm-4">
</div>
<div style="clear:both"></div>