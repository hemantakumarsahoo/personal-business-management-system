<?php
	if(isset($_GET["uid"]))
	{
	$uid=$_GET["uid"];
	include "config.php";
	$sql="select * from user_master where userid='".$uid."'";
	$q=mysql_query($sql);
	$arr=mysql_fetch_array($q); 
	}
?>
<form method="post" action="update.php">
userid:<input type="text" name="uid" value="<?php echo $arr["userid"];?>" />
<br/>
password:<input type="text" name="pwd" value="<?php echo $arr["password"];?>" />
<br/>
<?php
	$fc=null;
	$nn=null;
	if($arr["securityquestion"]=='fav color')
	{
		$fc='selected';
	}
	else if($arr["securityquestion"]=='nick name')
	{
		$nn='selected';
		}
		?>
        
     securityquestion:
     <select name="sq">
     <option <?php echo $fc; ?> >fav color </option>
     <option <?php echo $nn; ?> >nick name </option>
     </select>
     <br/>
     Answar:<input type="text" name="ans" value="<?php echo $arr["answar"]; ?>" /><br/>
     <input type="submit" value="update" name="update" />
     </form>

