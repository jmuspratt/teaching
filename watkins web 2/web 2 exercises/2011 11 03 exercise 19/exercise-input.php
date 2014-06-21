<!doctype html>
<!--[if lt IE 7]> <html lang="en"> <![endif]-->
<!--[if IE 7]>    <html lang="en"> <![endif]-->
<!--[if IE 8]>    <html lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
<title>Exercise 19: Input</title>
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
<h2>Exercise</h2>

<p>Below I've copied the dinner form from Exercise 15.</p>


	<h3>Order Your Dinner</h3>
	 <!-- START FORM  -->
	
	
	<!-- We'll use the POST method here, so the various form choices will NOT be visible in teh URL when the form is submitted. But the exercise-output.php file will receive the data all the same. -->
<form id="dinner" method="post" action="exercise-output.php">
			
		<h4>Main Course</h4>
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
	
		<h4>Extras</h4>
		<div>
			<input type="checkbox" value="Yes" name="horseradish" id="horseradish" />
			<label for="horseradish">Horseradish on the side</label>
		</div>
			
		<div>
			<input type="checkbox" value="Yes" checked="checked" name="utensils" id="utensils" />
			<label for="utensils">I will eat with a fork and knife</label>
		</div>
		
		<label for="condiment">Condiment</label>		
		<div>
			<select id="condiment" name="condiment">
				<option value="Mustard">Mustard</option>
				<option value="Mayo">Mayo</option>
				<option value="Ketchup">Ketchup</option>
			</select>
		</div>
		
				<div>
			<input type="submit" class="button" id="dinner-submit" name="dinner-submit" value="Reserve my dinner" />
		</div>		
		
	</form>
	<!-- END FORM  -->


</div>
</div>

</body>
</html>