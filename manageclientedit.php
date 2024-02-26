<?php
include "config.php";
if(isset($_POST["del"]))
{
	$name=$_POST["name"];
	$q=mysqli_query($con,"delete from user_feedback where name='".$name."'");
	if($q)
	{
		header('location:manageclient.php');
	
		}
		else
		{
			echo "error"; 
		}
	}
	
?>