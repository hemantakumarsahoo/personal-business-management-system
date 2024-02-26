<?php
include "config.php";
if(isset($_POST["del"]))
{
	$uid=$_POST["uid"];
	$q=mysql_query("delete from user_master where userid='".$uid."'");
	if($q)
	{
		header('location:viewuser.php');
	
		}
		else
		{
			echo "error"; 
		}
	}
	if(isset($_POST["edit"]))
	{
		header('location:edit.php?uid='.$_POST["uid"]);
	}
?>