<?php
$con=mysqli_connect("localhost","root","",'pbms');
if($con)
{
	// mysqli_select_db("pbms_db",$con);
}
else
{
	echo "not connected";
}

?>