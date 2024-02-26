<?php include 'adminhead.php'?>	
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
	function edit(link)
	{	
		//code to visible TextBox
		document.getElementById("rdiv").style.display="inline";		
		document.getElementById("cname").innerHTML=document.getElementById("user"+link).value;
		document.getElementById("cn").value=document.getElementById("user"+link).value;	
		document.getElementById("cmsg").innerHTML=document.getElementById("mesg"+link).value;
		document.getElementById("slno").value=document.getElementById("sl"+link).value;	
	}		
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
    <td colspan="2" style="text-align:center; color:#FF9900; font-size:18px; font-weight:bold"><u>Reply To Users....</u></td>
    <td></td>
  </tr>
  <tr>
    <td colspan="2"><br /></td>
    <td></td>
  </tr>
  <tr>
    <td  style="text-align:left"></td>
    <td><label style="color:#FFFFFF; font-size:16px;">Choice Subject: &nbsp;&nbsp;</label><select name="subject" id="sub" >
    <option value="..Select..">..Select..</option>
      <option value="Billing">Billing</option>
      <option value="Project">Project</option>
      <option value="Message">Message</option>
       </select>
    </td>
  </tr>
  <tr>
    <td></td>
    <td><input type="submit" value="submit" name="submit"/></td>
  </tr>
  <tr><td colspan="2" style="color:#000;">
  <?php  
  		if(isset($_GET['submit']))
		{
		$sub=$_GET['subject'];
		if($sub=="..Select..")
		{
			echo "<script>alert('Please Select Subject')</script>";
		}
		else
		{
		$sql="select * from notify where subject='".$sub."'";
		$con=mysqli_connect('localhost','root','');
		// mysql_select_db('pbms',$con);
		$query=mysqli_query($con,$sql);
		//for table header
		echo '<table id="myTable" class="tablesorter" width="100%"> 
						<thead> 
						<tr> 
    						<th>Name</th> 
    						<th>Subject</th> 
    						<th>Message</th> 
    						<th>Date Of Message</th> 
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
    	<td><span id="userid'.$i.'"> '.$arr["userid"].'</span>
		 <input type="text" id="user'.$i.'" value="'.$arr["userid"].'" style="display:none" />
		 <input type="text" id="sl'.$i.'" value="'.$arr["slno"].'" style="display:none" />
		  </td> 
		
    <td><input type="text" id="subj'.$i.'" value="'.$arr["subject"].'" style="display:none" /><span id="sub'.$i.'">'.$arr["subject"].'</span></td> 
	
    <td> <input type="text" id="mesg'.$i.'" value="'.$arr["message"].'" style="display:none" /><span id="message'.$i.'">'.$arr["message"].'</span></td> 
	
	<td><input type="text" id="adate'.$i.'" value="'.$arr["dateofask"].'" style="display:none" /><span id="ans1'.$i.'">'.$arr["dateofask"].'</span></td> 
	
    <td><a href="#" onclick="edit('.$i.')" id="edit'.$i.'" style="visibility:visible"><img src="themes/b_edit.png"  /></a>
	<a href="#" onclick="update('.$i.')" id="update'.$i.'" style="visibility:hidden"> update  </a>
	
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
		}
		
		}
		$res="";
		if(isset($_POST['rsubmit']))
		{
			$sl1=$_POST['slno'];
			$amsg=$_POST['amsg'];
			$date=date('d-m-y');
			 $sql="update notify set reply='".$amsg."',doreply='".$date."' where slno='".$sl1."'";
			 $con=mysqli_connect('localhost','root','','pbms');
			 // mysql_select_db('pbms',$con);
			 $i=mysqli_query($con,$sql);
			 if($i)
			 {
				$res="..Message Will Delivered Successfully..";
				echo "<script>alert('".$res."')</script>";
			 }
		}
		if(isset($_POST['r1submit']))
		{
			$sl1=$_POST['slno'];
			$amsg=$_POST['amsg'];
			$date=date('d-m-y');
			 $sql="update notify set reply='".$amsg."',doreply='".$date."',forwarded='yes' where slno='".$sl1."'";
			 $con=mysqli_connect('localhost','root','');
			 // mysql_select_db('pbms',$con);
			 $i=mysqli_query($con,$sql);
			 if($i)
			 {
				$res="..Message Forworded Successfully..";
				echo "<script>alert('".$res."')</script>";
			 }
		}
		
?>
	

  </td></tr>
</table>
</form>
<br />
<br />
<div id="rdiv" style="display:none; height:300px; width:400px;" align="center">
<form method="post">
<table width="50%" align="center">
<tr><td>Name : </td><td><input type="hidden" id="cn" name="cn" style="display:none"/>
<input type="hidden" id="slno" name="slno" style="display:none"/>
<label id="cname"></label></td></tr>
<tr><td>Message : </td><td><label id="cmsg"></label></td></tr>
<tr><td>Reply : </td><td><textarea id="amsg" name="amsg"></textarea></td></tr>
<tr><td><input type="submit" name="rsubmit" value="Reply To Customer"/></td><td><input type="submit" name="r1submit" value="Forword To Developer"/></td></tr>
</table>
</form>
</div>
</body>
</html>
 <?php include 'foot.php'?>  