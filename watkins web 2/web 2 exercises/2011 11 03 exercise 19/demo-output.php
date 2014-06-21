	<?php 
	
	// Set the variables based on the submitted form contents
	// NOTE how we have to use underscores, not hyphens, in PHP
	
	// color choice form
	$color_choice = $_GET["color-choice"];
	
	// contact form
	$contact_name    = $_GET["contact-name"];
	$contact_font    = $_GET["contact-font"];
	$contact_message = $_GET["contact-message"];
	
?>
	
<!doctype html>
<!--[if lt IE 7]> <html lang="en"> <![endif]-->
<!--[if IE 7]>    <html lang="en"> <![endif]-->
<!--[if IE 8]>    <html lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
<title>Exercise 19: Demo Output</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/CSS" href="basics.css" media="screen" />

	<!--[if lt IE 9]>
	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<style>
		/* We can use inline CSS to override the defaults that were set in basics.css*/
		body  {background-color:<?php echo $color_choice; ?>;}
		p {color:<?php echo $color_choice; ?>;}
		
		<?php 
		if ($contact_font) {
			?>
			 body {font-family:<?php echo $contact_font; ?>;}
		<?php 
			} 
		?>

		
	</style>

	</head>
<body>

	<div id="wrap">

		<div id="main">
		
		<?php 
			// Lets output a sentence ONLY IF the color_choice variable exists (in other words, ONLY IF it was the color form tahat was submitted
		if ($color_choice) {
		?>
			<p>Thanks for submitting the color choice form.</p>
			<p>You chose the color <strong><?php echo $color_choice; ?></strong>!</p>

			<?php 
				}
			?>

		<?php 
			// With the contact form will do it a slightly more correct way. We don't want to check every single variable, so we'll use the GET superglobal 
		if (isset($_GET['contact-submit'])) {
				?>
			<p>Thanks for submitting the contact form.</p>

		<?php 
			// Now we'll test to see if each variable exists before echoing each one. 
			// That way, if a field was left blank, the whole sentence that relates to it will be skipped.
			if ($contact_name) { ?> 
				<p>Your name is <?php echo $contact_name; ?>.</p> 
				<?php } ?></p>
			
			<?php if ($contact_font) { ?> 
				<p>Your favorite font is <?php echo $contact_font; ?>.</p> 
				<?php } ?></p>
			
			<?php if ($contact_message) { ?> 
				<p>Your message was:<br />
				<?php echo $contact_message; ?></p> 
				<?php } ?></p>
			
			<?php 
				} // close IF consequent
				
				?>

		</div> <!-- /main -->
	</div> <!-- /wrap -->

</body>
</html>