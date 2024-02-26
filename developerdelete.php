<?php
include "config.php";
if(isset($_POST["del"]))
{
	$empid=$_POST["empid"];
	$q=mysqli_query($con,"delete from developer_master where empid='".$empid."'");
	if($q)
	{
		header('location:managedeveloper.php');
	
		}
		else
		{
			echo "error"; 
		}
	}
	
?>