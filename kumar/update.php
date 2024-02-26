<?php
	$uid=$_POST["uid"];
	$pwd=$_POST["pwd"];
	$sq=$_POST["sq"];
	$ans=$_POST["ans"];
	include 'config.php';
	$q=mysql_query("update user_master set password='".$pwd."' , securityquestion='".$sq."' , answar='".$ans."' where userid='".$uid."'");
	header('location:userview.php');

?>