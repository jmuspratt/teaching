	<?php
// start up your PHP session! 

session_start(); 
// Calculate 60 days in the future
//seconds * minutes * hours * days + current time
	$inTwoMonths = 60 * 60 * 24 * 60 + time(); 
	setcookie('lastVisit', date("G:i - m/d/y"), $inTwoMonths); 
	
	// increment the 'count' element by one on each visit
	$_SESSION['count'] = $_SESSION['count'] +1; 
	$visit_count = $_SESSION['count'];
	
?>


<!doctype html>
<!--[if lt IE 7]> <html lang="en"> <![endif]-->
<!--[if IE 7]>    <html lang="en"> <![endif]-->
<!--[if IE 8]>    <html lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
<title>Exercise 21: PHP Sessions</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/CSS" href="css/basics.css" media="screen" />

	<!--[if lt IE 9]>
	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>

<div id="wrap">

<div id="main">

<h1>PHP Sessions</h1>

<h2>Demo</h2>

<?php

	echo "<p>Hello. You have visited this website $visit_count time(s).</p>";
?>

<h3>Please pick your favorite color</h3>
	<form id="color" method="get" action="home.php">
		<div>
			<select id="color-choice" name="color-choice">
 				<option value="red">Red</option>
				<option value="green">Green</option>
				<option value="blue">Blue</option>
			</select>
		</div>
						



<h2>Exercise</h2>

<p>Below I've copied the dinner form from Exercise 15.</p>


	<h3>Order Your Dinner</h3>

</body>
</html>