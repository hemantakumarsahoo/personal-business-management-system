<?php
$msg="hidden";
if(isset($_GET['reg']))
{
	 $name=$_GET['fname'].' '.$_GET['lname'];
	 $uid=$_GET['userid'];
	 $pwd=$_GET['password'];
	 $sq=$_GET['sq'];
	 $ans=$_GET['answer'];
	 $dob=$_GET['date'];
	 $email=$_GET['email'];
	 $mob=$_GET['mobile'];
	 $pos=$_GET['pos'];
	 $gender=$_GET['gender'];
	 $nat=$_GET['nationality'];
	 $sql="insert into user_master values('".$name."','".$uid."','".$pwd."','".$sq."','".$ans."','".$dob."','".$email."','".$mob."','".$pos."','".$gender."','".$nat."','','','','','default_pic.jpg','0','')";
	 $con=mysqli_connect('localhost','root','','pbms');
	 // mysql_select_db('pbms',$con);
	 $i=mysqli_query($con,$sql);
	 if($i)
	 {
		$msg="visible";
	 }
}
?>
<?php include "head.php";?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript" language="javascript" src="js/JQuery.js"></script>
<script type="text/javascript" language="javascript" src="js/valid.js"></script>
<script  type="text/javascript" language="javascript">
$(document).ready(function()
{
  $("#form1").validate({
  		rules:{
			'fname':{
					   required:true
					 },
			'lname':{
					   required:true
					 },
			'userid':{
					   required:true
					 },
			'password':{
					   required:true
					 },
			'repassword':{
					   required:true,
					   equalTo:("#password")
					 },
			'answer':{
					   required:true
					 }
			  					   
	   }
	});	
});	
</script>      
</head>
<body>
<div style="text-align:center; visibility:<?php echo $msg;?>; color:#000000; font-size:20px">***Registration Successful Please <a href="main.php">Click Here</a> To Login***</div>
<form method="get" name="form1" id="form1">
<div align="center">
<fieldset style="width:500px"><legend align="center" style="color:#3399FF; font-size:18px; width:300px"><u>Welcome To Registeration Page</u></legend>
<table width="500" align="center" border="0" height="400">
  <tr>
    <td style="text-align:right;color:#0033FF">*First Name :</td>
    <td><input type="text" name="fname" id="fname" /></td>
  </tr>
  <tr>
    <td style="text-align:right;color:#0033FF">*Last Name :</td>
    <td><input type="text" name="lname" id ="lname"></td>
  </tr>
  <tr>
    <td style="text-align:right;color:#0033FF">*Userid :</td>
    <td><input type="text" name="userid" id="userid"></td>
  </tr>
  <tr>
    <td style="text-align:right;color:#0033FF">*Password :</td>
    <td><input type="password" name="password" id="password"></td>
  </tr>
  <tr>
    <td style="text-align:right;color:#0033FF">*Confirm Password :</td>
    <td><input type="password" name="repassword" id="repassword"> </td>
  </tr>
  <tr>
    <td style="text-align:right;color:#0033FF">*Security question :</td>
    <td><select name="sq" id="sq" >
      <option> please choose a question </option>
      <option> what is mother's maiden name? </option>
      <option> what was your first school?</option>
      <option> what is your pet's name?</option>
      <option> what was your first mobile number?</option>
    </select>
            </td>
  </tr>
  <tr>
    <td style="text-align:right;color:#0033FF">*Answer :</td>
    <td><input type="text" name="answer" id="answer" /></td>
  </tr>
   <tr>
    <td style="text-align:right;color:#0033FF">*Date-Of-Birth :</td>
    <td><input type="date" name="date" id="date" required/></td>
  </tr>
   <tr>
    <td style="text-align:right;color:#0033FF">*Gender :</td>
    <td><input type="radio" name="gender" id="gender" checked="checked" value="Male"/>Male &nbsp;&nbsp;<input type="radio" name="gender" id="gender" value="Female"/>Female</td>
  </tr>
   <tr>
    <td style="text-align:right;color:#0033FF">*Email ID :</td>
    <td><input type="email" name="email" id="email" required/></td>
  </tr>
   <tr>
    <td style="text-align:right;color:#0033FF">*Mobile No :</td>
    <td><input type="text" name="mobile" id="mobile" required/></td>
  </tr>
  <tr>
    <td style="text-align:right;color:#0033FF">*Position :</td>
    <td><select name="pos" id="position" >
    <option value="Customer">Customer</option>
      <option value="Admin">Admin</option>
      <option value="Developer">Developer</option>
      <option value="Accountant">Accountant</option>
       </select></td>
  </tr>
   <tr>
    <td style="text-align:right;color:#0033FF">*Nationality :</td>
    <td><input type="text" name="nationality" id="nationality" required/></td>
  </tr>
  <tr>
    <td style="text-align:right"><input type="reset" value="Cancel"/></td>
    <td><input type="submit" value="Submit" name="reg" /></td>
  </tr>
  
</table>
</fieldset>
</div>
</form>
</body>
</html>
<?php include "foot.php";?>