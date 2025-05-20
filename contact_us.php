

<?php

date_default_timezone_set('Asia/Kolkata');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['contactf_submit'])) {
        $FROM_EMAIL = htmlspecialchars($_POST['email']); // Preventing XSS attack
        $from_name = htmlspecialchars($_POST['name']);  // Preventing XSS attack
        $TO_EMAIL = 'dum@indiasmartgrid.org';
        $txtarea = htmlspecialchars($_POST['txtarea']); // Preventing XSS attack

        // Validate email format
        if (!filter_var($FROM_EMAIL, FILTER_VALIDATE_EMAIL)) {
            $m = "Invalid email format. Please enter a valid email.";
            echo "<script>alert('$m');</script>";
        } else {
            // Prepare email content
            $subject = "WRITE TO US – DUM 2025 Form Filled By " . $from_name;
            $htmlContent = "
            <div style='background: #eee; padding: 50px 50px; width: 100%; float: left;'>
                <h1 style='text-align: left; font-weight: bold; margin-top: 0px; margin-bottom: 30px;'>Dum Contact Us Form</h1>
                <div style='width:500px; height:auto; line-height:21px;'><strong>Name:- </strong> $from_name</div>
                <div style='width:500px; height:auto; line-height:21px;'><strong>Email:- </strong> $FROM_EMAIL</div>
                <div style='width:90%; height:auto; line-height:21px;'><strong>Message:- </strong> $txtarea</div>
            </div>";

            // Send email using PHP mail function
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= "From: $from_name <$FROM_EMAIL>" . "\r\n";

            if (mail($TO_EMAIL, $subject, $htmlContent, $headers)) {
                $m = "Your request form has been successfully submitted.";
                echo "<script>alert('$m');</script>";
            } else {
                $m = "Failed to send your message. Please try again later.";
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

/* @media(max-width: 769px)
{
  .dum_contactpart1 .col-sm-6:first-child
  {
    border-right: 0px !important;
    border-bottom: 1px dotted #3333334f;
    padding-bottom: 10px;
  }
} */
 @media (max-width: 767px) {
  .dum_container .col-md-6 {
    border-right: none !important;
    border-bottom: 1px solid #eee;
    margin-bottom: 30px;
  }
}
</style>

<?php include "include/header.php"; ?>

<!-- key themes starts here -->
<div class="row k_inbanner">
	<img src="images/baner1.jpg" alt="">
</div>

<!-- <div class="row dum_container">
	<div class="k_cheading">
		<h1><span class="k_greencolor">Event Information</span> </h1>
		<img src="images/kborder_bottom.png" alt="">
	</div>

  <div class="row dum_contact_row">
   
    <div class="col-sm-2">
    </div>
    <div class="col-sm-4" style="float: right;">
        <a href="">Date :- 06 - 07 November, 2025</a><br>
        <a href="">Location:- Mumbai, Maharashtra</a><br>
        <a href="">Time: 10am to 6pm</a><br>
    </div>

    
    <div class="col-sm-4" style="float:left;">
        <h1 style="margin:0;"><b><a href="http://www.indiasmartgrid.org/" target="_blank">India Smart Grid Forum</a></b></h1>
        <a href="mailto:dum@indiasmartgrid.org">Email :- dum@indiasmartgrid.org</a><br>
        <a href="tel:+911141057658">Contact No. :- +91-11-41057658</a><br>
    </div>
    <div class="col-sm-2">
    </div>
</div>

	<div class="k_register">
  <form action="" method="post" style="text-align: center;" class="k_form">
       <input type="text" class="form_div_k" placeholder="your name" required="" name="name">
       <input type="email" class="form_div_k" placeholder="your email" required="" name="email">
       <textarea id="" style="height: 100px; width: 99%;  padding-top: 7px; min-width: 99%;" class="form_div_k form_div_width" cols="30" rows="10" placeholder="your message" name="txtarea" required=""></textarea>
      
       <br><br>
       <input type="submit" class="register_button" required="" value="send message" name="contactf_submit">
     </form>
	</div>
<br>
<br>
	
</div> -->

<div class="row dum_container" style="margin-top: 40px;">
  <div class="col-md-6 col-sm-12" style="border-right:1px solid #eee; margin-bottom: 30px;">
    <div class="k_cheading">
      <h1><span class="k_greencolor">Contact Information</span></h1>
      <img src="images/kborder_bottom.png" alt="">
    </div>
    <div style="margin-top: 30px;">
      <h2 style="margin:0 0 10px 0;"><b><a href="http://www.indiasmartgrid.org/" target="_blank">India Smart Grid Forum</a></b></h2>
      <p><strong>Date:</strong> 06 - 07 November, 2025</p>
      <p><strong>Location:</strong> Mumbai, Maharashtra</p>
      <p><strong>Time:</strong> 10am to 6pm</p>
      <p><strong>Email:</strong> <a href="mailto:dum@indiasmartgrid.org">dum@indiasmartgrid.org</a></p>
      <p><strong>Contact No.:</strong> <a href="tel:+911141057658">+91-11-41057658</a></p>
    </div>
  </div>
  <div class="col-md-6 col-sm-12">
    <div class="k_cheading">
      <h1><span class="k_greencolor">Write to Us</span></h1>
      <img src="images/kborder_bottom.png" alt="">
    </div>
    <div class="k_register" style="margin-top: 30px;">
      <form action="" method="post" style="text-align: center;" class="k_form">
        <input type="text" class="form_div_k" placeholder="Your Name" required name="name">
        <input type="email" class="form_div_k" placeholder="Your Email" required name="email">
        <textarea style="height: 100px; width: 99%; padding-top: 7px; min-width: 99%;" class="form_div_k form_div_width" cols="30" rows="10" placeholder="Your Message" name="txtarea" required></textarea>
        <br><br>
        <input type="submit" class="register_button" value="Send Message" name="contactf_submit">
      </form>
    </div>
  </div>
</div>


<?php include "include/footer.php"; ?>


