<?php
include "admintop.php";
include "adminmenu.php";
?>
<div class="col-sm-12">  
 <center> <h3><font color="#00CC00">Manage Developer</font></h3></center>
 <?php
include "config.php";
$q=mysqli_query($con,"select * from developer_master");
echo '<table border="1" class="table table-bordered">';
echo '<tr>';
echo '<th>Name</th>';
echo '<th>Employee id</th>';
echo '<th>Technology</th>';
echo '<th>Gender</th>';
echo '<th>Contact no</th>';
echo '<th>Email </th>';
echo '<th>Address</th>';
echo '<th>Experience</th>';
echo '<th>Status</th>';
echo '<th>Action</th>';
echo '</tr>';
while($arr=mysqli_fetch_array($q))
{
	echo '<form method="post" action="developeradminstatus.php">';
	echo '<tr>';
	echo '<td>'.$arr["name"].'</td>';
	echo '<td>'.$arr["empid"].'</td>';
   	echo '<td>'.$arr["technology"].'</td>';
	echo '<td>'.$arr["gender"].'</td>';
	echo '<td>'.$arr["contactno"].'</td>';
	echo '<td>'.$arr["email"].'</td>';
	echo '<td>'.$arr["address"].'</td>'; 
	echo '<td>'.$arr["experience"].'</td>';
	echo '<td>'.$arr["status"].'</td>';
	echo '<td>';
	echo '	
	<input type="hidden" value="'.$arr['empid'].'" name="empid"/>';
	if($arr['status']==0)
	{
	 echo '<input type="submit" value="Approve it" name="approve"/>';
	}
	else
	{
		echo '<input type="submit" value="Block it" name="block"/>';
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
