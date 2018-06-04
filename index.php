<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'includes/head_info.php'; ?>
	<?php include 'includes/head_files.php'; ?>

	<?php include 'includes/title.php'; ?>

	<!--Page Specific CSS -->
	<style>
	.blend {
		border: none;
	}
	.inline {
		float: left;
	}
	.bullet {
		text-indent: 20px;
	}
</style>

<?php include 'includes/google_analytics.php'; ?>
</head>

<body>
	<?php include 'includes/navbar.php'; ?>

	<!-- Begin page content -->
	<div class="container">
		<div class="page-header">
			<h1>Should I turn on my sprinkler system today? Find out:</h1>
		</div>
		<div>
			<div class="inline" style="padding-right: 20px;">
				<iframe height="300px" src="embed/form.php" class="blend"></iframe>
			</div>
			<div style="font-size: 1.15em;">
				<p> 
					Welcome to when2water. Just follow our 3 easy steps and you’ll be on your way to saving up to 80% on your outdoor irrigation water bills using our <a href="http://westford.wickedlocal.com/article/20140808/News/140807176/" target="_blank">Google Science Fair award-winning algorithm:</a>
				</p>
				<p class="bullet">
					1. Enter your zip code as well as any odd/even watering restrictions you have on the left. Then click “Go”
				</p>
				<p class="bullet">
					2. View your custom watering recommendation! If the system tells you to water today, then turn on your sprinkler system. Otherwise, turn it off
					to save water and money.
				</p>
				<p class="bullet">
					3. Come back tomorrow and repeat to view your new recommendations. 
				</p>
				<p>And that's it! Learn more about us on the <a href="about.php">About Us</a> page, or if you're interested in the nitty-gritty of our algorithm, check out the <a href="how_it_works.php">How It Works</a> page.
					Remember, <b>our service is free and always will be</b>. We hope you find it as useful as we do, and most of all, we hope you enjoy saving water and money as much we do! Thanks!
				</p>

			</div>
		</div>
	</div>

	<?php include 'includes/footer.php'; ?>

	<?php include 'includes/body_end_bootstrap.php'; ?>
</body>
</html>
