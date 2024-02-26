<?php
session_start();
include "customerhead.php";?>	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript" src="js/jquery-latest.js"></script> 
<script type="text/javascript" src="js/jquery.tablesorter.js"></script> 
<link rel="stylesheet" href="themes/blue/style.css" type="text/css">
<link rel="stylesheet" href="addons/pager/jquery.tablesorter.pager.css" type="text/css">
<script type="text/javascript" language="javascript" src="addons/pager/jquery.tablesorter.pager.js">
</script>
<script type="text/javascript">
$(document).ready(function() 
    { 
        $("#myTable").tablesorter().tablesorterPager({container: $("#pager")});
    } 
); 
</script>
<script language="javascript" type="text/javascript">	
	function del(link)
	{
		var sl=document.getElementById("sl"+link);
		window.location="delete.php?sl="+sl.value;
	}	
</script>
</head>

<body>
<form method="get">
<table width="700px" align="center" height="200">
  <tr>
    <td colspan="2" style="text-align:center; color:#FF9900; font-size:18px; font-weight:bold"><u>Reply Of Admin....</u></td>
    <td></td>
  </tr>
  <tr>
    <td colspan="2"><br /></td>
    <td></td></tr>
  <tr><td colspan="2" style="color:#000;">
  <?php  
		$uid=$_SESSION['uid'];
		$sql="select * from notify where userid='".$uid."'";
		$con=mysqli_connect('localhost','root','','pbms');
		// mysql_select_db('pbms',$con);
		$query=mysqli_query($con,$sql);
		//for table header
		echo '<table id="myTable" class="tablesorter" width="100%"> 
						<thead> 
						<tr> 
    						<th>Subject</th> 
    						<th>Message</th> 
    						<th>Date Of Message</th> 
							<th>Reply Of Admin</th> 
							<th>Date Of Reply</th> 
							<th>Reply Of Devop</th> 
							<th>Action</th> 
						</tr> 
					</thead> 
					<tbody> ';
		//for table row
		$i=0;
		while($arr=mysqli_fetch_array($query))
		{
			$i++;
			echo '<tr> 	
    <td><input type="text" id="sl'.$i.'" value="'.$arr["slno"].'" style="display:none" /><span id="sub'.$i.'">'.$arr["subject"].'</span></td> 
	
    <td><span id="message'.$i.'">'.$arr["message"].'</span></td> 
	
	<td><span id="ans1'.$i.'">'.$arr["dateofask"].'</span></td> 
	<td><span id="ans1'.$i.'">'.$arr["reply"].'</span></td> 
	<td><span id="ans1'.$i.'">'.$arr["doreply"].'</span></td> 
	<td><span id="ans1'.$i.'">'.$arr["developermsg"].'</span></td> 
	
    <td>
	<a href="#" onclick="del('.$i.')" id="edit'.$i.'" style="visibility:visible"><img src="themes/b_drop.png"  /></a>
	
	</td>
</tr> ';		
		}
		echo '</tbody> 
</table> 

<div id="pager" class="pager">
	<form>
		<img src="addons/pager/icons/first.png" class="first"/>
		<img src="addons/pager/icons/prev.png" class="prev"/>
		<input type="text" class="pagedisplay"/>
		<img src="addons/pager/icons/next.png" class="next"/>
		<img src="addons/pager/icons/last.png" class="last"/>
		<select class="pagesize">
			<option selected="selected"  value="3">3</option>
			<option value="6">6</option>
			<option value="9">9</option>
			<option  value="12">12</option>
		</select>
	</form>
</div>';
		
?>
	

  </td></tr>
</table>
</form>
</body>
</html>
 <?php include 'foot.php'?>  