<?php

// echo $_POST['zip'];

/*
// Zip code verification function (from /signal/index.php)
function verifyZip($zip) {
	$ch = curl_init("signal.when2water.org/zipVerify.php?zip=" . $zip);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$verify = curl_exec($ch);
	curl_close($ch);
	if ($verify === "0") {
		return true;
	}
	return false;
}*/


if (isset($_POST['phone']) && isset($_POST['carrier'])) {
	$email = $_POST['phone'] . "@" . $_POST['carrier'];
}
if (isset($_POST['email'])) {
	$email = $_POST['email'];
}

if (isset($email) && isset($_POST['zip']) && isset($_POST['restriction'])) {
	// Process entry
	// echo $email;
	// echo $_POST['zip'];
	// echo $_POST['restriction'];
	$f = fopen(dirname(__FILE__) . "/alerts/alerts.txt", "a+");
	fwrite($f, $_POST['zip'] . "," . $email . "," . $_POST['restriction'] . "," . $_POST['type'] . "\n");
	fclose($f);
	
	$ch = curl_init("alerts.when2water.org/send_alert.php?confirm=1&" . $_POST['type'] . "&to=".$email);
	ob_start();
	curl_exec($ch);
	ob_end_clean();
	curl_close($ch);
}
else {
	header("Location: http://www.when2water.org/");
	exit;
}

?><!DOCTYPE html>
<html lang="en">
  <head>
  	<?php include 'includes/head_info.php'; ?>
  	<?php include 'includes/head_files.php'; ?>
  	
    <?php include 'includes/title.php'; ?>
    
    <!--Page Specific CSS -->
    <style>
    </style>
    
    <?php include 'includes/google_analytics.php'; ?>
  </head>

  <body>
  	<?php include 'includes/navbar.php'; ?>

    <!-- Begin page content -->
    <div class="container">
      <div class="page-header">
        <h1>Successful Registration</h1>
      </div>
      
      <p class="lead">Thank you for registering for alerts. A confirmation email/text has been sent to you.</p>
    </div>
    
    <?php include 'includes/footer.php'; ?>
    
    <?php include 'includes/body_end_bootstrap.php'; ?>
  </body>
</html>
