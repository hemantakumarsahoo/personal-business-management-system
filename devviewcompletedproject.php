<?php
include "developertop.php";
include "developermenu.php";
$pid=$_POST['pid'];
$cid=$_POST['cid'];

?>
<div class="container">
<div class="row">

<div class="col-sm-6">  
 <center> <h3><font color="#00CC00">Project Details</font></h3></center>
 <?php
include "config.php";
$q=mysqli_query($con,"select * from client_project where pid='".$pid."'");

if($arr=mysqli_fetch_array($q))
{
	
	echo '<table class="table-bordered table">';
	
	echo '<tr>';
   	echo '<td>Project Name:</td>'.'<td>'.$arr["pname"].'</td>';
	echo '</tr>';
	
	echo '<tr>';
   	echo '<td>Description:</td>'.'<td>'.$arr["description"].'</td>';
	echo '</tr>';
	
	echo '<tr>';
	echo '<td>Technology:</td>'.'<td>'.$arr["technology"].'</td>';
	echo '</tr>';
	
	echo '<tr>';
	echo '<td>Excepted Cost:</td>'.'<td>'.$arr["expectedcost"].'</td>';
	echo '</tr>';
	 
	echo '<tr>';
	echo '<td>Complete Duration:</td>'.'<td>'.$arr["duration"].'</td>';
	echo '</tr>';
	
	echo '<td>';
	echo '<input type="hidden" value="'.$arr['pid'].'" name="pid"/>';
	echo '</td>';
	echo '</table>';
	
}
?>
</div>
<div class="col-sm-6">
<center> <h3><font color="#00CC00">Client Details</font></h3></center>
 <?php
$q=mysqli_query($con,"select * from client_master where emailid='".$cid."'");

if($arr=mysqli_fetch_array($q))
{
	
	echo '<table class="table-bordered table">';
	
	echo '<tr>';
   	echo '<td>Name:</td>'.'<td>'.$arr["Name"].'</td>';
	echo '</tr>';
	
	echo '<tr>';
   	echo '<td>Email id:</td>'.'<td>'.$arr["emailid"].'</td>';
	echo '</tr>';
	
	echo '<tr>';
	echo '<td>City:</td>'.'<td>'.$arr["city"].'</td>';
	echo '</tr>';
	
	echo '<tr>';
	echo '<td>State:</td>'.'<td>'.$arr["state"].'</td>';
	echo '</tr>';
	
	echo '<tr>';
	echo '<td>Country:</td>'.'<td>'.$arr["country"].'</td>';
	echo '</tr>';
	 
	echo '<tr><td>';
	echo '<input type="hidden" value="'.$arr['emailid'].'" name="emailid"/>';
	echo '</td></tr>';
	echo '</table>';

	
}

?>
</div>
<div class="col-sm-1">
</div>
<div style="clear:both;">
</div>
</div>
</div>


<div class="container">
<div class="row">

<div class="col-sm-6">

	<center> <h3><font color="#00CC00">Project Status Details</font></h3></center>
 <?php
$q=mysqli_query($con,"select * from project_assigned where projectid='".$pid."'");

if($arr=mysqli_fetch_array($q))
{
	
	echo '<table class="table-bordered table">';
	
	echo '<tr>';
   	echo '<td>Developer ID:</td>'.'<td>'.$arr["developerid"].'</td>';
	echo '</tr>';
	
	echo '<tr>';
   	echo '<td>Remarks:</td>'.'<td>'.$arr["remarks"].'</td>';
	echo '</tr>';
	
	echo '<tr>';
	echo '<td>Assigndate:</td>'.'<td>'.$arr["assigndate"].'</td>';
	echo '</tr>';
	
	echo '<tr>';
	echo '<td>Progress Status:</td>'.'<td>'.$arr["progressstatus"].'</td>';
	echo '</tr>';
	 
	
	echo '</table>';
	
}
?>


</div>
<div class="col-sm-4">
<br />
<br />
<form method="post">

<input type="hidden" value="<?php echo $pid;?>" name="pid" />
<input type="hidden" value="<?php echo $cid;?>" name="cid" />
<input type="hidden" value="<?php echo $devid;?>" name="devid" />
	<fieldset class="form-group">
    <label for="sq">(Completed Project & Delivered!!)</label>
   
  </fieldset>
 
  
  <a href="devcompletedproject.php"> <button type="button" class="btn btn-primary">View Another Project</button></a>
  <?php 
			if(isset($msg))
			{
				echo '<p class="text-success">'.$msg.'</p>';
				
			}
			?>
  </form>

<br />
</div>
<div class="col-sm-4"></div>

<div style="clear:both;">
</div>
</div>
</div>
<?php
include "foot.php";

?>