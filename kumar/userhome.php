<?php
session_start();
if(!isset($_SESSION["u"]))
{
	header("location:login.php");
	}
$uid=$_SESSION["u"];

?>
Welcome <?php echo $uid; ?>to user home !!!
<br/>
<a href="changepwd.php">change password</a>
<a href="logout.php">loguot</a>