<?php
date_default_timezone_set('Asia/Kolkata');
include "init/init.php";
include "include/header.php"; 
require 'sendgrid_files/vendor/autoload.php'; // If you're using Composer (recommended)
include_once('sendgrid_files/credentials.php');

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(isset($_POST['contactf_submit']))
    {
    $FROM_EMAIL = mysqli_real_escape_string($db, $_POST['email']); //preventing from sql injection
    $FROM_EMAIL = htmlspecialchars($FROM_EMAIL); //preventing from xss attack
     // they dont like when it comes from @gmail, prefers business emails
    $from_name = mysqli_real_escape_string($db, $_POST['name']);  //preventing from sql injection
    $from_name = htmlspecialchars($from_name); //preventing from xss attack
    $TO_EMAIL = 'dum2019@indiasmartgrid.org';
    // Try to be nice. Take a look at the anti spam laws. In most cases, you must
    $txtarea=mysqli_real_escape_string($db, $_POST['txtarea']); //preventing from sql injection 
    $malicious_tag=strpos($txtarea,"<"); //preventing from xss attack
    $malicious_tag1=strpos($txtarea,">");
    if($malicious_tag!== false && $malicious_tag1!== false )
    {
      $m="oops! Message pattern is not valid kindly recheck";
      echo "<script>alert('$m');</script>";
    }
    else
    {
	    $time= time();
	    $insert="INSERT INTO contact_detail (name, email, message, date_of) VALUES ('$from_name', '$FROM_EMAIL', '$txtarea', '$time')";
	    $insert_query=mysqli_query($db, $insert);
	    
	    $subject = "WRITE TO US – DUM 2019 Form Filled By ".$_POST['name'];
	    $htmlContent = '<div style="background: #eee; padding: 50px 50px; width: 100%; float: left;">
	    <h1 style="text-align: left;font-weight: bold; margin-top: 0px; margin-bottom: 30px;">Dum Contact us Form</h1>
	      <div style="width:500px; height:auto; line-height:21px;"><strong>Name:- </strong> '.$from_name.'</div>
	      <div style="width:500px; height:auto; line-height:21px;"><strong>Email:- </strong> '.$FROM_EMAIL.'</div>
	      <div style="width:90%; height:auto; line-height:21px;"><strong>Message:- </strong> '.$txtarea.'</div>
	    </div>';
	
	    $email = new \SendGrid\Mail\Mail(); 
	    $email->setFrom($FROM_EMAIL, $from_name);
	    $email->setSubject($subject);
	    $email->addTo($TO_EMAIL, null);
	    $email->addContent("text/html", $htmlContent);
	    $sendgrid = new \SendGrid($API_KEY);
	    try 
	    {
	      $response = $sendgrid->send($email);
	      $result = $response->statusCode();
	      if($result == 202)
	      {
	        $m="Your Request form is successfully Submitted";
	        echo "<script>alert('$m');</script>";
	        // print_r($response->headers());
	        // print $response->body() . "\n";
	      }
	    }
	    catch (Exception $e) 
	    {
	      $m='Caught exception: '.  $e->getMessage();
	      echo "<script>alert('$m');</script>";
	    }
    	}
  }
}
?>
<style>
.dum_contactpart1
{
  display: inline-block;
  margin-top: 30px;
  width: 100%;
}  

.dum_contactpart1 h1 a
{
  font-size: 19px !important;
}

.dum_contactpart1
{
    text-align: center;
}

.dum_contactpart1 .col-sm-6:first-child
{
    text-align: center;
    border-right: 1px dotted #3333334f;
}

.dum_contactpart1 .col-sm-6
{
  text-align: center;
  border: 0px;
}

@media(max-width: 769px)
{
  .dum_contactpart1 .col-sm-6:first-child
  {
    border-right: 0px !important;
    border-bottom: 1px dotted #3333334f;
    padding-bottom: 10px;
  }
}
</style>

<!-- key themes starts here -->
<div class="row k_inbanner">
	<img src="images/baner1.jpg" alt="">
</div>

<div class="row dum_container">
    <div class="k_cheading">
	<h1><span class="k_greencolor">Contact us</span> </h1>
	<img src="images/kborder_bottom.png" alt="">
    </div>

	<div class="k_register k_contact_us">
    <h1 class="event_info">Event Information</h1>
    <!-- <div class="col-sm-4" style="text-align: left;">
      <a><b>FOR STALL DECORATION AND MEDIA REQUIREMENT AT STALLS, CONTACT EVENT MANAGER:</b> </a><br>
      <a>Name :- Mr. Dinesh K N </a><br>
      <a href="mailto:avland.mail@gmail.com">Email :- avland.mail@gmail.com</a><br>
      <a>Contact No. :- +98452-08171, <br> 98454-46712 </a><br>
    </div> -->

     <div class="col-sm-12 dum_contact1">
      <a href="">Venue :- Eros Hotel, Nehru Place, New Delhi, India </a><br>
      <a href="">Date :- 26 - 27 November, 2019   </a><br>
      <a href="">Time :- 10am to 7pm</a>
    </div>


    <div class="dum_contactpart1">
      <div class="col-sm-12">
        <h1><b><a href="http://www.indiasmartgrid.org/" target="_blank">India Smart Grid Forum</a></b></h1>
        <a href="">Email :- dum2019@indiasmartgrid.org</a><br>
        <a href="">Contact No. :- +91-11- 41057658  </a><br>
      </div>

     
    </div>

    <br>
    <div class="col-sm-12">
      <hr>
      <h1 class="event_info">Write to us</h1>
      <form action="" method="post" style="text-align: center;" class="k_form">
       <input type="text" class="form_div_k" placeholder="your name" required="" name="name">
       <input type="email" class="form_div_k" placeholder="your email" required="" name="email">
       <textarea id="" style="height: 100px; width: 99%;  padding-top: 7px; min-width: 99%;" class="form_div_k form_div_width" cols="30" rows="10" placeholder="your message" name="txtarea" required=""></textarea>
       <!-- <span class="k_plz_feild">* please complete the feilds correctly</span> -->
       <br><br>
       <input type="submit" class="register_button" required="" value="send message" name="contactf_submit">
     </form>
   </div>
 </div>
 <br>
 <br>
 
</div>



<?php include "include/footer.php"; ?>