<?php

// SEND NOTIFICATION EMAIL 
//   $to = "";
//   $subject = "";
//   $message = "";
$from = "info@chinakigali.com";


// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: Kab Store <info@chinakigali.com>' . "\r\n";
$headers .= 'Cc: admin@chinakigali.com' . "\r\n";

mail($to, $subject, $message, $headers);
