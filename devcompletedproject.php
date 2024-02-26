<?php
include "developertop.php";
include "developermenu.php";
?>

<div class="col-sm-12">  
 <center> <h3><font color="#00CC00">Completed Client Project</font></h3></center>
 <?php
include "config.php";
$q=mysqli_query($con,"select * from client_project as t1 left join project_assigned as t2 on t1.pid=t2.projectid where t1.status='completed' and t2.developerid='".$_SESSION['empid']."'");
echo '<table border="1" class="table table-bordered">';
echo '<tr>';
echo '<th>Client ID</th>';
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
	echo '<form method="post" action="devviewcompletedproject.php">';
	echo '<tr>';
	echo '<td>'.$arr["clientid"].'</td>';
	echo '<td>'.$arr["pname"].'</td>';
   	echo '<td>'.$arr["description"].'</td>';
	echo '<td>'.$arr["technology"].'</td>';
	echo '<td>'.$arr["expectedcost"].'</td>'; 
	echo '<td>'.$arr["duration"].'</td>';
	echo '<td>'.$arr["dateofpost"].'</td>';
	echo '<td>'.$arr["status"].'</td>';
	echo '<td>';
	echo '<input type="hidden" value="'.$arr['pid'].'" name="pid"/>
	<input type="hidden" value="'.$arr['clientid'].'" name="cid"/>';
	
		echo '<input type="submit" value="View Details" name="view"/>';
		
	echo '</tr>';
	echo '</form>';
	
}
echo '</table>';

?>
</div>

<div style="clear:both;">
</div>
<?php
include "foot.php";
?>