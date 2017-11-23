<!DOCTYPE html>
<html lang="en">
  <head>
  	<?php include 'includes/head_info.php'; ?>
  	<?php include 'includes/head_files.php'; ?>
  	
    <?php include 'includes/title.php'; ?>
    
    <!--Page Specific CSS -->
    <link href="css/form.css" rel="stylesheet"/>
    <style>
    </style>
    
    <?php include 'includes/google_analytics.php'; ?>
  </head>

  <body>
  	<?php include 'includes/navbar.php'; ?>

    <!-- Begin page content -->
    <div class="container">
      <div class="page-header">
        <h1>Register for Email Alerts</h1>
      </div>
      
      <form style="width: 300px;" name="reg" method="post" action="thank_you.php">
      	<div class="form-group">
      		<label for="email" style="font-size: 1.5em;">Email: </label>
      		<input type="email" name="email" id="email" pattern=".+@.+\.[A-Za-z]{2,4}" class="form-control" placeholder="Email" required/>
      	</div>
      	
      	<div class="form-group">
      	  <label for="zip" style="font-size: 1.5em;">Zip Code: </label>
      	  <input type="text" name="zip" id="zip" pattern="\d{5}" class="form-control" placeholder="Zip Code" required/>
      	</div>
      	
      	<div class="form-group">
      		<input type="hidden" name="type" value="email" />
			<label for="restriction" style="font-size: 1.5em;">Watering Restrictions: </label>
			<fieldset id="restriction">
				<p>
					<input name="restriction" type="radio" value="-1" id="restriction-none" checked>
					<label for="restriction-none" style="font-weight: normal;">None</label>
					<br />
					<input name="restriction" type="radio" value="0" id="restriction-even">
					<label for="restriction-even" style="font-weight: normal;">Even Days Only</label>
					<br />
					<input name="restriction" type="radio" value="1" id="restriction-odd">
					<label for="restriction-odd" style="font-weight: normal;">Odd Days Only</label>
				</p>
			</fieldset>
		</div>
      	
      	<button class="btn btn-default" type="submit">Go</button>
      </form>
      <br>
      <p class="lead">
      	You will receive an email alert at 6pm EDT notifying you that you need to irrigate your lawn within the next 12 hours. The alerts will come from
      	alerts@when2water.org. Please add this address to your contacts or address book to prevent messages from going into your spam folder.
      </p>
      <!-- <form name="getSignal" method="get" action="./response.php">
			<div class="form-group">
				<label for="zip" style="font-size: 1.5em;">Zip Code: </label>
				<input type="text" name="zip" id="zip" pattern="\d{5}" class="form-control" placeholder="Enter zip code"/>
			</div>
			<button class="btn btn-default" type="submit">Go</button>
		</form> -->
      
      <!-- <p class="lead">Pin a fixed-height footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS. A fixed navbar has been added with <code>padding-top: 60px;</code> on the <code>body > .container</code>.</p> -->
      <!-- <p>Back to <a href="../sticky-footer">the default sticky footer</a> minus the navbar.</p> -->
    </div>
    
    <?php include 'includes/footer.php'; ?>
    
    <?php include 'includes/body_end_bootstrap.php'; ?>
  </body>
</html>
