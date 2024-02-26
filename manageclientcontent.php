<center>
<table border="1">
<tr>
<td>name</td>
<td>emailid</td>
<td>password</td>
<td>securityquestion</td>
<td>answer</td>
<td>city</td>
<td>state</td>
<td>country</td>
<td>zipcode</td>
<td>contactno</td>
<td>gender</td>
<td>aboutme</td>
<td>action</td>
</tr>
<?php
	include "config.php";
	$sql="select * from client_master";
	$q=mysqli_query($con,$sql);
	while($arr=mysqli_fetch_array($q))
	{
	echo '<form method="post" action="clientdelete.php">';

	echo '<tr>
	<td>'.$arr['Name'].'</td>
	<td>'.$arr['emailid'].'</td>
	<td>'.$arr['password'].'</td>
	<td>'.$arr['securityquestion'].'</td>
	<td>'.$arr['answer'].'</td>
	<td>'.$arr['city'].'</td>
	<td>'.$arr['state'].'</td>
	<td>'.$arr['country'].'</td>
	<td>'.$arr['zipcode'].'</td>
	<td>'.$arr['contactno'].'</td>
	<td>'.$arr['gender'].'</td>
	<td>'.$arr['aboutme'].'</td>
	
	<td>
	<input type="hidden" value="'.$arr['emailid'].'"  name="emailid" />
	<input type="submit" value="Edit" name="edit"/>
	<input type="submit" value="Delete" name="del"/>
		</td>
	</tr>
	</form>';
}
?>
</table>
</center>