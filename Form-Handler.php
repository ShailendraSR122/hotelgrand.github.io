<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $mobile_number = $_POST['mobile_number'];
    $message = $_POST['message'];

$email_from = 'enquiry.ssr@gmail.com';

$email_subject = 'New Enquiry from Hotel Grand';

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                  "User Email: $mobile_number.\n".  
                    "User Email: $message.\n";

$to = 'enquiry.ssr@gmail.com'
    
?>