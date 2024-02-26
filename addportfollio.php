<?php
include "admintop.php";
include "adminmenu.php";
?>
<?php
if(isset($_POST["add"]))
 {
   $pname=$_POST["pname"];
   $cname=$_POST["cname"];
   $desc=$_POST["desc"];
   $fname=$_FILES['photo']['name'];
     
   include "config.php";
  $sql="insert into portfollio_details
  values('','".$pname."','".$cname."','".$desc."','".$fname."')";
  
  $i=mysqli_query($con,$sql);
    if($i)
	{
		move_uploaded_file($_FILES['photo']['tmp_name'],"portfollio/".$fname);
     $msg="Added Successfull";    
	}
	else
	{
		$msg="Not added";
	}
 }
?>

<div class="col-sm-3"></div>
<div class="col-sm-6">

<h2><center>Add Portfollio</center></h2>
<form method="post" enctype="multipart/form-data">
<fieldset class="form-group">
    <label for="exampleInputPassword1">Project name</label>
    <input type="text" class="form-control" id="exampleInputPassword1"  name="pname">
  </fieldset>
  <fieldset class="form-group">
    <label for="exampleInputPassword1">Client</label>
    <input type="text" class="form-control" id="exampleInputPassword2"  name="cname">
  </fieldset>
  <fieldset class="form-group">
    <label for="exampleInputEmail1">Description</label>
    <textarea class="form-control"  rows="3" name="desc"></textarea>
    </fieldset>
  <fieldset class="form-group">
    <label for="exampleInputPassword1">Webscreen</label>
    <input type="file" class="form-control" name="photo">
  </fieldset>
 
 
    
  </fieldset>
   <button type="submit" class="btn btn-primary" name="add">Submit</button>
   
</form>
   <?php 
			if(isset($msg))
			{
				echo $msg;
				
			}
			?>
            </p>
</div>

<div class="col-sm-3">
</div>
<div style="clear:both;"></div>

<?php
include "foot.php";

?>