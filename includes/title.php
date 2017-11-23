<title>when2water - <?php
$title = basename($_SERVER['SCRIPT_FILENAME'], '.php');
$title = str_replace("_", " ", $title);
if ($title == "index") {
	$title = "home";
}
$title = ucwords($title);
$title = str_replace("Of", "of", $title);
if ($title == "Api") { $title = "API"; }
echo $title;
?></title>