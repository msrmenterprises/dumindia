<?php include "init/init.php"; ?>
<?php include "include/header.php"; ?>

<?php 
if($_SERVER["REQUEST_METHOD"] == "POST")
{
  if(isset($_POST['contactf_submit']))
  {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $txtarea=$_POST['txtarea'];
    $time= time();
    $insert="INSERT INTO contact_detail (name, email, message, date_of) VALUES ('$name', '$email', '$txtarea', '$time')";
    $insert_query=mysqli_query($db, $insert);
    if($insert_query)
    {
      $from=$_POST['email'];
      $to="dum2018@indiasmartgrid.org";
      $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
      $headers .= "From: ".$from." " . "\r\n";
      $headers .= PHP_EOL;
      $subject="Dum Contact us Form Filled By ".$_POST['name'];
      $msg='<div style="width:600px; height:auto; float:left;">
      <div style="width:500px; height:auto; line-height:21px;"><strong>Name:- </strong> '.$_POST['name'].'</div>
      <div style="width:500px; height:auto; line-height:21px;"><strong>Email:- </strong> '.$_POST['email'].'</div>
      <div style="width:500px; height:auto; line-height:21px;"><strong>Message:- </strong> '.$_POST['txtarea'].'</div>
      </div>';
      @mail($to, $subject, $msg,$headers);
      $m="Your Request form is successfully Submitted";
      if($m)
      {
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
		<h1><span class="k_greencolor">Contact us</span> </h1>
		<img src="images/kborder_bottom.png" alt="">
	</div>

	<div class="k_register k_contact_us">
    <h1 class="event_info">Event Information</h1>
    <br>
    <!-- <div class="col-sm-4" style="text-align: left;">
      <a><b>FOR STALL DECORATION AND MEDIA REQUIREMENT AT STALLS, CONTACT EVENT MANAGER:</b> </a><br>
      <a>Name :- Mr. Dinesh K N </a><br>
      <a href="mailto:avland.mail@gmail.com">Email :- avland.mail@gmail.com</a><br>
      <a>Contact No. :- +98452-08171, <br> 98454-46712 </a><br>
    </div> -->

    <div class="col-sm-6" style="text-align: left;">
      <a href="">Venue :- MUMBAI, INDIA</a><br>
      <a href="">Date :- 01 – 02 NOVEMBER 2018 </a><br>
      <a href="">Time :- 10am to 7pm</a>
    </div>

    <div class="col-sm-6" style="text-align: left;">
      <a href="">Email :- dum2018@indiasmartgrid.org</a><br>
      <a href="">Contact No. :- 011-41030398 </a><br>
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