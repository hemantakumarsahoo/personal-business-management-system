<?php
	session_start();
	if(isset($_POST["change"]))
	{
		$oldpwd=$_POST["cpwd"];
		$newpwd=$_POST["npwd"];
		include "config.php";
		$sql="update user_master set password='".$newpwd."' where userid='".$_SESSION["u"]."' and password='".$oldpwd."' ";
		$q=mysql_query($sql);
		if($q)
		{
			echo "password change successfully !!!";
			}
			else
			{
				echo "you enter the wrong password !!!";
				}
		}
?>	
<form method="post">
CURRENT PASSWORD:<input type="password" name="cpwd"/>
<br/>
NEW PASSWORD:<input type="password" name="npwd" />
<br/>
<input type="submit" value="submit" name="change" />
</form>
<a href="userhome.php">Back to Home</a>