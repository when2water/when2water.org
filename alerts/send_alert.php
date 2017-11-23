<?php

$to = $_GET['to'];
if (isset($_GET['confirm'])) {
	// For confirmation messages
	if (isset($_GET['text'])) {
		$subject = "";
		$message = "Your when2water alert registration has been confirmed. " . 
		"You will recieve alerts at 6PM EDT on days you need to water. ";
	}
	else {
		$subject = "when2water Alert Registration Confirmation";
		$message = "<html><body>" . "<p>Thank you for registering for when2water alerts. " . 
		"You will recieve notifications about when2water alerts via email at 6PM EDT on days you need to irrigate your lawn. " . 
		"We recommend watering as soon as possible, but no later than 12 hours after the alert is sent.</p>" . 
		"<p>Please add alerts@when2water.org to your address book to prevent these emails from going to a spam folder.</p>" .
		"<p>If you would not like to receive these emails from us, click to <a href=\"http://when2water.org/unsubscribe.php\">unsubscribe</a>.</p></body></html>";
	}
}
else {
	// For normal alerts
	$date = new DateTime(null, new DateTimeZone('America/New_York'));
	$date = $date->format(DATE_COOKIE);
	if (isset($_GET['text'])) {
		$subject = "";
		$message = "Please irrigate your lawn as soon as possible, but no later than 12 hours from now ($date).";
	}
	else {
		// $date = new DateTime(null, new DateTimeZone('America/New_York'));
		$subject = "Irrigate your lawn within the next 12 hours";
		$message = "Please irrigate your lawn as soon as possible, but no later than 12 hours from now ($date)";
	}
}

$header = "From: when2water Alerts<alerts@when2water.org>\r\n";
if (isset($_GET['text'])) {
	$success = mail($to, $subject, $message, $header);
}
else {
	$header .= "MIME-Version: 1.0\r\n";
	$header .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	$success = mail($to, $subject, $message, $header);
}

if ($success) {
	echo "Alert Sent to $to";
} else {
	echo "Failed.";
}
?>