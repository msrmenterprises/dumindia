<?php include "init/init.php"; ?>
<?php include "include/header.php"; ?>

<!-- key themes starts here -->
<div class="row k_inbanner">
	<img src="images/baner1.jpg" alt="">
</div>

<div class="row dum_container">
	<div class="k_cheading">
		<h1><span class="k_greencolor">exhibitor registration – DUM 2017</h1>
		<img src="images/kborder_bottom.png" alt="">
	</div>

	<div class="k_register">
		<form action="" method="post" >
			<input type="text" class="form_div_k" placeholder="COMPANY NAME" name="cname" required="">

			<label for="">COMPANY TYPE</label>
			<select class="form_div_k" required="" name="ctype">
				<option value="volvo">SELECT</option>
			  <option value="volvo">PUBLIC</option>
			  <option value="saab">PRIVATE</option>
			  <option value="volvo">INSTITUTION</option>
			  <option value="saab">UTILITY</option>
			  <option value="volvo">GOVERNMENT</option>
			  <option value="saab">OTHERS</option>
			</select>
			
			<input type="text" class="form_div_k" placeholder="COMPANY ADDRESS" required="" name="cadd">

			<input type="text" class="form_div_k" placeholder="COUNTRY" name="ccou">

			<br><br>
			<label for="">REQUIRED EXHIBITION SPACE (Default Size – 2*3 sqm)</label>
			<select class="form_div_k" name="cexh">
				<option value="volvo">SELECT</option>
			  <option value="volvo">•	6(2*3) sqm</option>
			  <option value="saab">•	12(2*3 x 2) sqm</option>
			  <option value="volvo">•	18(2*3 x 3) sqm</option>
			</select>
			<label for="">(please note: Shell Exhibition space will be given)</label>
			
			<br><br>
			<label for="">PREFERRED MODE OF PAYMENT</label>
			<select class="form_div_k" name="cpay">
				<option value="volvo">SELECT</option>
			  <option value="volvo">Cheque</option>
			  <option value="saab">RTGS</option>
			  <option value="volvo">NEFT</option>
			  <option value="saab">DD</option>
			</select>

			<br><br>

			<label for="">PRIMARY CONTACT PERSON</label>

			<input type="text" class="form_div_k" placeholder="NAME" required="" name="name">

			<input type="email" class="form_div_k" placeholder="EMAIL ID" required="" name="emial">

			<input type="text" class="form_div_k" placeholder="MOBILE NO." required="" name="mobile">

			<input type="text" class="form_div_k" placeholder="DESIGNATION" required="" name="desi">
			<br>
			<br>
			<label for="" style="text-transform: uppercase;"><i class="fa fa-question-circle" aria-hidden="true" style="    color: #8cc63e; font-size: 16px; margin-right: 7px;"></i> please select your preferred site visit
			</label> <br>
			<label class="radio-inline">
		      <input type="radio" name="optradio" value="Mysore"  required>Smart Grid Pilot Project at CESC, Mysore
		    </label> <br>
		    <label class="radio-inline" style="margin-bottom: 30px;">
		      <input type="radio" name="optradio" value="BESCOM">Distribution Automation System at BESCOM
		    </label>
		    <br>

			<input type="submit" value="REGISTER" class="register_button" name="contactf_submit">
		</form>

		<p class="k_pleasenote">
			<b>Please note : </b> <br>
			<i class="fa fa-square" aria-hidden="true"></i> Limited number of exhibition booths of size 3 x 2 mtrs are available in the pre-function area on a paid basis to Indian and international companies and organizations.  <br>
			<i class="fa fa-square" aria-hidden="true"></i> The exhibition booths will be sold on a first come - first served basis.<br>
			<i class="fa fa-square" aria-hidden="true"></i> For 3 x 2 mtrs booth, 2 volunteer pass and 2 delegate pass will be given to attend the workshop
			For queries write us at <a href="mailto:dum2017bescom@gmail.com" style="font-weight: bold;">dum2017bescom@gmail.com</a>
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
  
      $from=$_POST['emial'];
      $to="dum2017@gmail.com";
      $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
      $headers .= "From: ".$from." " . "\r\n";
      $headers .= PHP_EOL;
      $subject="EXHIBITOR REGISTRATION – DUM 2017 Form Filled By ".$_POST['name'];
      $msg='<div style="width:600px; height:auto; float:left;">
      <div style="width:500px; height:auto; line-height:21px;"><strong>COMPANY NAME:- </strong> '.$_POST['cname'].'</div>
      <div style="width:500px; height:auto; line-height:21px;"><strong>COMPANY TYPE:- </strong> '.$_POST['ctype'].'</div>
      <div style="width:500px; height:auto; line-height:21px;"><strong>COMPANY ADDRESS:- </strong> '.$_POST['cadd'].'</div>
      <div style="width:500px; height:auto; line-height:21px;"><strong>COUNTRY:- </strong> '.$_POST['ccou'].'</div>
      <div style="width:500px; height:auto; line-height:21px;"><strong>REQUIRED EXHIBITION SPACE:- </strong> '.$_POST['cexh'].'</div>
      <div style="width:500px; height:auto; line-height:21px;"><strong>PREFERRED MODE OF PAYMENT:- </strong> '.$_POST['cpay'].'</div>
      <div style="width:500px; height:auto; line-height:21px;"><strong>NAME:- </strong> '.$_POST['name'].'</div>
      <div style="width:500px; height:auto; line-height:21px;"><strong>Email:- </strong> '.$_POST['emial'].'</div>
      <div style="width:500px; height:auto; line-height:21px;"><strong>MOBILE NO.:- </strong> '.$_POST['mobile'].'</div>
      <div style="width:500px; height:auto; line-height:21px;"><strong>DESIGNATION:- </strong> '.$_POST['desi'].'</div>
      <div style="width:500px; height:auto; line-height:21px;"><strong>Client want to visit </strong> <br></div>

       <div style="width:500px; height:auto; line-height:21px;"><strong></strong> '.@$_POST['optradio'].'</div>
      </div>';
      @mail($to, $subject, $msg,$headers);
      $m="Your EXHIBITOR REGISTRATION – DUM 2017 form is successfully Submitted";
      if($m)
      {
        echo "<script>alert('$m');</script>";
      }
  }
}
?>


<?php include "include/footer.php"; ?>