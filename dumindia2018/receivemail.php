<?php
// require 'sendgrid/vendor/autoload.php'; // If you're using Composer (recommended)
// Comment out the above line if not using Composer
require("sendgrid/vendor/sendgrid-php.php"); 
// If not using Composer, uncomment the above line

$email = new \SendGrid\Mail\Mail(); 
$email->setFrom("kanika@cruxcreativesolutions.com", "kanika sharma");
$email->setSubject("Sending with SendGrid is Fun");
$email->addTo("kanikazameen07@gmail.com", "kanika sharma");
$email->addContent(
    "text/html", "<strong>and easy to do anywhere, even with PHP</strong>"
);
$sendgrid = new \SendGrid(getenv('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'));
try {
    $response = $sendgrid->send($email);
    print $response->statusCode() . "\n";
    print_r($response->headers());
    print $response->body() . "\n";
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
?>