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
	
	function process_form{
	$_SESSION['color_choice'][] = $_POST['color_choice'];
	print ("Thank you for choosing $_POST['color_choice']");
		}
		 	
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


<style>

body {background:<?php echo $color_choice; ?>}

</style>



</head>



<body>

<div id="wrap">

<div id="main">

<h1>Welcome</h1>

<h2>Demo</h2>

		



<h2>Exercise</h2>

<p>Below I've copied the dinner form from Exercise 15.</p>


	<h3>Order Your Dinner</h3>

</body>
</html>