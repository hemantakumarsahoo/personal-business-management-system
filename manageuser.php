<?php include 'adminhead.php'?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php	

	
		$sql="select * from user_master";
		$con=mysqli_connect('localhost','root','','pbms');
		// mysql_select_db('pbms',$con);
		$query=mysqli_query($con,$sql);
		echo '<table border="1" width="700px" align="center">';
		echo '<tr> <th>User Id</th> <th>Password</th> <th>Security Question </th> <th>Answer</th> <th>Position</th><th>Status</th><th colspan="2">Action</th></tr>';
		while($arr=mysqli_fetch_array($query))
		{
			echo '<form method="get" action="edit.php">';
		
			echo '<tr> <td>'.$arr["userid"].'</td> <td>'.$arr["password"].'</td> <td>'.$arr["securityquestion"].'</td> <td>'.$arr["answer"].'</td> <td>'.$arr["position"].'</td><td>'.$arr["status"].'</td> <td> 
			<input type="hidden" name="uid" value="'.$arr["userid"].'">
			<input type="hidden" name="pwd" value="'.$arr["password"].'">
			<input type="hidden" name="sq" value="'.$arr["securityquestion"].'">
			<input type="hidden" name="ans" value="'.$arr["answer"].'">
			<input type="hidden" name="pos" value="'.$arr["position"].'">
			<input type="hidden" name="sta" value="'.$arr["status"].'">
			<input type="submit" name="edit" value="edit"> </td>
			<td><input type="submit" name="delete" value="delete"></td>
			
			</tr>';
			
			echo '</form>';
			
		}
		echo '</table>';		
	
?>
</body>
</html>
<?php include 'foot.php'?>