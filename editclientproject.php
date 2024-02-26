<?php
include "config.php";
if(isset($_GET["delete"]))
{
	$pid=$_GET['pid'];
	
	mysqli_query($con,"delete from client_project where pid='".$pid."'");
	header('location:manageclientproject.php');
}


?>
<?php
include "clienttop.php";
include "clientmenu.php";
?>
<?php
if(isset($_POST["update"]))
 {
   $pid=$_POST["pid"];
   $pname=$_POST["pname"];
   $desc=$_POST["desc"];
   $tech=$_POST["tech"];
   $expcost=$_POST["expcost"];
   $dura=$_POST["dura"];
     
   include "config.php";
  $sql="update client_project set pname='".$pname."',description='".$desc."',technology='".$tech."',expectedcost='".$expcost."',duration='".$dura."' where pid='".$pid."'";
  
  $i=mysqli_query($con,$sql);
    if($i)
	{
     //$msg="Updated Successfull"; 
	 header('location:manageclientproject.php');   
	}
	else
	{
		$msg="Not added";
	}
 }
?>

<div class="col-sm-3"></div>
<div class="col-sm-6">

<h2><center>Client Manage Project</center></h2>
<?php
if(isset($_GET["edit"]))
{
	$pid=$_GET['pid'];
    $q=mysqli_query($con,"select * from client_project where pid='".$pid."'");
	if($arr=mysqli_fetch_array($q))
	{
?>
<form method="post">
<fieldset class="form-group">
    <label for="exampleInputPassword1">Project name</label>
    <input type="hidden"  name="pid" value="<?php echo $arr['pid'];?>">
    <input type="text" class="form-control" id="exampleInputPassword1"  name="pname" value="<?php echo $arr['pname'];?>">
  </fieldset>
  <fieldset class="form-group">
    <label for="exampleInputEmail1">Description</label>
    <textarea class="form-control"  rows="3" name="desc"><?php echo $arr['description'];?></textarea>
    </fieldset>
  <fieldset class="form-group">
    <label for="exampleInputPassword1">Technology</label>
    <input type="text" class="form-control" name="tech" value="<?php echo $arr['technology'];?>">
  </fieldset>
 
  <fieldset class="form-group">
    <label for="exampleInputPassword1">Expected Cost</label>
    <input type="text" class="form-control" id="exampleInputPassword1"  name="expcost" value="<?php echo $arr['expectedcost'];?>">
  </fieldset>
  
  
   <fieldset class="form-group">
    <label for="city">Complete Duration</label>
    <input type="text" class="form-control" name="dura" value="<?php echo $arr['duration'];?>">
  </fieldset>
    
  </fieldset>
   <button type="submit" class="btn btn-primary" name="update">Update</button>&nbsp;&nbsp;&nbsp;
   <a href="manageclientproject.php"><button type="button" class="btn btn-primary">Back Another</button></a>
   
</form>
<?php
}
	
}
?>
   <?php 
			if(isset($msg))
			{
				echo '<p class="text-success">'.$msg.'</p>';
				
			}
			?>
            <br />
            <br />
            </p>
</div>

<div class="col-sm-3">
</div>
<div style="clear:both;"></div>


<?php
include "clientfoot.php";

?>