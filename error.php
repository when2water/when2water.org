<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'includes/head_info.php'; ?>
	<?php include 'includes/head_files.php'; ?>

	<?php include 'includes/title.php'; ?>

	<?php include 'includes/google_analytics.php'; ?>
</head>

<body>
	<?php include 'includes/navbar.php'; ?>

	<!-- Begin page content -->
	<div class="container">
		<div class="page-header">
			<h1><?php echo $_GET['e'] ?> Error</h1>
		</div>
		<p class="lead">
			To report this error, send an email to the <a href="mailto:info@when2water.org">webmaster</a>.
		</p>
		<p class="lead">
			Or, go back <a href="index.php">home</a>.
		</p>
	</div>

	<?php include 'includes/footer.php'; ?>

	<?php include 'includes/body_end_bootstrap.php'; ?>
</body>
</html>
