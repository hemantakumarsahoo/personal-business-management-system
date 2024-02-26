<?php
if(isset($_POST["approve"]))
{
	$emailid=$_POST['emailid'];
	include "config.php";
	mysqli_query($con,"update client_master set status='1' where emailid='".$emailid."'");
	header('location:clientadminmanage.php');
}
if(isset($_POST["block"]))
{
	$emailid=$_POST['emailid'];
	include "config.php";
    mysqli_query($con,"update client_master set status='0' where emailid='".$emailid."'"); 
	header('location:clientadminmanage.php');
}
?>