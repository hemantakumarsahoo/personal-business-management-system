<?php
include"top.php";
include"menu.php";
?>
<?php
if(isset($_POST["contactus"]))
 {
   $name=$_POST["name"];
   $email=$_POST["email"];
   $contactno=$_POST["contactno"];
   $subject=$_POST["subject"];
   $msg=$_POST["msg"];
   $dateofmsg=date("y/m/d");
	  
   include "config.php";
  $sql="insert into user_feedback
  values('','".$name."','".$email."','".$contactno."','".$subject."','".$msg."','".$dateofmsg."')";
  
  
  $i=mysqli_query($con,$sql);
  if($i){
        $msg="Message Send Successfully!!";
	}
	else
	{
		$msg="Error!!";
	}
 }
    
?>
<div class="col-sm-2">
</div>
<div class="fulldvcontact" style="background-image:url(images/banner_2.jpg);height:500px;">
<div class="col-sm-4 addr" >
 <address>  
    <u><div style="font-color:green;font-family:verdena">CONTACT ADDRESS</div></u>
    <br/>
    
	<h4>CONTACT INFO</h4>
	<br/>
	Feel free to talk to our online representative at any time .
	For General Inquiries Call: +1-270-775-1294 OR Email: sales@pbms.com
	<br/><br/>
	<h4> INDIA ( REGISTERED OFFICE )</h4>
	<br/>
	PBMS pvt.ltd.
	<br/> 1st Floor, Left Wing,IDCO Tower-2000 Mancheswar Industrial Estate Bhubaneswar – 751010, Orissa, India
	(+91-674) 2581025, 6043000/1/2
(	+91-674) 2581027
    </address>

</div>

<div class="col-sm-4">

<center><h4 style="font-style:italic;color:#FFF">Give Your Feedback</h4></center>

<form method="post"  id="contactform" >
<fieldset class="form-group">
    <label for="exampleInputPassword1">Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1"  name="name">
  </fieldset>

      <fieldset class="form-group">
    <label for="exampleInputEmail1">Email ID</label>
    <input type="email" class="form-control"  name="email">
  </fieldset>
    
   <fieldset class="form-group">
    <label for="exampleInputPassword1">Contact No</label>
    <input type="text" class="form-control" name="contactno">
  </fieldset>
         <fieldset class="form-group">
          <label for="exampleInputPassword1">Subject</label>
          <input type="text" class="form-control"  name="subject">
          </fieldset>
  
          <fieldset class="form-group">
    <label for="exampleInputPassword1">Your Message</label>
    <input type="text" class="form-control"  name="msg">
  </fieldset>
  
                              <button type="submit" class="btn btn-primary" name="contactus">Send</button>
                              
       <?php
		if(isset($msg))
		{
			echo '<p class="text-danger">'.$msg.'</p>';
		}
		?>                       
                             
</form>
</div>
</div>
</div>
<div style="clear:both;"></div>

                             
                           
                        </div>
				    </div>
				 </div>
                 </div>
                          
                 

<div class="col-sm-2">
</div>

<div style="clear:both;"></div>
<?php
include"foot.php";
?>