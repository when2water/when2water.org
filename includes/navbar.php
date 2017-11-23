<!-- Fixed navbar -->
<?php $currentPage = basename($_SERVER["SCRIPT_FILENAME"]); ?>
<div class="navbar navbar-default navbar-static-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">when2water</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li <?php if ($currentPage == 'index.php') {echo 'class="active"';} ?>><a href="index.php">Home</a></li>
        <li <?php if ($currentPage == 'how_it_works.php') {echo 'class="active"';} ?>><a href="how_it_works.php">How It Works</a></li>
        <li <?php if ($currentPage == 'api.php') {echo 'class="active"';} ?>><a href="api.php">API</a></li>
        <li class="dropdown<?php if ($currentPage == 'email_alert_registration.php' ||
									 $currentPage == 'text_message_alert_registration.php' ||
									 $currentPage == 'unsubscribe.php')
								 { echo ' active'; } ?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="100" data-close-others="true">Alerts <b class="caret"></b></a>
          <ul class="dropdown-menu">
          	<li><a href="email_alert_registration.php">Email Alerts</a></li>
            <li><a href="text_message_alert_registration.php">Text Message Alerts</a></li>
            <li><a href="unsubscribe.php">Unsubscribe From Alerts</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li <?php if ($currentPage == 'about.php') {echo 'class="active"';} ?>><a href="about.php">About</a></li>
        <li <?php if ($currentPage == 'contact.php') {echo 'class="active"';} ?>><a href="contact.php">Contact</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>