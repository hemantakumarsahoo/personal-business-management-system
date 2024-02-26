<?php
include "admintop.php";
include "adminmenu.php";
?>
<div class="col-sm-12">  
 <center> <h3><font color="#00CC00">Manage Client</font></h3></center>
 <?php
include "config.php";
$q=mysqli_query($con,"select * from client_master");
echo '<table border="1" class="table table-bordered">';
echo '<tr>';
echo '<th>Name</th>';
echo '<th>Email id</th>';
echo '<th>City</th>';
echo '<th>State</th>';
echo '<th>Country</th>';
echo '<th>Zipcode</th>';
echo '<th>Contact No</th>';
echo '<th>Gender</th>';
echo '<th>About me</th>';
echo '<th>Status</th>';
echo '<th>Action</th>';
echo '</tr>';
while($arr=mysqli_fetch_array($q))
{
	echo '<form method="post" action="clientadminstatus.php">';
	echo '<tr>';
	echo '<td>'.$arr["Name"].'</td>';
	echo '<td>'.$arr["emailid"].'</td>';
   	echo '<td>'.$arr["city"].'</td>';
	echo '<td>'.$arr["state"].'</td>';
	echo '<td>'.$arr["country"].'</td>';
	echo '<td>'.$arr["zipcode"].'</td>';
	echo '<td>'.$arr["contactno"].'</td>'; 
	echo '<td>'.$arr["gender"].'</td>';
	echo '<td>'.$arr["aboutme"].'</td>'; 	
	echo '<td>'.$arr["status"].'</td>';
	echo '<td>';
	echo '	
	<input type="hidden" value="'.$arr['emailid'].'" name="emailid"/>';
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
