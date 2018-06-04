<?php 
// verify that zip was sent
if (! isset($_GET['zip'])) {
	// if not, then redirect back to the form
	header("Location: /embed/form.php");
}

?><html>
	<head>
		<link href="/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<?php
		
		$ch = curl_init("http://api.when2water.org/index.php?zip=".$_GET['zip'] . "&restriction=".$_GET['restriction']);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$out = curl_exec($ch);
		curl_close($ch);
		try {
			$sign = intval($out);
			if ( ! (-4 <= $sign && $sign <= 1 && $sign != 0)) {
				throw new Exception("Internal Error");
			}
		} catch (Exception $e) {
			$sign = -4;
		}
		if ($sign === 1) {
			$index = 0;
		}
		else {
			$index = -$sign;
		}
		$style = array("success", "danger", "danger", "danger", "danger");
		$message = array("You should water.", "No need to water today.", "Internal error.", "Invalid zip code.", "Internal Error.");
		
		?><h3 class="text-<?php echo $style[$index]; ?>"><?php echo $message[$index]; ?></h3>
		
		<p>You entered the zip code: <br /><b><?php
		echo $_GET['zip']; // send the entered zip code
		
		try {
			$pch = curl_init("http://api.when2water.org/zipInfo.php?zip=" . $_GET['zip']);
			curl_setopt($pch, CURLOPT_RETURNTRANSFER, true);
			$response = curl_exec($pch);
			curl_close($pch);
			if ($response !== null && $response !== "1" &&
				$response !== "2"  && $response !== "3" ) {
				// valid response
				echo " (" . $response . ")";
			}
		} catch (Exception $e) {
			// do nothing
		}
		
		?></b>.</p>
		<p><a href="./form.php">Enter a another zip code</a></p>
	</body>
</html>