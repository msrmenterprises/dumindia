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
		      $TO_EMAIL = 'dum2018@indiasmartgrid.org';
		      $subject="EXHIBITOR REGISTRATION – DUM 2018 Form Filled By ".$_POST['name'];
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

<div class="row dum_container">
	<div class="k_cheading">
		<h1><span class="k_greencolor">exhibitor registration – DUM 2018</h1>
		<img src="images/kborder_bottom.png" alt="">
	</div>

	<div class="k_register">
		<form action="" method="post" >
			<input type="text" class="form_div_k" placeholder="COMPANY NAME" name="cname" required="">

			<label for="">COMPANY TYPE</label>
			<select class="form_div_k" required="" name="ctype">
			 	  <option value="SELECT">SELECT</option>
			          <option value="PUBLIC">PUBLIC</option>
				  <option value="PRIVATE">PRIVATE</option>
				  <option value="INSTITUTION">INSTITUTION</option>
				  <option value="UTILITY">UTILITY</option>
				  <option value="GOVERNMENT">GOVERNMENT</option>
				  <option value="OTHERS">OTHERS</option>
			</select>
			
			<input type="text" class="form_div_k" placeholder="COMPANY ADDRESS" required="" name="cadd">

			<input type="text" class="form_div_k" placeholder="COUNTRY" name="ccou">

			<br><br>
			<label for="">REQUIRED EXHIBITION SPACE (Default Size – 2*3 sqm)</label>
			<select class="form_div_k" name="cexh">
				<option value="volvo">SELECT</option>
			  <option value="6(2*3) sqm">•	6(2*3) sqm</option>
			  <option value="12(2*3 x 2) sqm">•	12(2*3 x 2) sqm</option>
			  <option value="18(2*3 x 3) sqm">•	18(2*3 x 3) sqm</option>
			</select>
			<label for="">(please note: Shell Exhibition space will be given)</label>
			
			<br><br>
			<label for="">PREFERRED MODE OF PAYMENT</label>
			<select class="form_div_k" name="cpay">
			   <option value="SELECT">SELECT</option>
			  <option value="Cheque">Cheque</option>
			  <option value="RTGS">RTGS</option>
			  <option value="NEFT">NEFT</option>
			  <option value="DD">DD</option>
			</select>

			<br><br>

			<label for="">PRIMARY CONTACT PERSON</label>

			<input type="text" class="form_div_k" placeholder="NAME" required="" name="name">

			<input type="email" class="form_div_k" placeholder="EMAIL ID" required="" name="email">

			<input type="text" class="form_div_k" placeholder="MOBILE NO." required="" name="mobile">

			<input type="text" class="form_div_k" placeholder="DESIGNATION" required="" name="desi">
			<br>
			<br>
			<!-- <label for="" style="text-transform: uppercase;"><i class="fa fa-question-circle" aria-hidden="true" style="color: #8cc63e; font-size: 16px; margin-right: 7px;"></i> Do you want to attend for site visit
			</label> <br>
			<label class="radio-inline">
		      <input type="radio" name="optradio" value="Yes"  required>Yes
		    </label> <br>
		    <label class="radio-inline" style="margin-bottom: 30px;">
		      <input type="radio" name="optradio" value="No">No
		    </label> -->
		    <br>

			<input type="submit" value="REGISTER" class="register_button" name="exhibitor_registration">
		</form>

		<p class="k_pleasenote">
			<b>Please note : </b> <br>
			<i class="fa fa-square" aria-hidden="true"></i> Limited number of exhibition booths of size 3 x 2 mtrs are available in the pre-function area on a paid basis to Indian and international companies and organizations.  <br>
			<i class="fa fa-square" aria-hidden="true"></i> The exhibition booths will be sold on a first come - first served basis.<br>
			<i class="fa fa-square" aria-hidden="true"></i> For 3 x 2 mtrs booth, 2 volunteer pass and 2 delegate pass will be given to attend the workshop <br>
                       <i class="fa fa-square" aria-hidden="true"></i> For queries write us at <a href="mailto:dum2018@indiasmartgrid.org" style="font-weight: bold;">dum2018@indiasmartgrid.org</a>. 
		</p>

		<!-- <h1 class="k_link_deligatea">
			<a href="delegate-registration.php">Delegate Registration Form <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
		</h1> -->
	</div>
<br>
<br>
	<!-- <div class="k_exhibitor_layouts">
		<div class="img">
			<h1>Some of the <span class="k_greencolor">key challenges shall be</span></h1>
			<img src="images/exhibitor_layout.jpg" alt="" class="img-responsive">
		</div>
	</div> -->
</div>
<?php include "include/footer.php"; ?>