<?php
include "config.php";
if(isset($_POST["view"]))
{
	$pid=$_POST["pid"];
	$duecost=$_POST["duecost"];
	$payment=$_POST["payment"];
	$duedate=$_POST["duedate"];
	$q=mysqli_query($con,"update client_payment set duecost='".$duecost."',payment='".$payment."',duedate='".$duedate."' where projectid='".$pid."'");
	if($q)
	{
		header('location:pendingpayment.php');
	
		}
		else
		{
			echo "error"; 
		}
}
		
	
	
?>