<?php 
session_start();
$uid=$_SESSION['uid'];
$img="";
$sql="select * from user_master where userid='".$uid."'";
$con=mysqli_connect('localhost','root','','pbms');	
// mysql_select_db('pbms',$con);
$q=mysqli_query($con,$sql);								
if($arr=mysqli_fetch_array($q))
{
$img=$arr['image'];						
}	
if(isset($_POST['upload']))
	{  
	    
		$uid = $_SESSION['uid'];
		$file = $_FILES ['file'];
		$name1 =$uid.".jpg";
		$type = $file ['type'];
		$size = $file ['size'];
		$tmppath = $file ['tmp_name']; 
		if($name1!="")
		{
			if(move_uploaded_file($tmppath,'userimages/'.$name1))//image is a folder in which you will save image
			{
					
					$sql="update user_master set image='".$name1."' where userid='".$uid."'";		
					$con=mysqli_connect('localhost','root','','pbms');
					// mysql_select_db('pbms',$con);
					$i1=mysqli_query($con,$sql);
					if($i1)
					{
						//$img=$arr['image'];
						header('location:adminhome.php');
					}			
					
			}
		}
    }
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blue Smoothie Theme, Free CSS Template</title>
<meta name="keywords" content="blue smoothie, theme, free template, website design, CSS" />
<meta name="description" content="Blue Smoothie Theme, free template, web design" />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<link rel="stylesheet" type="text/css" href="css/contentslider.css" />
<script type="text/javascript" src="scripts/contentslider.js">

/***********************************************
* Featured Content Slider- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more
***********************************************/

</script>

<style type="text/css">
<!--
.style1 {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-style: italic;
}
-->
</style>
</head>
<body id="home">
<!-- | | |   w w w . t e m p l a t e m o . c o m   | | | -->
<div id="templatemo_wrapper">
	<div id="templatmeo_header">
   	  <div id="site_title" align="center"><h1><br/>PBMS</h1></div>
        <div id="templatemo_menu">
            <ul>
                <li><a href="adminhome.php" class="current">Home</a></li>
                <li><a href="replynotification.php">Reply Notification</a></li>
                <li><a href="manageuser.php">Manage User</a></li>
                <li><a href="adminchangepwd.php">Change Password</a></li>
                <li><a href="main.php">Log Out</a></li>
            </ul>    	
        </div> <!-- end of templatemo_menu -->
    </div> <!-- end of header -->
    
    <div class="style1" id="templatemo_middle">
    	<div id="mid_slider">
        	 <form method="post" enctype="multipart/form-data">
        <img src="userimages/<?php echo $img;?>" height="200px" width="200px" />
         <p><input name="file" type="file" id="file" size="15" />
                  &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;<input type="submit" name="upload" value="Upload" />
                  </p>
                  </form>
        </div>
        <div id="mid_left">
            <div id="mid_title"><h1><i><font color="#6699FF">Admin Home</font></i></h1></div>
           <p style="color:#FFF">Welcome  <?php echo $uid;?> &nbsp;&nbsp;<br />
             Todays <?php echo date('d/m/y')?>
             </p>
            <div id="learn_more"><a href="admineditprofile.php">Edit Profile</a></div>
	  </div> 
	  </div>
        <div class="cleaner"></div>
	</div> 
    <!-- end of middle -->
    
     <div id="templatemo_main">
        <div id="templatemo_content">
          <div class="cleaner"></div>
       </div> <!-- end of templatemo_content -->
    </div> <!-- end of templatemo_main -->
</div> <!-- end of wrapper -->
</body>
</html>