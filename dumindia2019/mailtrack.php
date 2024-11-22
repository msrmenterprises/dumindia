<?php
date_default_timezone_set('Asia/Kolkata');
include "init/init.php";
include "include/header.php"; 
require 'sendgrid_files/vendor/autoload.php'; // If you're using Composer (recommended)
include_once('sendgrid_files/credentials.php');


    if(isset($_GET['subject']))
    {
    
	    $FROM_EMAIL = "vishwajeet@vishwajeet.com";
	    $from_name = "vishwajeet mail track pvt ltd";
	    $subject = "mail track notice";
	    $TO_EMAIL = "kanika@cruxcreativesolutions.com";
	    $htmlContent = "subject with text <b>".$_GET['subject']."</b> is opened";
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
	        //echo "<script>alert('$m');</script>";
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
  

?>