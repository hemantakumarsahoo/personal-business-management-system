<?php
	$emailid=$_SESSION["emailid"];
	include "config.php";
	$sql="select * from client_master where emailid='".$emailid."'";
	$q=mysqli_query($con,$sql);
	$arr=mysqli_fetch_array($q);
	$f="";
	$m="";
	if($arr['gender']=="Female")
	{
		$f="checked";
	}
	else
	{
		$m="checked";
	}
	
	if(isset($_POST["upload"]))
    {
		$cphoto=$_FILES['cphoto']['tmp_name'];
		$name=$emailid.'.jpg';
		$i=move_uploaded_file($cphoto,"clientphoto/".$name);
		if($i)
		{
			$sql1="update client_master set photo='".$name."' where emailid='".$emailid."'";
	mysqli_query($con,$sql1);
			header('location:clientprofile.php');
    }
}
	
?>
<div class="col-sm-2">
</div>
<div class="col-sm-4">
<h3>My Photo</h3>
<div class="photo">
<img src="clientphoto/<?php echo $arr["photo"];?>" height="150" width="150" />
	</div>
      <form method="post" enctype="multipart/form-data">
<input type="file" name="cphoto" /><br/>
<input type="submit" value="Upload" name="upload" />
</form>
	</p>
	</div>

<div class="col-sm-4">

<center><h4 style="font-style:italic;color:#039">Client Profile</h4></center>

<form method="post" action="clientprofileupdate.php">



<fieldset class="form-group">
    <label for="exampleInputPassword1">Name</label>
    <input type="text" class="form-control"  name="name" value="<?php echo $arr["Name"];?>">
  </fieldset>

      <fieldset class="form-group">
    <label for="exampleInputEmail1">Emaiid</label>
    <input type="email" class="form-control"  name="email" value="<?php echo $arr["emailid"];?>">
  </fieldset>
  
  
  
  <fieldset class="form-group">
    <label for="sq">Security Question</label>
    <select class="form-control"  name="sq"  value="<?php echo $arr["securityquestion"];?>">
      <option>What is your favourite color?</option>
      <option>What is your nick name?</option>
    </select>
  </fieldset>
  
  <fieldset class="form-group">
    <label for="exampleInputPassword1">answer</label>
    <input type="text" class="form-control"  name="ans"  value="<?php echo $arr["answer"];?>">
  </fieldset>
  
  
   <fieldset class="form-group">
    <label for="city">City</label>
    <input type="text" class="form-control"  name="city"  value="<?php echo $arr["city"];?>">
  </fieldset>
  
   <fieldset class="form-group">
    <label for="exampleInputPassword1">State</label>
    <input type="text" class="form-control"   name="state"  value="<?php echo $arr["state"];?>">
  </fieldset>
  
   <fieldset class="form-group">
    <label for="exampleInputPassword1">Country</label>
    <input type="text" class="form-control"  name="country"  value="<?php echo $arr["country"];?>">
  </fieldset>
  
   <fieldset class="form-group">
    <label for="exampleInputPassword1">Zipcode</label>
    <input type="text" class="form-control"  name="zip"  value="<?php echo $arr["zipcode"];?>">
  </fieldset>
  
   <fieldset class="form-group">
    <label for="exampleInputPassword1">Contact no</label>
    <input type="text" class="form-control"   name="contact"  value="<?php echo $arr["contactno"];?>">
  </fieldset>
  
   <fieldset class="form-group">
    <label for="gen">Gender</label>
   <div class="radio">
    <label>
      <input type="radio"  value="Female" name="gen" <?php echo $f?>>
      Female
    </label>
     </div>
      <div class="radio">
    <label>
      <input type="radio"   value="Male" name="gen"  <?php echo $m;?>>
      Male
    </label>
  </div>
  </fieldset>
  
  <fieldset class="form-group">
    <label for="exampleTextarea">About me</label>
    <textarea class="form-control"  rows="3" name="aboutme"  ><?php echo $arr["aboutme"];?></textarea>
  </fieldset>
  
  
  
  
      <button type="submit" class="btn btn-primary" name="update">Update</button>
              <a href="clienthome.php">     
      <button type="button" class="btn btn-primary" value="cancel" name="cancel">Cancel</button>
                              </a>

                             
</form>
</div>
</div>
</div>
                        
                           
                        </div>
				    </div>
				 </div>
                 </div>
                          
                 

<div class="col-sm-2">
</div>

<div style="clear:both;"></div>