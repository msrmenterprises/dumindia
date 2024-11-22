<?php 
include "init/init.php";
include "include/header.php"; 
require 'sendgrid_files/vendor/autoload.php'; // If you're using Composer (recommended)
include_once('sendgrid_files/credentials.php'); 
?>

<!-- key themes starts here -->
<div class="row k_inbanner">
	<img src="images/baner1.jpg" alt="">
</div>

<div class="row dum_container">
	<div class="k_cheading">
		<h1><span class="k_greencolor">delegate registration – DUM 2018</h1>
		<img src="images/kborder_bottom.png" alt="">
	</div>

	<div class="k_register">
		<form action="" method="post" >
			<input type="text" class="form_div_k" placeholder="FULL NAME" required="" name="f_name">

			<input type="email" class="form_div_k" placeholder="EMAIL ID" required="" name="email">

			<input type="text" class="form_div_k" placeholder="MOBILE NO." required="" name="emob">

			<input type="text" class="form_div_k" placeholder="DESIGNATION" name="desi">

			<input type="text" class="form_div_k" placeholder="COMPANY NAME" name="c_name">


			<input type="text" class="form_div_k" placeholder="COMPANY ADDRESS" name="c_add">
			<input type="text" class="form_div_k" placeholder="COUNTRY" name="country">

			<label for="">COMPANY TYPE</label>
			<select class="form_div_k" name="c_typ">
			  <option value="SELECT">SELECT</option>
			  <option value="PUBLIC">PUBLIC</option>
			  <option value="PRIVATE">PRIVATE</option>
			  <option value="INSTITUTION">INSTITUTION</option>
			  <option value="UTILITY">UTILITY</option>
			  <option value="GOVERNMENT">GOVERNMENT</option>
			  <option value="OTHERS">OTHERS</option>
			</select>
			<br><br>
			
			<label for="" style="text-transform: uppercase;"><i class="fa fa-question-circle" aria-hidden="true" style="color: #8cc63e; font-size: 16px; margin-right: 7px;"></i> Do you want to attend for site visit
			</label> <br>
			<label class="radio-inline">
		      <input type="radio" name="optradio" value="Yes"  required>Yes
		    </label> <br>
		    <label class="radio-inline" style="margin-bottom: 30px;">
		      <input type="radio" name="optradio" value="No">No
		    </label>
		    <br>

			<input type="submit" value="REGISTER" class="register_button" name="contactf_submit">
		</form>
	</div>
<br>
<br>
	
</div>



<?php 
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  	if(isset($_POST['contactf_submit']))
  	{
	  	if(isset($_POST['optradio']))
	  	{
	  		$choice=$_POST['optradio'];
	  	}
	  	else
	  	{
	  		$choice='';
	  	}

		$from=$_POST['email'];
		$TO_EMAIL='dum2018@indiasmartgrid.org';;
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
		$headers .= "From: ".$from." " . "\r\n";
		$headers .= PHP_EOL;
		$subject="DELEGATE REGISTRATION – DUM 2018 Form Filled By ".$_POST['f_name'];
		$htmlContent='<div style="width:600px; height:auto; float:left;">
		  <div style="width:500px; height:auto; line-height:21px;"><strong>Name:- </strong> '.$_POST['f_name'].'</div>
		  <div style="width:500px; height:auto; line-height:21px;"><strong>Email:- </strong> '.$_POST['email'].'</div>
		  <div style="width:500px; height:auto; line-height:21px;"><strong>Mobile no.:- </strong> '.$_POST['emob'].'</div>
		  <div style="width:500px; height:auto; line-height:21px;"><strong>Designation:- </strong> '.$_POST['desi'].'</div>
		  <div style="width:500px; height:auto; line-height:21px;"><strong>Company name:- </strong> '.$_POST['c_name'].'</div>
		  <div style="width:500px; height:auto; line-height:21px;"><strong>Company Address:- </strong> '.$_POST['c_add'].'</div>
		  <div style="width:500px; height:auto; line-height:21px;"><strong>Country:- </strong> '.$_POST['country'].'</div>
		  <div style="width:500px; height:auto; line-height:21px;"><strong>Email:- </strong> '.$_POST['c_typ'].'</div>
		  <div style="width:500px; height:auto; line-height:21px;"><strong>Client want to visit:- </strong> '.@$_POST['optradio'].'</div>
		</div>';
		$delegate_name=$_POST['f_name'];
		$FROM_EMAIL=$_POST['email'];
		$delegate_mob=$_POST['emob'];
		$delegate_designation=$_POST['desi'];
		$company_name=$_POST['c_name'];
		$company_add=$_POST['c_add'];
		$delegate_country=$_POST['country'];
		$delegate_typ=$_POST['c_typ'];
		if($delegate_typ == "SELECT" || !isset($_POST['c_typ']))
		{
			$delegate_typ="-Not selected-";
		}

		$prefered_site=$_POST['optradio'];
		$time= time();
		$insert="INSERT INTO delegate_registration (delegate_name, delegate_email, delegate_mob, delegate_designation, company_name, company_add, delegate_country, delegate_typ, prefered_site, date_of) VALUES ('$delegate_name', '$FROM_EMAIL', '$delegate_mob', '$delegate_designation', '$company_name', '$company_add', '$delegate_country', '$delegate_typ', '$prefered_site', '$time')";
		$insert_query=mysqli_query($db, $insert);
		if($insert_query)
		{
			$email = new \SendGrid\Mail\Mail(); 
			$email->setFrom($FROM_EMAIL, $delegate_name);
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


<?php include "include/footer.php"; ?>