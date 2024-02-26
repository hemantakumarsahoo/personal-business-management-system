<?php
 
	$name=$_POST["name"];
   $emailid=$_POST["email"];
   $sq=$_POST["sq"];
   $ans=$_POST["ans"];
    $city=$_POST["city"];
   $state=$_POST["state"];
    $country=$_POST["country"];
   $zip=$_POST["zip"];
    $contactno=$_POST["contact"];
	 $gender=$_POST["gen"];
   $aboutme=$_POST["aboutme"];

	include 'config.php';
	$q=mysqli_query($con,"update client_master set Name='".$name."',securityquestion='".$sq."',answer='".$ans."',city='".$city."',state='".$state."',country='".$country."',zipcode='".$zip."',contactno='".$contactno."',gender='".$gender."',aboutme='".$aboutme."' where emailid='".$emailid."'");
	if($q)
	{
		
	header('location:clientprofile.php');
	}

?>
