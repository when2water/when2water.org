<html>
	<head>
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<!-- <link href="../css/slider.css" rel="stylesheet" /> -->
		<link href="../css/form.css" rel="stylesheet"/>
		
		<style>
			.lessBottom {
				margin-bottom: 15px;
			}
		</style>
	</head>
	<body style="margin: 0 5px;">
		<form name="getSignal" method="get" action="./response.php" style="margin-bottom: 0px;">
			<div class="form-group lessBottom">
				<label for="zip" style="font-size: 1.5em;">Zip Code: </label>
				<input type="text" name="zip" id="zip" pattern="\d{5}" class="form-control" placeholder="Enter zip code" required/>
			</div>
			<div class="form-group lessBottom">
				<label for="restriction" style="font-size: 1.5em;">Watering Restrictions: </label>
				<fieldset id="restriction">
					<input name="restriction" type="radio" value="-1" id="restriction-none" checked>
					<label for="restriction-none" style="font-weight: normal;">None</label>
					<br />
					<input name="restriction" type="radio" value="0" id="restriction-even">
					<label for="restriction-even" style="font-weight: normal;">Even Days Only</label>
					<br />
					<input name="restriction" type="radio" value="1" id="restriction-odd">
					<label for="restriction-odd" style="font-weight: normal;">Odd Days Only</label>
				</fieldset>
			</div>
			<!-- <div class="form-group">
				<label for="slider">Something: </label>
				<input name="threshold" id="slider" type="text"
							data-slider-id='slider' data-slider-tooltip="hide"
							data-slider-min="-2" data-slider-max="2" data-slider-step="1" data-slider-value=0/>
			</div> -->
			<button class="btn btn-default" type="submit">Go</button>
		</form>
		
		<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script type="text/javascript" src="../js/bootstrap-slider.js"></script>
		<script>
			$("#slider").slider({
				
			});
		</script> -->
	</body>
</html>