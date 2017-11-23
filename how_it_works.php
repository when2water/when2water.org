<!DOCTYPE html>
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
        <h1>How It Works</h1>
      </div>
      <p class="lead">
Our algorithm downloads past, present, and forecasted weather data for your zip code from the NOAA. 
It uses information like precipitation, cloud cover, temperature, and rainfall to
power a machine learning (ML) classifier and make irrigation decisions. 
Our algorithm has been extensively trained and tested, and has been proven to save large amounts of water and money
without damaging lawn. In recent pilot tests, residential water use was decreased by 81% and lawn health acutally improved. More detailed information about our
algorithm and testing can be found <a href="http://westford.wickedlocal.com/article/20140808/News/140807176/" target="_blank">here</a>.
      </p>
      <!-- <p class="lead">Pin a fixed-height footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS. A fixed navbar has been added with <code>padding-top: 60px;</code> on the <code>body > .container</code>.</p> -->
      <!-- <p>Back to <a href="../sticky-footer">the default sticky footer</a> minus the navbar.</p> -->
    </div>
    
    <?php include 'includes/footer.php'; ?>
    
    <?php include 'includes/body_end_bootstrap.php'; ?>
  </body>
</html>
