<?php
	   $name=$_POST["name"];
   $empid=$_POST["empid"];
   $pwd=$_POST["pwd"];
   $sq=$_POST["sq"];
   $ans=$_POST["ans"];
    $gen=$_POST["gen"];
	$tech=$_POST["tech"];
   $contactno=$_POST["contactno"];
   $email=$_POST["email"];
    $addr=$_POST["addr"];
	 $exp=$_POST["exp"];

	include 'config.php';
	$q=mysqli_query($con,"update developer_master set password='".$pwd."' , securityquestion='".$sq."' , answer='".$ans."' where empid='".$empid."'");
	header('location:developeredit.php');

?>