<?php include "init/init.php"; ?>
<?php 
include "include/header.php"; 
require 'sendgrid_files/vendor/autoload.php'; // If you're using Composer (recommended)
include_once('sendgrid_files/credentials.php');
?>

<?php 
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  if(isset($_POST['register_button']))
  {
  		$error=array();
	  	$utility_name=mysqli_real_escape_string($db,$_POST['utility_name']);	
		$FROM_EMAIL = 'dum2018@indiasmartgrid.org'; 
		$from_name = 'Dum India Website';				
	  	$dir_path="images/BestPractice/"; // dir path
	  	$img_name=$_FILES['uti_file']['name']; //image name
	  	$file_tmp=$_FILES['uti_file']['tmp_name']; //temp image name
	  	$img_size=$_FILES['uti_file']['size']; //image size
	  	$basename=basename($_FILES['uti_file']['name']); //base name
	  	$basename=basename($_FILES['uti_file']['type']); //type
	  	$break_img=explode('.',$img_name);
	  	$img_only_ext=strtolower($break_img['1']);
	  	$new_file_name=$break_img['0'].'_'.uniqid().'.'.$img_only_ext;
	  	$basename=pathinfo($img_name, PATHINFO_EXTENSION); //extension
	  	$extension=array("doc","docx","xls", "xlsx", "ppt","pptx","pdf");
	  	if(in_array($img_only_ext, $extension) === false)
	  	{
	  		$error[]="Please upload mentioned file type only. ";
	  	}

		$contact_msg=mysqli_real_escape_string($db,$_POST['contact_msg']);
		$contact_msg1=mysqli_real_escape_string($db,$_POST['contact_msg1']);

		if(isset($_POST['optradio']))
	  	{
	  		$choice=$_POST['optradio'];
	  	}

	  	else
	  	{
	  		$choice='';
	  	}
	  	if($img_size > 1000000)
		{
		    $error[]="The uploaded file was to large.";
		}
  	
  	
  		if(empty($error) == true)
  		{
  			move_uploaded_file($file_tmp, "images/BestPractice/".$new_file_name);
	  		$time= time();
			$insert="INSERT INTO best_practice (uti_name, uti_files, major_chalng, any_otherinfo, prefred_site, date_of) VALUES ('$utility_name', '$new_file_name', '$contact_msg', '$contact_msg1', '$choice', '$time')";
			$insert_query=mysqli_query($db, $insert);
			if($insert_query)
			{
	  		  // var_dump($_POST);
			  $name="SUBMIT BEST PRACTICE";

			  $TO_EMAIL = 'dum2018@indiasmartgrid.org';
			  $subject="SUBMIT BEST PRACTICE – DUM 2018 Form Filled By ".$_POST['utility_name'];
			  $htmlContent='<div style="width:600px; height:auto; float:left;">
			  <div style="width:500px; height:auto; line-height:21px;"><strong>Utility Name:- </strong> '.$_POST['utility_name'].'</div>
			  <div style="width:500px; height:auto; line-height:21px;"><strong>Major challenges being faced:- </strong> '.$_POST['contact_msg'].'</div>
			  <div style="width:500px; height:auto; line-height:21px;"><strong>Any other informations:- </strong> '.$_POST['contact_msg1'].'</div>

			 <div style="width:500px; height:auto; line-height:21px;"><strong> Client want to visit:- </strong> '.@$_POST['optradio'].'</div>';

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
		else
		{
			$error_list=""; //variable list
			foreach ($error as $errorkey => $errorvalue) 
			{
				if(count($error) == 2)
				{
					$error_list .=$errorvalue;
				}
				
			}
			echo '<script type="text/javascript">alert("'.$error_list.'")</script>';
		}
  	}
}
?>



<div class="row k_inbanner">
	<img src="images/baner1.jpg" alt="">
</div>
<!-- kanika's heading code div copied here -->
<div class="row dum_container knowledge_div k_organiser">
	<div class="k_cheading">
		<h1><span class="k_greencolor">Submit Best Practice</span> </h1>
		<img src="images/kborder_bottom.png" alt="">
	</div>
</div>
<!-- kanika's heading code div copied here -->

<!-- VISHALINI SUBMIT BEST PRACTICE -->
<div class="row" id="vishalini2111-submit-best-practice">
	<div class="col-sm-12 vishalini2111_submit_best_practice">
		<form action="" class="vishalini2111_submit_best_practice_form" method="post" enctype="multipart/form-data">
			<div class="row">
				<div class="col-sm-12 vishalini2111_columnclass ">
					<label for="" class="vishalini2111_labelclass">Utility Name</label>
					  <select name="utility_name" class="vishalini2111_inputclass" required="">
					    <option>select option</option>				       									
							<option>Ajmer Vidyut Vitran Nigam Ltd</option>					
							<option>Assam Power Distribution Company Ltd</option>					
							<option>Bangalore Electricity Supply Co. Ltd</option>					
							<option>Best Undertaking</option>					
							<option>Bokaro Power Supply Co Pvt Ltd</option>					
							<option>BSES Rajdhani Power Ltd</option>					
							<option>BSES Yamuna Power Ltd</option>					
							<option>Calcutta Electricity Supply Company Ltd</option>					
							<option>Central Electricity Supply Company of Orissa Ltd</option>					
							<option>Chamudeshwari Electricity Supply Company Ltd</option>					
							<option>Chattissgarh State Power Distribution Co. Ltd </option>					
							<option>Dakshin Gujarat Vij Co Ltd</option>					
							<option>Dakshin Haryana Bijli Vitran Nigam Ltd</option>					
							<option>Dakshinanchal Vidyut Vitran Nigam Ltd</option>					
							<option>Damodar Valley Corporation</option>					
							<option>Deptt. Of Power (Sec.)</option>					
							<option>Eastern Power Distribution Company of Andhra Pradesh Limited</option>		
							<option>Electricity Department - Goa</option>					
							<option>Electricity Department - Kavaratti</option>					
							<option>Electricity Department - Murungapakkam</option>					
							<option>Electricity Department  - Kachigam</option>					
							<option>Electricity Department, Manipur</option>					
							<option>Government Of Arunachal Pradesh (Power)</option>					
							<option>Gulbarga Electricity Supply Co. Ltd</option>					
							<option>Himachal Pradesh State Electricity Board</option>					
							<option>Hubli Electricity Supply Co. Ltd</option>					
							<option>Jaipur Vidyut Vitran Nigam Ltd</option>					
							<option>Jamshedpur Utility and Services Company</option>					
							<option>Jharkhand Bijli Vitran Nigam Limited</option>					
							<option>Jodhpur Vidyut Vitran Nigam Ltd</option>					
							<option>Kanpur Electricity Supply Co. Ltd</option>					
							<option>Kerala State Electricity Board</option>					
							<option>Madhya Gujarat Vij. Co. Ltd</option>					
							<option>Madhyanchal Vidyut Vitran Nigam Ltd</option>					
							<option>Maharashtra State Eclectricity Dist. Co. Ltd</option>					
							<option>Mangalore Electricity Supply Co. Ltd</option>					
							<option>Meghalaya Power Distribution Corporation Ltd </option>					
							<option>MP Madhya Khestra  Vidyut Vitran Co. Ltd</option>					
							<option>MP Paschim Khestra Vitran Co. Ltd</option>					
							<option>MP Purvi Kshetra Vidyut Vitran Co. Ltd</option>					
							<option>New Delhi Municipal Council</option>					
							<option>North Bihar Power Distribution Company Limited</option>					
							<option>North Eastern Electricity Supply Company of Orissa Ltd</option>				
							<option>Northern Power Distribution Co Ltd</option>					
							<option>Paschim Gujarat Vij. Co. Ltd</option>					
							<option>Paschimanchal Vidyut Vitran Nigam Ltd</option>					
							<option>PDD</option>					
							<option>Power &amp; Elect. Department</option>					
							<option>Punjab State Electricity Board (PSEB) </option>					
							<option>Punjab State Power Corporation  Ltd</option>					
							<option>Purvanchal Vidyut Vitran Nigam Ltd</option>					
							<option>Reliance Energy Ltd</option>												<option>Sikkim Power Distribution Company </option>					
							<option>Southern Electricity Supply Company of Orissa Ltd</option>					
							<option>Southern Power Distribution Co Ltd - Hyderabad</option>					
							<option>Southern Power Distribution Company of Andhra Pradesh Limited</option>		
							<option>Tamil Nadu Electricity Board  </option>					
							<option>Tata Power Delhi Distribution Limited (TPDDL) - North Delhi Power Ltd (NDPL) </option>					
							<option>Tata Power Ltd</option>					
							<option>Torrent Power Ltd</option>					
							<option>Tripura State Power Co. Ltd</option>					
							<option>Uttar Gujarat Vij Co Ltd</option>					
							<option>Uttar Haryan Bijli Vitran Nigam Ltd</option>					
							<option>Uttarkhand Power Corporation Ltd </option>					
							<option>West Bengal State Electricity Dist. Co. Ltd</option>					
							<option>Western Electricity Supply Company of Orissa Ltd</option>
					  </select>
				</div>
				<div class="col-sm-12 vishalini2111_columnclass">
					<label for="" class="vishalini2111_labelclass">Attachments - Best practices etc.. <span> (Upload file of maximum 10 MB each) doc, docx, xls, xlsx, ppt, pptx, pdf 
					 <a href="javascript:void(0);" title="Header" data-toggle="popover" data-trigger="hover" data-content=" Title:
					 -------------- 				 
					 Area:
					 --------------				 
					 Project details: 	
					 --------------				 
					 Benefits:
					 --------------
					 "><i class="fa fa-info-circle" aria-hidden="true"></i></a>
					</span> 
					</label>
				<!-- 	<div class="popover fade right in" role="tooltip" id="popover784832" style="top: 29px; left: 198.734px; display: block;"><div class="arrow" style="top: 50%;"></div><h3 class="popover-title">Popover Header</h3><div class="popover-content">Some content inside the popover</div></div> -->
					
					<input type="file" value="CLEAR" name="uti_file" class="vishalini2111_choosefile">
				</div>
				<div class="col-sm-12 vishalini2111_columnclass">
					<label for="" class="vishalini2111_labelclass">Major challenges being faced (Maximum 1000 characters) </label>
					<textarea name="contact_msg" class="vishalini2111_textareaclass" cols="100" row="100" style="" required=""></textarea>
				</div>
				<div class="col-sm-12 vishalini2111_columnclass">
					<label for="" class="vishalini2111_labelclass">Any other information (Maximum 1000 characters) </label>
					<textarea name="contact_msg1" class="vishalini2111_textareaclass" cols="100" row="100" style=""></textarea>
				</div>

				<div class="col-sm-12">
					<br>
					<label for="" style="text-transform: uppercase;"><i class="fa fa-question-circle" aria-hidden="true" style="color: #8cc63e; font-size: 16px; margin-right: 7px;"></i> Do you want to attend for site visit
			</label> <br>
			<label class="radio-inline">
		      <input type="radio" name="optradio" value="Yes"  required>Yes
		    </label> <br>
		    <label class="radio-inline" style="margin-bottom: 30px;">
		      <input type="radio" name="optradio" value="No">No
		    </label>
				    <br>
				</div>
					
				<div class="col-sm-12 vishalini2111_columnclass">
					<label for="" class="vishalini2111_labelclass">Any queries?? Please write to us on <a href="mailto:dum2018@indiasmartgrid.org">dum2018@indiasmartgrid.org</a></label>					
				</div>

				<div class="col-sm-12 vishalini2111_columnclass" style="padding-right: 7px;">
					<input type="reset" value="CLEAR" class="vishalini2111_form_button">
					<input type="submit" value="submit" name="register_button" class="vishalini2111_form_button" style="width: 50%;">
				</div>					
			</div>		  
		</form> 
	</div>
</div>
<!-- KANIKA SUBMIT BEST PRACTICE -->


<?php include "include/footer.php"; ?>
