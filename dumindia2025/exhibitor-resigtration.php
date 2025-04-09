<?php 
error_reporting(0);
include "init/init.php"; 
include "include/header.php"; 
require 'sendgrid_files/vendor/autoload.php'; // If you're using Composer (recommended)
include_once('sendgrid_files/credentials.php');
?>
<style>
.im
{
 color: #000 !important;
}	
</style>
<?php 
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(isset($_POST['exhibitor_registration']))
	{
	    $cname = mysqli_real_escape_string($db, $_POST['cname']); //preventing from sql injection
	    $cname = htmlspecialchars($cname); //preventing from xss attack
	    // they dont like when it comes from @gmail, prefers business emails
	    $ctype = mysqli_real_escape_string($db, $_POST['ctype']);  //preventing from sql injection
	    $ctype = htmlspecialchars($ctype); //preventing from xss attack

	    $cadd = mysqli_real_escape_string($db, $_POST['cadd']); //preventing from sql injection
	    $cadd = htmlspecialchars($cadd); //preventing from xss attack
	    // they dont like when it comes from @gmail, prefers business emails
	    $ccou = mysqli_real_escape_string($db, $_POST['ccou']);  //preventing from sql injection
	    $ccou = htmlspecialchars($ccou); //preventing from xss attack

	    $cexh = mysqli_real_escape_string($db, $_POST['cexh']); //preventing from sql injection
	    $cexh = htmlspecialchars($cexh); //preventing from xss attack
	    // they dont like when it comes from @gmail, prefers business emails
	    $cpay = mysqli_real_escape_string($db, $_POST['cpay']);  //preventing from sql injection
	    $cpay = htmlspecialchars($cpay); //preventing from xss attack

	    $name = mysqli_real_escape_string($db, $_POST['name']); //preventing from sql injection
	    $name = htmlspecialchars($name); //preventing from xss attack
	    // they dont like when it comes from @gmail, prefers business emails
	    $email1 = mysqli_real_escape_string($db, $_POST['email']);  //preventing from sql injection
	    $email1 = htmlspecialchars($email1); //preventing from xss attack

	    $mobile = mysqli_real_escape_string($db, $_POST['mobile']); //preventing from sql injection
	    $mobile = htmlspecialchars($mobile); //preventing from xss attack
	    // they dont like when it comes from @gmail, prefers business emails
	    $desi = mysqli_real_escape_string($db, $_POST['desi']);  //preventing from sql injection
	    $desi = htmlspecialchars($desi); //preventing from xss attack

		if(isset($_POST['optradio']))
	  	{
	  		$choice=$_POST['optradio'];
	  	}

	  	else
	  	{
	  		$choice='';
	  	}
	  	$time= time();
		$insert="INSERT INTO exhibhitor_registration (company_name, company_type, company_add, company_country, company_rspace, company_pmode, person_name, person_email, person_no, person_designation, prefred_site, time_of) VALUES ('$cname', '$ctype', '$cadd', '$ccou', '$cexh', '$cpay', '$name', '$email1', '$mobile', '$desi', '$choice', '$time')";
		$insert_query=mysqli_query($db, $insert);
		if($insert_query)
		{
		      $TO_EMAIL = 'dum2019@indiasmartgrid.org';
		      $subject="EXHIBITOR REGISTRATION – DUM 2019 Form Filled By ".$_POST['name'];
		      $htmlContent='<div style="width:600px; height:auto; float:left;">
		      <div style="width:500px; height:auto; line-height:21px;"><strong>COMPANY NAME:- </strong> '.$_POST['cname'].'</div>
		      <div style="width:500px; height:auto; line-height:21px;"><strong>COMPANY TYPE:- </strong> '.$_POST['ctype'].'</div>
		      <div style="width:500px; height:auto; line-height:21px;"><strong>COMPANY ADDRESS:- </strong> '.$_POST['cadd'].'</div>
		      <div style="width:500px; height:auto; line-height:21px;"><strong>COUNTRY:- </strong> '.$_POST['ccou'].'</div>
		      <div style="width:500px; height:auto; line-height:21px;"><strong>REQUIRED EXHIBITION SPACE:- </strong> '.$_POST['cexh'].'</div>
		      <div style="width:500px; height:auto; line-height:21px;"><strong>PREFERRED MODE OF PAYMENT:- </strong> '.$_POST['cpay'].'</div>
		      <div style="width:500px; height:auto; line-height:21px;"><strong>NAME:- </strong> '.$_POST['name'].'</div>
		      <div style="width:500px; height:auto; line-height:21px;"><strong>Email:- </strong> '.$_POST['email'].'</div>
		      <div style="width:500px; height:auto; line-height:21px;"><strong>MOBILE NO.:- </strong> '.$_POST['mobile'].'</div>
		      <div style="width:500px; height:auto; line-height:21px;"><strong>DESIGNATION:- </strong> '.$_POST['desi'].'</div>
		      <div style="width:500px; height:auto; line-height:21px;"><strong>Client want to visit:- </strong> '.@$_POST['optradio'].'</div>
		      </div>';		      

		      $email = new \SendGrid\Mail\Mail(); 
		      $email->setFrom($email1, $name);
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
		else
		{
			// echo "<script>alert('not inseted');</script>";
		}		
	}
}
?>


<!-- key themes starts here -->
<div class="row k_inbanner">
	<img src="images/baner1.jpg" alt="">
</div>


	
	
		<div class="row dum_container key_div" style="background: #fff;">
	<div class="k_cheading">
		<h1><span class="k_greencolor">EXHIBITION BOOTH AT DUM 2024</span> </h1>
		<img src="images/kborder_bottom.png" alt="">
	</div>
	<p style="text-align:center;">Utilities and select Technology Providers have the option to exhibit their products and solutions in the Booths which will give a unique experience of interacting with visitors from around the globe and explaining about their offerings/
	Exhibition Booth is available in PLATINUM and GOLD categories<br/>

For Special Participation Packages, list of Features of the Booths and other inquiries<br/>
<b>Please contact : Ms. Sneha Singhania<br/>
Email: <a href="mailto:sneha@indiasmartgrid.org">sneha@indiasmartgrid.org</a></p>
<!--
 <img src="images/er.PNG" alt="" style="border: 1px solid #aeb4b2; width:850px; height: 350px; text-align="center;">
 
<p class="k_p">For Special Participation Packages, list of Features of the Booths and other Inquiries<br/> please contact : Ms. Ronkini Shome<br/> Email: <a href="mailto:ronkini.shome@indiasmartgrid.org" style="font-weight: bold;">ronkini.shome@indiasmartgrid.org</a>
</p>
<div class="k_cheading">
<h1><span class="k_greencolor">DUM 3D EXHIBITION SAMPLE BOOTH  PREVIEW</span> </h1>
<img src="images/kborder_bottom.png" alt="">
	</div>-->
	<!--<p class="k_p">Visit following link to explore features of DUM Exhibition Booth: <strong><a href="https://delhiretinameet2020.webconevents.com/alcon" target="_blank">https://delhiretinameet2020.webconevents.com/alcon</a></strong></p>


	<img src="images/DUMMY BOOTH DUM SCREENSHOT.PNG" alt="" style="border: 1px solid #aeb4b2; width:850px; height: 350px; text-align="center;">
	--><div class="col-sm-12 list_here">
		<div class="k_list_part" style="text-align: center;">
			<p>
				<br>
				<!-- <a href="exhibitor-resigtration_old.php" class="k_read_more">REGISTER AS EXHIBITOR</a> &nbsp;&nbsp; -->
				<!-- <a href="delegate-registration.php" class="k_read_more">REGISTER AS DELEGATE</a> -->
			</p>
		</div>
		</div>
	</div>
</div>
<?php include "include/footer.php"; ?>