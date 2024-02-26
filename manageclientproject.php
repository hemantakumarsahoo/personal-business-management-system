<?php
include "clienttop.php";
include "clientmenu.php";
?>
<script>
function msgdisable()
{
	alert("Not Edited or Deleted Bcoz projected is accepted.");
}
</script>

<div class="col-sm-12">  
 <center> <h3><font color="#00CC00">My Projects</font></h3></center>
 <?php
include "config.php";
$q=mysqli_query($con,"select * from client_project where clientid='".$_SESSION['emailid']."'");
echo '<table border="1" class="table table-bordered">';
echo '<tr>';
echo '<th>Name</th>';
echo '<th>Description</th>';
echo '<th>Technology</th>';
echo '<th>Excepted Cost</th>';
echo '<th>Duration</th>';
echo '<th>Date</th>';
echo '<th>Status</th>';
echo '<th>Action</th>';
echo '</tr>';
while($arr=mysqli_fetch_array($q))
{
	echo '<form action="editclientproject.php">';
	echo '<tr>';
	echo '<td>'.$arr["pname"].'</td>';
   	echo '<td>'.$arr["description"].'</td>';
	echo '<td>'.$arr["technology"].'</td>';
	echo '<td>'.$arr["expectedcost"].'</td>'; 
	echo '<td>'.$arr["duration"].'</td>';
	echo '<td>'.$arr["dateofpost"].'</td>';
	echo '<td>'.$arr["status"].'</td>';
	echo '<td>';
	echo '<input type="hidden" value="'.$arr['pid'].'" name="pid"/>';
	if($arr['status']=='pending')
	{
		echo '<input type="submit" value="Edit" name="edit"/>';
		echo '&nbsp;&nbsp;<input type="submit" value="Delete" name="delete"/>';
	}
	else
	{
		echo '<input type="button" value="Edit" onclick="msgdisable()"/>';
		echo '&nbsp;&nbsp;<input type="button" value="Delete"  onclick="msgdisable()"/>';
	}

	echo '</tr>';
	echo '</form>';
	
}
echo '</table>';

?>
</div>

<div style="clear:both;">
</div>
<?php
include "clientfoot.php";

?>