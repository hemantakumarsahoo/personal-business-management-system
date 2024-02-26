<?php
session_start();
if(isset($_POST["login"]))
{
	$uid=$_POST["uid"];
	$pwd=$_POST["pwd"];
	include "config.php";
	$sql="select * from user_master where userid='".$uid."' and password='".$pwd."' ";
	$q=mysql_query($sql);
	if($arr=mysql_fetch_array($q))
	{
		$_SESSION["u"]=$uid;
		header('location:userhome.php');
		}

else
{
	echo "Invalid userid or passwprd !!";
	}
}
	?>
<form method="post">
<body align="center"  text="#FF0000" background="IMG_80539721546753.jpeg" >

USER ID:<input type="text" name="uid"/>
<br/>
PASSWORD:<input type="password" name="pwd"/>
<br/>
<input type="submit" value="login" name="login"/>
</form>
<a href="register.php">New user sign Up ?</a> | <a href="forgotpassword.php">forgotpassword</a>
</body>