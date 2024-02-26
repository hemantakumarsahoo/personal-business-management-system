<?php
	   $name=$_POST["name"];
   $emailid=$_POST["emailid"];
   $pwd=$_POST["pwd"];
   $sq=$_POST["sq"];
   $ans=$_POST["ans"];
    $city=$_POST["city"];
   $state=$_POST["state"];
    $country=$_POST["country"];
   $zip=$_POST["zip"];
    $contactno=$_POST["contactno"];
	 $gender=$_POST["gender"];
   $aboutme=$_POST["aboutme"];

	include 'config.php';
	$q=mysqli_query($con,"update client_master set Name='".$name."',password='".$pwd."',securityquestion='".$sq."',answer='".$ans."',city='".$city."',state='".$state."',country='".$country."',zipcode='".$zip."',contactno='".$contactno."',gender='".$gender."',aboutme='".$aboutme."' where emailid='".$emailid."'");
	if($q)
	{
	header('location:manageclient.php');
	}

?>
