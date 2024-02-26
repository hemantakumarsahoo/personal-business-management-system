<?php
include "admintop.php";
include "adminmenu.php";
$pid=$_POST['pid'];
$cid=$_POST['cid'];
if(isset($_POST["assign"]))
 {
   $pid=$_POST["pid"];
   $devid=$_POST["devid"];
   $totalcost=$_POST["totalcost"];
   $adate=date('d/m/y');
   include "config.php";
  $sql="insert into project_assigned values('".$pid."','".$devid."','','".$adate."','0')";
  
  $i=mysqli_query($con,$sql);
    if($i)
	{
		mysqli_query($con,"update client_project set status='progress' where pid='".$pid."'");
		
  mysqli_query($con,"insert into client_payment values('".$pid."','".$cid."','".$totalcost."','".$totalcost."','0','')");
		
		
     $msg="Assigened Successfully";    
	}
	else
	{
		$msg="Not added";
	}
 }
?>
<div class="container">
<div class="row">
<div class="col-sm-1">
</div>
<div class="col-sm-5">  
 <center> <h3><font color="#00CC00">Project Details</font></h3></center>
 <?php
include "config.php";
$q=mysqli_query($con,"select * from client_project where pid='".$pid."'");

if($arr=mysqli_fetch_array($q))
{
	
	echo '<table width=100%>';
	
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
<div class="col-sm-5">
<center> <h3><font color="#00CC00">Client Details</font></h3></center>
 <?php
$q=mysqli_query($con,"select * from client_master where emailid='".$cid."'");

if($arr=mysqli_fetch_array($q))
{
	
	echo '<table width=100%>';
	
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

<div class="col-sm-4"></div>
<div class="col-sm-4">
<form method="post">

<input type="hidden" value="<?php echo $pid;?>" name="pid" />
<input type="hidden" value="<?php echo $cid;?>" name="cid" />
	<fieldset class="form-group">
    <label for="sq">Assign this(To Developer)</label>
    <select class="form-control"  name="devid">
      <option>Developer ID</option>
      <?php
$q=mysqli_query($con,"select * from developer_master");

if($arr=mysqli_fetch_array($q))
{
	
     echo '<option value="'.$arr['empid'].'">'.$arr['empid'].'</option>';
}
?>
    </select>
  </fieldset>
  
  <fieldset class="form-group">
    <label for="sq">Total Cost</label>
    <input type="text" name="totalcost" class="form-control" />
  </fieldset>
  
  <button type="submit" class="btn btn-primary" name="assign">Assign</button>
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