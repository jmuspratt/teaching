<!doctype html>
<!--[if lt IE 7]> <html lang="en"> <![endif]-->
<!--[if IE 7]>    <html lang="en"> <![endif]-->
<!--[if IE 8]>    <html lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
<title>Exercise 19: Demo Input</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/CSS" href="basics.css" media="screen" />

	<!--[if lt IE 9]>
	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>

<div id="wrap">

<div id="main">
<h1>Handling data from PHP forms</h1>
<h2>Demo</h2>

<p>Here is a simple form</p>

	<form id="color" method="get" action="demo-output.php">

		<div>
			<label for="color-choice">Pick a color</label>
			<input type="text" id="color-choice" name="color-choice" required />
		</div>
		
		<div>
			<input type="submit" class="button" id="color-submit" value="Send forth my favorite color" />
		</div>	
	</form>
		
	

<p> Here is the form similar to the one in <a href="http://web2.jamesmuspratt.com/blog/advanced-forms-and-attribute-selectors">Exercise 15</a></p>

	 <!-- START FORM  -->
	
	<!-- notice that our METHOD is "get": this simply means the info from the form is communicated through the URL after it gets submitted-->
	
	<!-- notice also that our ACTION is the demo-output.php file this tells the form where to send the info when it is submiited-->
	<form id="contact" method="get" action="demo-output.php">

		<div>
			<label for="contact-name">Your Name</label>
			<input type="text" id="contact-name" name="contact-name" required />
		</div>
		
		<div>
			<label for="contact-font">Your Favorite Font</label>
			<input type="text" id="contact-font" name="contact-font" />
		</div>
		
		<div>
			<label for="contact-message">Message</label>
			<textarea id="contact-message" name="contact-message" rows="10" cols="28"></textarea>
		</div>
		
		<div>
			<input type="submit" class="button" id="contact-submit" name="contact-submit" value="Send Message" />
		</div>						
		
	</form>
	 <!-- END FORM  -->


</div>
</div>

</body>
</html>