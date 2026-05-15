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
EXHIBITION BOOTH AT D

<!-- key themes starts here -->
<div class="row k_inbanner">
	<img src="images/baner1.jpg" alt="">
</div>


	
	
	<div class="row dum_container key_div">
		<div class="k_cheading">
			<h1><span class="k_greencolor">EXHIBITION BOOTH AT DUM</span> </h1>
			<img src="images/kborder_bottom.png" alt="">
		</div>
	<p style="text-align:center;">Utilities and select Technology Providers have the option to exhibit their products and solutions in the booths which will give a unique experience of interacting with visitors from around the globe and explaining about their offerings.<br/>
	<b>Exhibition Booths are available in following options​:<br/>
	<table style="width: 80%; margin: 20px auto; border-collapse: collapse; text-align: left;">
        <thead>
            <tr style="background-color: #8cc63e; color: #fff;">
                <th style="padding: 10px; border: 1px solid #ddd;">Exhibition Booth Option</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Exhibition Space (SQM)</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;">Platinum</td>
                <td style="padding: 10px; border: 1px solid #ddd;">18 SQM</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;">Gold</td>
                <td style="padding: 10px; border: 1px solid #ddd;">9 SQM</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;">Silver</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Shared Space</td>
            </tr>
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;">Start-Up</td>
                <td style="padding: 10px; border: 1px solid #ddd;">Shared Space</td>
            </tr>
        </tbody>
    </table>

	<b>For Special Participation Packages, list of Features of the Booths and other inquiries<br/>
	Please contact: <a href="mailto:sneha@indiasmartgrid.org">sneha@indiasmartgrid.org</a>



</div>
<?php include "include/footer.php"; ?>