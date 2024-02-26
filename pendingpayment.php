<?php
include "admintop.php";
include "adminmenu.php";
?>

<div class="col-sm-12">  
 <center> <h3><font color="#00CC00">Client Pending Payments</font></h3></center>
 <?php
include "config.php";
$q=mysqli_query($con,"select * from client_payment where duecost!='0'");
echo '<table border="1" class="table table-bordered">';
echo '<tr>';
echo '<th>Project ID</th>';
echo '<th>Client ID</th>';
echo '<th>Total Cost</th>';
echo '<th>Due</th>';
echo '<th>Payment</th>';
echo '<th>Due Date</th>';
echo '<th>Action</th>';
echo '</tr>';
while($arr=mysqli_fetch_array($q))
{
	echo '<form method="post" action="updatepayment.php">';
	echo '<tr>';
	echo '<td>'.$arr["projectid"].'</td>';
	echo '<td>'.$arr["clientid"].'</td>';
	echo '<td>'.$arr["totalcost"].'</td>';
   	echo '<td><input type="text" value="'.$arr["duecost"].'" name="duecost" /></td>';
	echo '<td><input type="text" value="'.$arr["payment"].'" name="payment" /></td>';
	echo '<td><input type="text" value="'.$arr["duedate"].'" name="duedate" /></td>'; 
	echo '<td>';
	echo '<input type="hidden" value="'.$arr['projectid'].'" name="pid"/>
	<input type="hidden" value="'.$arr['clientid'].'" name="cid"/>';
	
		echo '<input type="submit" value="Update it" name="view"/>';
		
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