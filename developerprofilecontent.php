<?php
    
	$empid=$_SESSION["empid"];
	include "config.php";
	$sql="select * from developer_master where empid='".$empid."'";
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
		$dphoto=$_FILES['dphoto']['tmp_name'];
		$name=$empid.'.jpg';
		$i=move_uploaded_file($dphoto,"developerphoto/".$name);
		if($i)
		{
			$sql1="update developer_master set photo='".$name."' where empid='".$empid."'";
	mysqli_query($con,$sql1);
			header('location:developerprofile.php');
}
}
	
?>
<div class="col-sm-2">
</div>

   <div class="col-sm-4">
<h3>photo</h3>
<div class="photo">
<img src="developerphoto/<?php echo $arr["photo"];?>" height="150" width="150" />
	</div>
      <form method="post" enctype="multipart/form-data">
<input type="file" name="dphoto" /><br/>
<input type="submit" value="Upload" name="upload" />
</form>
	</p>
	</div>

<div class="col-sm-4">

<center><h4 style="font-style:italic;color:#039">Developer Profile</h4></center>

<form method="post" action="developerprofileupdate.php">
<fieldset class="form-group">
    <label for="exampleInputPassword1">Name</label>
    <input type="text" class="form-control"  name="name" value="<?php echo $arr["name"];?>">
  </fieldset>

      <fieldset class="form-group">
    <label for="exampleInputEmail1">Employee Id</label>
    <input type="text" class="form-control"  name="empid" value="<?php echo $arr["empid"];?>">
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
    <label for="technology"></label>
    <input type="text" class="form-control"  name="tech"  value="<?php echo $arr["technology"];?>">
  </fieldset>
  <fieldset class="form-group">
    <label for="gen">Gender</label>
   <div class="radio">
    <label>
      <input type="radio"  value="Female" name="gen"  <?php echo $f?>>
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
    <label for="exampleInputPassword1">Contact no</label>
    <input type="text" class="form-control"  name="contact"  value="<?php echo $arr["contactno"];?>">
  </fieldset>
  
   <fieldset class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="text" class="form-control"  name="email"  value="<?php echo $arr["email"];?>">
  </fieldset>
  
   <fieldset class="form-group">
    <label for="exampleInputPassword1">Address</label>
    <input type="text" class="form-control"   name="addr"  value="<?php echo $arr["address"];?>">
  </fieldset>
  
    <fieldset class="form-group">
    <label for="exampleInputPassword1">Experience</label>
    <input type="text" class="form-control" name="exper"  value="<?php echo $arr["experience"];?>">
  </fieldset>
  
  <button type="submit" class="btn btn-primary" name="update">Update</button>
              <a href="developerhome.php">     
      <button type="button" class="btn btn-primary" value="cancel" name="cancel">Cancel</button></a>
                   
</form>
</div>
</div>
</div>
<div style="clear:both;"></div>

                        </div>
				    </div>
				 </div>
                 </div>
                      
<div class="col-sm-2">
</div>

<div style="clear:both;"></div>