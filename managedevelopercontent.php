<center>
<table border="1">
<tr>
<td>name</td>
<td>empid</td>
<td>password</td>
<td>securityquestion</td>
<td>answer</td>
<td>technology</td>
<td>gender</td>
<td>contactno</td>
<td>email</td>
<td>address</td>
<td>experience</td>
<td>action</td>
</tr>
<?php
	include "config.php";
	$sql="select * from developer_master";
	$q=mysqli_query($con,$sql);
	while($arr=mysqli_fetch_array($q))
	{
	echo '<form method="post" action="developerdelete.php">';

	echo '<tr>
	<td>'.$arr['name'].'</td>
	<td>'.$arr['empid'].'</td>
	<td>'.$arr['password'].'</td>
	<td>'.$arr['securityquestion'].'</td>
	<td>'.$arr['answer'].'</td>
	<td>'.$arr['technology'].'</td>
	<td>'.$arr['gender'].'</td>
	<td>'.$arr['contactno'].'</td>
	<td>'.$arr['email'].'</td>
	<td>'.$arr['address'].'</td>
	<td>'.$arr['experience'].'</td>
	
	
	<td>
	<input type="hidden" value="'.$arr['empid'].'"  name="empid" />
	<input type="submit" value="Edit" name="edit"/>
	<input type="submit" value="Delete" name="del"/>
		</td>
	</tr>
	</form>';
}
?>
</table>
</center>