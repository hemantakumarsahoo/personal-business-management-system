<?php
include "clienttop.php";
include "clientmenu.php";
?>

<div class="col-sm-12">  
 <center> <h3><font color="#00CC00">My Payment Details</font></h3></center>
 <?php
include "config.php";
$q=mysqli_query($con,"select * from client_payment where clientid='".$_SESSION['emailid']."'");
echo '<table border="1" class="table table-bordered">';
echo '<tr>';
echo '<th>Project ID</th>';
echo '<th>Client ID</th>';
echo '<th>Total Cost</th>';
echo '<th>Due</th>';
echo '<th>Payment</th>';
echo '<th>Cleared Date</th>';
echo '</tr>';
while($arr=mysqli_fetch_array($q))
{
	
	echo '<tr>';
	echo '<td>'.$arr["projectid"].'</td>';
	echo '<td>'.$arr["clientid"].'</td>';
	echo '<td>'.$arr["totalcost"].'</td>';
   	echo '<td>'.$arr["duecost"].'</td>';
	echo '<td>'.$arr["payment"].' </td>';
	echo '<td>'.$arr["duedate"].'</td></tr>'; 
	
	
	
	
}
echo '</table>';

?>
</div>

<div style="clear:both;">
</div>
<?php
include "foot.php";
?>