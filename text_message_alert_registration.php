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
        <h1>Register for Text Message Alerts</h1>
      </div>
      
      <form style="width: 300px;" name="reg" method="post" action="thank_you.php">
      	<div class="form-group">
      	  <label for="phone" style="font-size: 1.5em;">Phone Number: </label>
      	  <input type="tel" name="phone" id="phone" pattern="\d{10}" class="form-control" placeholder="Phone Number" required/>
      	</div>
      	
      	<div class="form-group">
      	  <label for="carrier" style="font-size: 1.5em;">Mobile Carrier: </label>
      	  <select id="carrier" name="carrier" class="form-control">
      	    <option value="txt.att.net">AT&amp;T</option>
      	    <option value="vtext.com">Verizon</option>
      	    <option value="tmomail.net">T-Mobile</option>
      	    <option value="pm.sprint.com">Sprint</option>
      	    <!--     	
			    AT&T: number@txt.att.net
			    T-Mobile: number@tmomail.net
			    Verizon: number@vtext.com
			    Sprint: number@messaging.sprintpcs.com or number@pm.sprint.com
			    Virgin Mobile: number@vmobl.com
			    Tracfone: number@mmst5.tracfone.com
			    Metro PCS: number@mymetropcs.com
			    Boost Mobile: number@myboostmobile.com
			    Cricket: number@sms.mycricket.com
			    Nextel: number@messaging.nextel.com
			    Alltel: number@message.alltel.com
			    Ptel: number@ptel.com
			    Suncom: number@tms.suncom.com
			    Qwest: number@qwestmp.com
			    U.S. Cellular: number@email.uscc.net
			 -->
          </select>
      	</div>
      	
      	<div class="form-group">
      	  <label for="zip" style="font-size: 1.5em;">Zip Code: </label>
      	  <input type="text" name="zip" id="zip" pattern="\d{5}" class="form-control" placeholder="Zip Code" required/>
      	</div>
      	
      	<div class="form-group">
      		<input type="hidden" name="type" value="text" />
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
      	You will receive a text message alert at 6pm EDT notifying you that you need to irrigate your lawn within the next 12 hours. 
      	Normal text message rates may apply.
      </p>
      <!-- <p class="lead">Pin a fixed-height footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS. A fixed navbar has been added with <code>padding-top: 60px;</code> on the <code>body > .container</code>.</p> -->
      <!-- <p>Back to <a href="../sticky-footer">the default sticky footer</a> minus the navbar.</p> -->
    </div>
    
    <?php include 'includes/footer.php'; ?>
    
    <?php include 'includes/body_end_bootstrap.php'; ?>
  </body>
</html>
