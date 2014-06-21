	<?php 
	
	// set the variables based on the submitted form contents
	// NOTE how we have to use underscores, not hyphens, in PHP
		
	// dinner form
	$dinner_choice    = $_POST["dinner-choice"];
	$horseradish = $_POST["horseradish"];
	if ($horseradish=="") {$horseradish = "No";}
	$utensils = $_POST["utensils"];
	if ($utensils == "") { $utensils = "No";}
	$condiment = $_POST["condiment"];
	
?>
	
<!doctype html>
<!--[if lt IE 7]> <html lang="en"> <![endif]-->
<!--[if IE 7]>    <html lang="en"> <![endif]-->
<!--[if IE 8]>    <html lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
<title>Exercise 19: Output</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" /> 
<link rel="stylesheet" type="text/CSS" href="basics.css" media="screen" />

	<!--[if lt IE 9]>
	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	</head>
<body>

	<div id="wrap">

		<div id="main">
		

		<?php 
	// Below I've written some PHP that first checks to see if the form was submitted with data properly and then checks for the presence of individual variables before printing each of them. 
	
	// Your tasks are to do the following. 
	// 1. Add some PHP and HTML that displays an image of the chosen dinner. Images are already in teh folder
	// 2. If the user has chosen steak AND checked the "fork and knife" box, print a sentence explaining that a steak knife will be provided.
	// 3. If the user fails to provide a dinner choice, add a sentence that points out their error. For their convenience, copy and paste the "dinner choice" portion of the input form right here on this page, and have it submit itself to this same page. For now don't worry about the other options in the form, just get the $dinner_choice portion to work.
	// NOTE: it's best if you put all of your code BELOW the dinner summary but ABOVE the "go back to change your choices" sentence.
	
		if (isset($_POST['dinner-submit'])) { // open BIG IF condition
				?>
			<p>Thanks for submitting the dinner form. Here is a record of your choices:</p>
			
			<ul>

				<?php 
				// now we'll test to see if each variable exists before printing it...
				if ($dinner_choice) {?> <li>Your dinner choice: <strong><?php echo $dinner_choice; ?></strong></li> <?php }
				if ($horseradish) {?> <li>Horseradish? <strong><?php echo $horseradish; ?></strong></li> <?php }
				if ($utensils) {?> <li>Utensils? <strong><?php echo $utensils; ?></strong></li> <?php }
				if ($condiment) {?> <li>Condiment choice: <strong><?php echo $condiment; ?></strong></li> <?php }
				
				if ($dinner_choice)  {?> <p>Your dinner looks like this:</p><p> <img src="images/<?php echo $dinner_choice; ?>.jpg" alt="" /><?php } 
				if ($dinner_choice == "Steak" && $utensils =="Yes")  {?> <p><strong>We'll have a steak knife ready for you</strong></p><?php } 
			

				if ($dinner_choice == "") {
					echo ("<p><strong>You need to pick a dinner.</strong> Please do so here:</p>");
					
					?>
					<form id="dinner" method="post" action="exercise-output.php">
						<div>
							<input type="radio" value="Lobster" name="dinner-choice" id="lobster" />
							<label for="lobster">Lobster</label>
						</div>
	
						<div>
							<input type="radio" value="Steak" name="dinner-choice" id="steak" />
							<label for="steak">Steak</label>
						</div>
	
						<div>
							<input type="radio" value="Tofu" name="dinner-choice" id="tofu" />
							<label for="tofu">Tofu</label>
						</div>
						<div>
							<input type="submit" class="button" id="dinner-submit" name="dinner-submit" value="Reserve my dinner" />
						</div>	
						</form>
						
					<?php
					
						}
				?>
				<p>Go back to the <a href="exercise-input.php">menu page</a> to change your choicees.</p>
				
			</ul>

			<?php 
			} // close BIG IF consequent
		
		else {  // open BIG ELSE consequent
			?> 
				<p>Sorry, something went wrong and we didn't get your form data.</p>
				<p>Please return to the <a href="demo-input.php">form page</a> and try again.</p>
					
			<?php
				} // close BIG ELSE consequent
			?>


		</div> <!-- /main -->
	</div> <!-- /wrap -->

</body>
</html>