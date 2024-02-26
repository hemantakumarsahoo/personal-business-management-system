<table border="1">
<tr>
<td>userid</td>
<td>password</td>
<td>action</td>
</tr>
<?php
	include "config.php";
	$sql="select * from user_master";
	$q=mysql_query($sql);
	while($arr=mysql_fetch_array($q))
	{
	echo '<form method="post" action="manage.php">';

	echo '<tr>
	<td>'.$arr['userid'].'</td>
	<td>'.$arr['password'].'</td>
	<td>
	<input type="hidden" value="'.$arr['userid'].'"  name="uid" />
	<input type="submit" value="Edit" name="edit"/>
	<input type="submit" value="Delete" name="del"/>
		</td>
	</tr>
	</form>';
}
?>
</table>
