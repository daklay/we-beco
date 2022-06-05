<?php

$name = $_POST['name'];
$company = $_POST['company'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$subject = "ordishop";

$mailheader = "From:".$name."<".$email.">\r\n";

$recip = "mossaabamimaryc@gmail.com";

mail($recip, $subject, $message, $mailheader)
or die(" Error");
// ther will be a problem of smtp in order to fix the probleme you need to change some lines in php.ini and that problem only if your are trying to send an email locally but online its solv itselve
echo"sent successfully";
?>