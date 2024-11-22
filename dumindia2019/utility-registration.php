<?php 
//error_reporting(E_ALL);
//ini_set('display_errors', TRUE);
//ini_set('display_startup_errors', TRUE);


include "init/init.php"; 
include "include/header.php"; 
require 'sendgrid_files/vendor/autoload.php'; // If you're using Composer (recommended)
include_once('sendgrid_files/credentials.php');
?>



<?php 
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if(isset($_POST['register_button']))
  	{
		$u1=mysqli_real_escape_string($db, $_POST['u1']);
		$u2=mysqli_real_escape_string($db, $_POST['u2']);
		$u3=mysqli_real_escape_string($db, $_POST['u3']);
		$u4=mysqli_real_escape_string($db, $_POST['u4']);
		$u5=mysqli_real_escape_string($db, $_POST['u5']);
		$u6=mysqli_real_escape_string($db, $_POST['u6']);
		$u7=mysqli_real_escape_string($db, $_POST['u7']);
		$u8=mysqli_real_escape_string($db, $_POST['u8']);
		$u9=mysqli_real_escape_string($db, $_POST['u9']);
		$u10=mysqli_real_escape_string($db, $_POST['u10']);
		$u11=mysqli_real_escape_string($db, $_POST['u11']);
		$u12=mysqli_real_escape_string($db, $_POST['u12']);
		$u13=mysqli_real_escape_string($db, $_POST['u13']);
		$u14=mysqli_real_escape_string($db, $_POST['u14']);
		$u15=mysqli_real_escape_string($db, $_POST['u15']);
		$u16=mysqli_real_escape_string($db, $_POST['u16']);
		$u17=mysqli_real_escape_string($db, $_POST['u17']);
		$u18=mysqli_real_escape_string($db, $_POST['u18']);
		$u19=mysqli_real_escape_string($db, $_POST['u19']);
		$u20=mysqli_real_escape_string($db, $_POST['u20']);
		$u21=mysqli_real_escape_string($db, $_POST['u21']);
		$u22=mysqli_real_escape_string($db, $_POST['u22']);
		$u23=mysqli_real_escape_string($db, $_POST['u23']);
		$u24=mysqli_real_escape_string($db, $_POST['u24']);
		$u25=mysqli_real_escape_string($db, $_POST['u25']);
		$u26=mysqli_real_escape_string($db, $_POST['u26']);
		$u27=mysqli_real_escape_string($db, $_POST['u27']);
		$u28=mysqli_real_escape_string($db, $_POST['u28']);
		if(isset($_POST['optradio']))
	  	{
	  		$choice=$_POST['optradio'];
	  	}

	  	else
	  	{
	  		$choice='';
	  	}
	  	$time= time();
		$insert="INSERT INTO utility_registration (uti_name, uti_type, uti_oaddress, uti_country, pri_name, pri_email, pri_mobile, pri_designation, nom1_name, nom1_email, nom1_mobile, nom1_designation, nom2_name, nom2_email, nom2_mobile, nom2_designation, nom3_name, nom3_email, nom3_mobile, nom3_designation, nom4_name, nom4_email, nom4_mobile, nom4_designation, nom5_name, nom5_email, nom5_mobile, nom5_designation, prefered_site, date_of) VALUES ('$u1', '$u2', '$u3', '$u4', '$u5', '$u6', '$u7', '$u8', '$u9', '$u10', '$u11', '$u12', '$u13', '$u14', '$u15', '$u16', '$u17', '$u18', '$u19', '$u20', '$u21', '$u22', '$u23', '$u24', '$u25', '$u26', '$u27', '$u28', '$choice', '$time')";
		$insert_query=mysqli_query($db, $insert);
		if($insert_query)
		{

		      $name=$u5; 
	 	      $email1=$u6;
		      $TO_EMAIL="dum2019@indiasmartgrid.org";
		      $subject="UTILITY REGISTRATION – DUM 2019 Form Filled By ".$_POST['u5'];
		      $htmlContent='<div style="width:600px; height:auto; float:left;">
		      <div style="width:500px; height:auto; line-height:21px;"><strong>UTILITY NAME:- </strong> '.$_POST['u1'].'</div>
		      <div style="width:500px; height:auto; line-height:21px;"><strong>UTILITY TYPE:- </strong> '.$_POST['u2'].'</div>
		      <div style="width:500px; height:auto; line-height:21px;"><strong>Office address:- </strong> '.$_POST['u3'].'</div>
		      <div style="width:500px; height:auto; line-height:21px;"><strong>Country:- </strong> '.$_POST['u4'].'</div>

		      <div style="width:500px; height:auto; line-height:21px;"><strong>PRIMARY CONTACT PERSON</strong> <br></div>

		      <div style="width:500px; height:auto; line-height:21px;"><strong>Name:- </strong> '.$_POST['u5'].'</div>
		      <div style="width:500px; height:auto; line-height:21px;"><strong>Email id :- </strong> '.$_POST['u6'].'</div>
		      <div style="width:500px; height:auto; line-height:21px;"><strong>Mobile no. :- </strong> '.$_POST['u7'].'</div>
		      <div style="width:500px; height:auto; line-height:21px;"><strong>Designation:- </strong> '.$_POST['u8'].'</div>

		      <div style="width:500px; height:auto; line-height:21px;"><strong>NOMINATION 1</strong> <br></div>

		      <div style="width:500px; height:auto; line-height:21px;"><strong>Name:- </strong> '.$_POST['u9'].'</div>
		      <div style="width:500px; height:auto; line-height:21px;"><strong>Email id:- </strong> '.$_POST['u10'].'</div>
		      <div style="width:500px; height:auto; line-height:21px;"><strong>Office address:- </strong> '.$_POST['u11'].'</div>
		      <div style="width:500px; height:auto; line-height:21px;"><strong>Country:- </strong> '.$_POST['u12'].'</div>

		      <div style="width:500px; height:auto; line-height:21px;"><strong>NOMINATION 2</strong> <br></div>

		      <div style="width:500px; height:auto; line-height:21px;"><strong>Name:- </strong> '.$_POST['u13'].'</div>
		      <div style="width:500px; height:auto; line-height:21px;"><strong>Email id :- </strong> '.$_POST['u14'].'</div>
		      <div style="width:500px; height:auto; line-height:21px;"><strong>Mobile no. :- </strong> '.$_POST['u15'].'</div>
		      <div style="width:500px; height:auto; line-height:21px;"><strong>Designation:- </strong> '.$_POST['u16'].'</div>
		      </div>

		       <div style="width:500px; height:auto; line-height:21px;"><strong>Client want to visit:- </strong> '.@$_POST['optradio'].'</div>
		      </div>
		      ';


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
			echo "<script>alert('not inseted');</script>";
		}
	}
}
?>



<style>
.nom_3 ,.nom_4 ,.nom_5 
{
	display: none;
}	
</style>




<!-- key themes starts here -->
<div class="row k_inbanner">
	<img src="images/baner1.jpg" alt="">
</div>

<div class="row dum_container">
	<div class="k_cheading">
		<h1><span class="k_greencolor">UTILITY REGISTRATION – DUM 2019</h1>
		<img src="images/kborder_bottom.png" alt="">
	</div>

	<div class="k_register">
		<form action="" method="post">
			<!-- <input type="text" class="form_div_k" placeholder="UTILITY NAME" required="" name="u1"> -->


			<select id="utility" class="form_div_k" name="u1" required="">
				<option value="UTILITY NAME"><label for="">UTILITY NAME</label></option>		
					<option value="Adani Electricity Mumbai Ltd.">Adani Electricity Mumbai Ltd.</option>
					<option value="Ajmer Vidyut Vitran Nigam Ltd.">Ajmer Vidyut Vitran Nigam Ltd</option>
					<option value="Andaman and Nicobar Electricity Department">Andaman and Nicobar Electricity Department</option>
					<option value="Assam Power Distribution Company Ltd">Assam Power Distribution Company Ltd</option>
					<option value="Bangalore Electricity Supply Co. Ltd">Bangalore Electricity Supply Co. Ltd</option>
					<option value="BEST Udertaking">BEST Udertaking</option>
					<option value="Bokaro Power Supply Co Pvt Ltd">Bokaro Power Supply Co Pvt Ltd</option>
					<option value="BSES Rajdhani Power Ltd">BSES Rajdhani Power Ltd</option>
					<option value="BSES Yamuna Power Ltd">BSES Yamuna Power Ltd</option>
					<option value="Calcutta Electricity Supply Company Ltd">Calcutta Electricity Supply Company Ltd</option>
					<option value="Central Electricity Supply Company of Orissa Ltd">Central Electricity Supply Company of Orissa Ltd</option>
					<option value="Chamudeshwari Electricity Supply Company Ltd">Chamudeshwari Electricity Supply Company Ltd</option>
					<option value="Chattissgarh State Power Distribution Co. Ltd">Chattissgarh State Power Distribution Co. Ltd </option>
					<option value="Dadar & Nagar Haveli Electricity Department">Dadar & Nagar Haveli Electricity Department</option>
					<option value="Dakshin Gujarat Vij Co Ltd">Dakshin Gujarat Vij Co Ltd</option>
					<option value="Dakshin Haryana Bijli Vitran Nigam Ltd">Dakshin Haryana Bijli Vitran Nigam Ltd</option>
					<option value="Dakshinanchal Vidyut Vitran Nigam Ltd">Dakshinanchal Vidyut Vitran Nigam Ltd</option>
					<option value="Damodar Valley Corporation">Damodar Valley Corporation</option>
					<option value="Deptt. Of Power">Deptt. Of Power </option>
					<option value="Eastern Power Distribution Company of Andhra Pradesh Limited">Eastern Power Distribution Company of Andhra Pradesh Limited</option>
					<option value="Electricity Department">Electricity Department</option>
					<option value="Government Of Arunachal Pradesh (Power)">Government Of Arunachal Pradesh (Power)</option>
					<option value="Gujarat Urja Vikas Nigam Ltd.">Gujarat Urja Vikas Nigam Ltd.</option>
					<option value="Gulbarga Electricity Supply Co. Ltd">Gulbarga Electricity Supply Co. Ltd</option>
					<option value="Himachal Pradesh State Electricity Board">Himachal Pradesh State Electricity Board</option>
					<option value="Hubli Electricity Supply Co. Ltd">Hubli Electricity Supply Co. Ltd</option>
					<option value="India Power Corporation Limited">India Power Corporation Limited</option>
					<option value="Jaipur Vidyut Vitran Nigam Ltd">Jaipur Vidyut Vitran Nigam Ltd</option>
					<option value="Jamshedpur Utility and Services Company">Jamshedpur Utility and Services Company</option>
					<option value="Jharkhand Bijli Vitran Nigam Limited">Jharkhand Bijli Vitran Nigam Limited</option>
					<option value="Jodhpur Vidyut Vitran Nigam Ltd">Jodhpur Vidyut Vitran Nigam Ltd</option>
					<option value="Kanpur Electricity Supply Co. Ltd">Kanpur Electricity Supply Co. Ltd</option>
					<option value="Kerala State Electricity Board">Kerala State Electricity Board</option>
					<option value="Madhya Gujarat Vij. Co. Ltd">Madhya Gujarat Vij. Co. Ltd</option>
					<option value="Madhyanchal Vidyut Vitran Nigam Ltd">Madhyanchal Vidyut Vitran Nigam Ltd</option>
					<option value="Maharashtra State Eclectricity Dist. Co. Ltd">Maharashtra State Eclectricity Dist. Co. Ltd</option>
					<option value="Mangalore Electricity Supply Co. Ltd">Mangalore Electricity Supply Co. Ltd</option>
					<option value="Manipur State Power Distribution Company Ltd.">Manipur State Power Distribution Company Ltd.</option>
					<option value="Meghalaya Power Distribution Corporation Ltd">Meghalaya Power Distribution Corporation Ltd </option>
					<option value="Militay Engineering Service">Militay Engineering Service</option>
					<option value="MP Madhya Khestra  Vidyut Vitran Co. Ltd">MP Madhya Khestra  Vidyut Vitran Co. Ltd</option>
					<option value="MP Paschim Khestra Vitran Co. Ltd">MP Paschim Khestra Vitran Co. Ltd</option>
					<option value="(MPPKVVCL) MP East Discom Jabalpur">(MPPKVVCL) MP East Discom Jabalpur</option>
					<option value="MP Purvi Kshetra Vidyut Vitran Co. Ltd">MP Purvi Kshetra Vidyut Vitran Co. Ltd</option>
					<option value="New Delhi Municipal Council">New Delhi Municipal Council</option>
					<option value="Noida Power Company Limited">Noida Power Company Limited</option>
					<option value="North Bihar Power Distribution Company Limited">North Bihar Power Distribution Company Limited</option>
					<option value="North Eastern Electricity Supply Company of Orissa Ltd">North Eastern Electricity Supply Company of Orissa Ltd</option>
					<option value="Northern Power Distribution Co Ltd">Northern Power Distribution Co Ltd</option>
					<option value="Paschim Gujarat Vij. Co. Ltd">Paschim Gujarat Vij. Co. Ltd</option>
					<option value="Paschimanchal Vidyut Vitran Nigam Ltd">Paschimanchal Vidyut Vitran Nigam Ltd</option>
					<option value="PDD">PDD</option>
					<option value="Power & Electricity Department">Power & Electricity Department</option>
					<option value="Punjab State Power Corporation  Ltd">Punjab State Power Corporation  Ltd</option>
					<option value="Purvanchal Vidyut Vitran Nigam Ltd">Purvanchal Vidyut Vitran Nigam Ltd</option>
					<option value="Sikkim Power Distribution Company">Sikkim Power Distribution Company </option>
					<option value="South Bihar Power Distribution Company Limited">South Bihar Power Distribution Company Limited</option>
					<option value="Southern Electricity Supply Company of Orissa Ltd">Southern Electricity Supply Company of Orissa Ltd</option>
					<option value="Southern Power Distribution Co Ltd">Southern Power Distribution Co Ltd</option>
					<option value="Southern Power Distribution Company of Andhra Pradesh Limited">Southern Power Distribution Company of Andhra Pradesh Limited</option>
					<option value="TANGEDCO">TANGEDCO</option>
					<option value="Tata Power Delhi Distribution Limited (TPDDL) - North Delhi Power Ltd (NDPL)">Tata Power Delhi Distribution Limited (TPDDL) - North Delhi Power Ltd (NDPL) </option>
					<option value="Tata Power Ltd">Tata Power Ltd</option>
					<option value="Torrent Power Ltd">Torrent Power Ltd</option>
					<option value="Tripura State Power Co. Ltd">Tripura State Power Co. Ltd</option>
					<option value="Uttar Gujarat Vij Co Ltd">Uttar Gujarat Vij Co Ltd</option>
					<option value="Uttar Haryan Bijli Vitran Nigam Ltd">Uttar Haryan Bijli Vitran Nigam Ltd</option>
					<option value="Uttarkhand Power Corporation Ltd">Uttarkhand Power Corporation Ltd </option>
					<option value="West Bengal State Electricity Dist. Co. Ltd">West Bengal State Electricity Dist. Co. Ltd</option>
					<option value="Western Electricity Supply Company of Orissa Ltd">Western Electricity Supply Company of Orissa Ltd</option>
			</select>



			<label for="">UTILITY TYPE</label>
			<select class="form_div_k" name="u2" required="">
				<option value="SELECT">SELECT</option>
			  <option value="PUBLIC">PUBLIC</option>
			  <option value="PRIVATE">PRIVATE</option>
			</select>
			
			<input type="text" class="form_div_k" placeholder="UTILITY OFFICE ADDRESS" required="" name="u3">

			<input type="text" class="form_div_k" placeholder="COUNTRY" name="u4">

			<br><br>

			<label for="">PRIMARY CONTACT PERSON</label>

			<input type="text" class="form_div_k" placeholder="NAME" required="" name="u5" >

			<input type="email" class="form_div_k" placeholder="EMAIL ID" required=""  name="u6">

			<input type="text" class="form_div_k" placeholder="MOBILE NO." required=""  name="u7">

			<input type="text" class="form_div_k" placeholder="DESIGNATION" name="u8">


			<br><br>

			<label for="" style="text-transform: uppercase;">Nominations</label>
			<hr>
			<label for="">NOMINATION 1</label>
			<input type="text" class="form_div_k" placeholder="NAME" required=""  name="u9">

			<input type="email" class="form_div_k" placeholder="EMAIL ID" required=""  name="u10">

			<input type="text" class="form_div_k" placeholder="MOBILE NO." required=""  name="u11">

			<input type="text" class="form_div_k" placeholder="DESIGNATION" name="u12">

			<br><br>
			<label for="">NOMINATION 2</label>
			<input type="text" class="form_div_k" placeholder="NAME" required=""  name="u13">

			<input type="email" class="form_div_k" placeholder="EMAIL ID" required=""  name="u14">

			<input type="text" class="form_div_k" placeholder="MOBILE NO." required=""  name="u15">

			<input type="text" class="form_div_k" placeholder="DESIGNATION" name="u16">
			<a class="register_button" style="text-align: center; cursor: pointer;" id="nom3">Add More +</a>
			<br><br>

			<div class="nom_3">
			
			<label for="">NOMINATION 3</label>
				<input type="text" class="form_div_k" placeholder="NAME" novalidate name="u17">

				<input type="email" class="form_div_k" placeholder="EMAIL ID" novalidate name="u18">

				<input type="text" class="form_div_k" placeholder="MOBILE NO." novalidate name="u19">

				<input type="text" class="form_div_k" placeholder="DESIGNATION" name="u20">
			<br><br>
			<a class="register_button" style="text-align: center; cursor: pointer;" id="nom4">Add More +</a>
			<br><br>
			</div>

		
			<div class="nom_4">
			
				<label for="">NOMINATION 4</label>
				<input type="text" class="form_div_k" placeholder="NAME" novalidate name="u21">

				<input type="email" class="form_div_k" placeholder="EMAIL ID" novalidate name="u22">

				<input type="text" class="form_div_k" placeholder="MOBILE NO." novalidate name="u23">

				<input type="text" class="form_div_k" placeholder="DESIGNATION"  name="u24">
				<br><br>

				<a class="register_button" style="text-align: center; cursor: pointer;" id="nom5">Add More +</a>
				<br><br>
			</div>

			<div class="nom_5">
			
				<label for="">NOMINATION 5</label>
				<input type="text" class="form_div_k" placeholder="NAME" novalidate name="u25">

				<input type="email" class="form_div_k" placeholder="EMAIL ID" novalidate name="u26">

				<input type="text" class="form_div_k" placeholder="MOBILE NO." novalidate name="u27">

				<input type="text" class="form_div_k" placeholder="DESIGNATION" name="u28">

			</div>

			
			
		    <br>
			<input type="submit" value="REGISTER" class="register_button" name="register_button">
		</form>
		<p class="k_pleasenote">
			<b>Please note : </b> <br>
			<i class="fa fa-square" aria-hidden="true"></i> Utility Participation for DUM 2019 is complimentary.  <br>
                       <i class="fa fa-square" aria-hidden="true"></i> For Utility Exhibition Booth and other queries, please write us at <a href="mailto:dum2019@indiasmartgrid.org" style="font-weight: bold;">dum2019@indiasmartgrid.org</a>. 
		</p>
	</div>
<br>
<br>
</div>



<?php include "include/footer.php"; ?>

<script>
$("#nom3").click(function()
{
	$(".nom_3").css("display","block");
	$("#nom3").css("display","none");
});	
$("#nom4").click(function()
{
	$(".nom_4").css("display","block");
	$("#nom4").css("display","none");
});	
$("#nom5").click(function()
{
	$(".nom_5").css("display","block");
	$("#nom5").css("display","none");
	
});	
</script>