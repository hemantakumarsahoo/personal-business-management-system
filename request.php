<?php 
session_start();
include "customerhead.php";
$uid=$_SESSION['uid'];
$res="";
if(isset($_POST['submit']))
{
	
	 $subject=$_POST['subject'];
	 $msg=$_POST['text']; 
	 $date=date('d-m-y');
	 $sql="insert into notify values('','".$uid."','".$subject."','".$msg."','".$date."','','','No Reply','no')";
	 $con=mysqli_connect('localhost','root','','pbms');
	 // mysql_select_db('pbms',$con);
	 $i=mysqli_query($con,$sql);
	 if($i)
	 {
		$res="..Message Will Delivered Successfully..";
	 }
}

?>

               
                
               
    <form method="post">         
    <table width="100%">
  <tr>
    <td width="40%">&nbsp;</td>
    <td width="40%"><h2><font face="Georgia, Times New Roman, Times, serif"> Request Service</font></h2></td>
    <td width="20%">&nbsp;</td>
  </tr>
    <tr>
    <td width="40%">&nbsp;</td>
    <td width="40%"><h4 style="color:#F00"><font face="Georgia, Times New Roman, Times, serif"> <?php echo $res;?></font></h4></td>
    <td width="20%">&nbsp;</td>
  </tr>

  <tr>
    <td>&nbsp;</td>
    <td>Choose Subject:                 
<select name="subject" id="sub" >
    <option>..Select..</option>
      <option value="Billing">Billing</option>
      <option value="Project">Project</option>
      <option value="Message">Message</option>
       </select></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td valign="top">Write Message :<textarea id="text" name="text" rows="4" cols="30" class="required" ></textarea>
				 <br /> </td>	
       <td>&nbsp;</td>           	
  </tr>
  <tr>
   <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
   <td style="text-align:left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="Reset" id="reset" name="reset" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Send" id="submit" name="submit"/></td>
    <td>&nbsp;</td>
   </tr>
</table>
</form>
                
                

       
                 

     
 
<?php 
include "foot.php";
?>