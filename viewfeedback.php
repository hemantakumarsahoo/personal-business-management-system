<?php
include"admintop.php";
include"adminmenu.php";
?>
<div class="container">
<div class="row">
<div class="col-sm-12">
<br />
<h3 class="text-info text-center">USER FEEBACKS</h3>

<center>
<table class="table table-bordered table-hover">
<tr>
<th>Name</th>
<th>Emailid</th>
<th>Contactno</th>
<th>Subject</th>
<th>Message</th>
<th>Date</th>
<th>Action</th>
</tr>
<?php
	include "config.php";
	$sql="select * from user_feedback";
	$q=mysqli_query($con,$sql);
	while($arr=mysqli_fetch_array($q))
	{
	echo '<form method="post" action="manage.php">';

	echo '<tr>
	<td>'.$arr['name'].'</td>
	<td>'.$arr['emailid'].'</td>
	<td>'.$arr['contactno'].'</td>
	<td>'.$arr['subject'].'</td>
	<td>'.$arr['message'].'</td>
	<td>'.$arr['dateofmsg'].'</td>
	
	<td>
	
	<input type="hidden" value="'.$arr['name'].'"  name="name" />
	
	<input type="submit" value="Delete" name="del"/>
		</td>
	</tr>
	</form>';
}
?>
</table>
</center>
</div>
</div>
</div>
<?php
include"foot.php";
?>