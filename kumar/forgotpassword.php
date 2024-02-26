<?php
if(isset($_POST["forgot"]))
{
	$uid=$_POST["uid"];
	$sques=$_POST["sq"];
	$ans=$_POST["ans"];
	include "config.php";
	$sql="select * from user_master where userid='".$uid."' and securityquestion='".$sq."' and answar='".$ans."' ";
	$q=mysql_query($sql);
	if($arr=mysql_fetch_array($q))
	{
		echo "your password is".$arr["password"];
		
	}
	else
	{
		echo "invalid input data";
		}
}
?>
<form method="post">
USER ID:<input type="text" name="uid"/>
<br/>
SECURITY QUESTION:
<select name="sq">
<option>fav color</option>.
<option>nick name</option>
</select>
<br/>
ANSWAR:<input type="text" name="ans"/>
<input type="submit" value="submit" name="forgot"/>
</form>
<a href="login.php">Back to login</a>