<?php
include "config.php";
if(isset($_POST["del"]))
{
	$pid=$_POST["pid"];
	$q=mysqli_query($con,"delete from portfollio_details where pid='".$pid."'");
	if($q)
	{
		header('location:manageportfollio.php');
	
		}
		else
		{
			echo "error"; 
		}
	}
	
?>