<?php
include "clienttop.php";
include "clientmenu.php";
?>
<?php
if(isset($_POST["add"]))
 {
   $pname=$_POST["pname"];
   $desc=$_POST["desc"];
   $tech=$_POST["tech"];
   $expcost=$_POST["expcost"];
   $dura=$_POST["dura"];
     
   include "config.php";
  $sql="insert into client_project values('','".$pname."','".$desc."','".$tech."','".$expcost."','".$dura."','pending','".$_SESSION['emailid']."','".date('d/m/y')."')";
  
  $i=mysqli_query($con,$sql);
    if($i)
	{
		
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

<h2><center>Client Add Project</center></h2>
<form method="post">
<fieldset class="form-group">
    <label for="exampleInputPassword1">Project name</label>
    <input type="text" class="form-control" id="exampleInputPassword1"  name="pname">
  </fieldset>
  <fieldset class="form-group">
    <label for="exampleInputEmail1">Description</label>
    <textarea class="form-control"  rows="3" name="desc"></textarea>
    </fieldset>
  <fieldset class="form-group">
    <label for="exampleInputPassword1">Technology</label>
    <input type="text" class="form-control" name="tech">
  </fieldset>
 
  <fieldset class="form-group">
    <label for="exampleInputPassword1">Expected Cost</label>
    <input type="text" class="form-control" id="exampleInputPassword1"  name="expcost">
  </fieldset>
  
  
   <fieldset class="form-group">
    <label for="city">Complete Duration</label>
    <input type="text" class="form-control" name="dura">
  </fieldset>
    
  </fieldset>
   <button type="submit" class="btn btn-primary" name="add">Add</button>
   
</form>
   <?php 
			if(isset($msg))
			{
				echo '<p class="text-success">'.$msg.'</p>';
				
			}
			?>
            </p>
</div>

<div class="col-sm-3">
</div>
<div style="clear:both;"></div>


<?php
include "clientfoot.php";

?>