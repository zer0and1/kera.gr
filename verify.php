<?php
//if(isset($_POST['sendButton'])) {
	if($_POST['emailTo'] == '') {
		$emailToError = '<span class=\"error\">May you replace the receipient email address. Refresh the page</span>';
	} 
		else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", $_POST['emailTo'])) {
		$emailToError = '<span class=\"error\">You have changed the receipient email address. Refresh the page</span>';
		}
	if($_POST['Name'] == '') {
		$nameError = '<span class=\"error\">You forgot to enter your name.</span>';
	}
	if($_POST['country'] == '') {
		$phoneError = '<span class=\"error\">You forgot to enter your country name.</span>';
	}	
	
/*	if($_POST['Email'] == '') {
		$emailFromError = '<span class=\"error\">You forgot to enter the email address to send from.</span>';
	} else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", $_POST['Email'])) {
		$emailFromError = '<span class=\"error\">Enter a valid email address to send from.</span>';
	}
	
	if($_POST['companyName'] == '') {
		$companyError = '<span class=\"error\">You forgot to enter your company name.</span>';
	}*/
	
	if($_POST['textMessage'] == '') {
		$messageError = '<span class=\"error\">You forgot to enter the message.</span>';
	}

	if(!isset($emailToError) && !isset($emailFromError) && !isset($nameError) && !isset($countryError) && !isset($messageError)) {
		include('sendEmail.php');		
	}
//}

?>