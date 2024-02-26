<?php
include"admintop.php";
include"adminmenu.php";
?>
<div class="container">
<div class="row">
<div class="col-sm-12">
<br />
<h3 class="text-info text-center">PORTFOLLIO DETAILS</h3>

<center>
<table class="table table-bordered table-hover">
<tr>
<th>Slno</th>
<th>Project</th>
<th>Client</th>
<th>Description</th>
<th>Image</th>
<th>Action</th>
</tr>
<?php
	include "config.php";
	$sql="select * from portfollio_details";
	$q=mysqli_query($con,$sql);
	$k=0;
	while($arr=mysqli_fetch_array($q))
	{
		$k++;
	echo '<form method="post" action="delportfollio.php">';

	echo '<tr>
	<td>'.$k.'</td>
	<td>'.$arr['projectname'].'</td>
	<td>'.$arr['client'].'</td>
	<td>'.$arr['description'].'</td>
	<td><img src="portfollio/'.$arr['image'].'" height="60" width="60" /></td>
	
	
	<td>
	
	<input type="hidden" value="'.$arr['pid'].'"  name="pid" />
	
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