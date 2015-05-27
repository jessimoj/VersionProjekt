<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, height=device-height">
<meta charset="utf-8">
<title><?php echo $pageTitle; ?></title>
<link rel="stylesheet" type="text/css" href="../css/normalize.css">
<link rel="stylesheet" type="text/css" href="../css/sassystyle.css">
<link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
</head>

<body>
<div class="wrapper">
<!--Navbar-->
<div class="navbar" role="navigation">
	<ul>
		<li><a <?php if($section === "index") { echo 'class="active"'; } ?> href="index.php">Start</a></li>
    	<li><a <?php if($section === "aboutMe") { echo 'class="active"'; } ?> href="about-me.php">Om mig </a></li>
        <li><a <?php if($section === "portfolio") { echo 'class="active"'; } ?> href="portfolio.php">Portfolio</a></li>
        <li><a <?php if($section === "background") { echo 'class="active"'; } ?> href="background.php">Bakgrund</a></li>
        <li><a <?php if($section === "cv") { echo 'class="active"'; } ?> href="cv.php">CV</a></li>
        
	</ul>
</div>

<div class="header">
<a href="index.php">
<img class="logo" src="../pics/loggaPort.png" alt="Start">
</a>
</div>