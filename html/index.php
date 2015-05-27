<?php 
$pageTitle = "Välkommen!";
$section = "index";

?>

<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
    	<li><a href="about-me.php">Om mig </a></li>
        <li><a href="portfolio.php">Portfolio</a></li>
        <li><a href="background.php">Bakgrund</a></li>
        <li><a href="cv.php">CV</a></li>
        
	</ul>
</div>

<div class="header">
<a href="index.php">

</a>
</div>


</div>


<!--Sidkropp-->

<div class="singleCol">


<p id="start-cover">
	 <a href="portfolio.php"> <img src="../pics/jmj.png" alt="Välkommen!"> </a>
</p>


</div>


</div>


<?php include("inc/footer.php") ?>
