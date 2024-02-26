<?php
if(isset($_POST["register"]))
{
	$uid=$_POST["uid"];
	$pwd=$_POST["pwd"];
	$sques=$_POST["sq"];
	$ans=$_POST["ans"];
	include "config.php";
	
	$sql="insert into user_master values('".$uid."','".$pwd."','".$sques."','".$ans."')" ;
	$q=mysql_query($sql);
	if($q)
	{
		echo "Registration Successfull !!";
		
		}
		else 
		{
			echo "Error";
	}
}
?>
<form method="post">
USER ID:<input type="text" name="uid"/>
<br/>
PASSWORD:<input type="password" name="pwd"/>
<br/>
SECURITY QUESTION:
<select name="sq">
<option>fav color</option>.
<option>nick name</option>
</select>
<br/>
ANSWAR:<input type="text" name="ans"/>
<br/>
<input type="submit" value="submit" name="register"/>
</form>