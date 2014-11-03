<?php
$mailTo = $_POST['emailTo'];
$mailFrom = $_POST['Email'];
//$subject = $_POST['Name'].", ".$_POST['Phone'].", ".$_POST['companyName'];

$subject = "Website Contact";
$message = $_POST['textMessage'];

ini_set('sendmail_from','webmaster@kera.com');			
echo (@mail($mailTo, $subject, $message, "From: ".$mailFrom))?"<span class=\"send\">Message has been sent successfully</span>":"<span class=\"error\">Sorry, Message has not been sent yet!</span>";
//echo $mailTo.":".$mailFrom.":".$subject.":".$message;
?>