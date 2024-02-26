<?php
if(isset($_POST["approve"]))
{
	$empid=$_POST['empid'];
	include "config.php";
	mysqli_query($con,"update developer_master set status='1' where empid='".$empid."'");
	header('location:developeradminmanage.php');
}
if(isset($_POST["block"]))
{
	$empid=$_POST['empid'];
	include "config.php";
    mysqli_query($con,"update developer_master set status='0' where empid='".$empid."'"); 
	header('location:developeradminmanage.php');
}
?>