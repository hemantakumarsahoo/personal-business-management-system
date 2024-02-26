<?php
include "config.php";
if(isset($_POST["del"]))
{
	$emailid=$_POST["emailid"];
	$q=mysqli_query($con,"delete from client_master where emailid='".$emailid."'");
	if($q)
	{
		header('location:manageclient.php');
	
		}
		else
		{
			echo "error"; 
		}
}
		if(isset($_POST["edit"]))
	{
		header('location:clientedit.php?emailid='.$_POST["emailid"]);
	}
	
	
?>