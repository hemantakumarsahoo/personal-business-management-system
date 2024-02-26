<?php
 
	   $name=$_POST["name"];
	   $empid=$_POST["empid"];
   $emailid=$_POST["email"];
   $sq=$_POST["sq"];
   $ans=$_POST["ans"];
   $tech=$_POST["tech"];
    $addr=$_POST["addr"];
   $exper=$_POST["exper"];
    $contactno=$_POST["contact"];
	 $gender=$_POST["gen"];
   
	include 'config.php';
	$q=mysqli_query($con,"update developer_master set Name='".$name."',securityquestion='".$sq."',answer='".$ans."',	technology='".$tech."',email='".$emailid."',address='".$addr."',	experience='".$exper."',contactno='".$contactno."',gender='".$gender."' where empid='".$empid."'");
	if($q)
	{
		
	header('location:developerprofile.php');
	}

?>
