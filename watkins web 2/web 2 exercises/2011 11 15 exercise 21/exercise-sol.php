<!doctype html>
<!--[if lt IE 7]> <html lang="en"> <![endif]-->
<!--[if IE 7]>    <html lang="en"> <![endif]-->
<!--[if IE 8]>    <html lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
<title>Exercise 21: PHP Functions</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/CSS" href="basics.css" media="screen" />

	<!--[if lt IE 9]>
	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->



</head>



<body>

<div id="wrap">

<div id="main">


<h2>Exercise</h2>

<h3>Part 1</h3>

<?php

// The functions below returns the first of strings that they receive as parameters. Write a page that asks the user to submit their first and last names (in separate text inputs) through a web form. When they submit the page it should reload and welcome them using their initials shows their 

function get_first_letter ($input) {
			$first_letter = $input[0];
			return $first_letter;
				}

?>

	<form method="get" action="exercise-sol.php">
		<div>
			<label for="first-name">First Name</label>
			<input type="text" name="first-name" id="first-name" />
		</div>
		<div>
			<label for="last-name">Last Name</label>
			<input type="text" name="last-name" id="last-name" />
		</div>
		<input type="submit" value="Submit" id="names-submit" name="names-submit" />
	</form>

<?php
	// Now we'll handle the form that was submitted,                
	// using the above function                                     
	if (isset($_GET['names-submit'])) {								
		$first_name = $_GET["first-name"];									
		$last_name = $_GET["last-name"];									
		
		$first_initial = get_first_letter($first_name);
		$last_initial = get_first_letter($last_name);
	
		echo ("<p>Hello <strong>" . $first_initial . $last_initial . "</strong></p>"); 										
		}															
			                                                        	
?>



<h3>Part 2</h3>

<?php

// Knowing that the function and parameter date('G') will return the current hour of the day (0 through 23), write a function (using conditionals) called greeting() that returns the proper greeting: Good morning, good afternoon, or good evening, based on the current time. I've started it by setting the right time zone.

function greeting() {
		date_default_timezone_set("America/Chicago");
		$hour = date('G');
		if ($hour > 0 && $hour < 12)  {return "Good morning";}
		if ($hour > 12 && $hour < 18 ) {return "Good afternoon";}
		if ($hour > 18 && $hour < 24) {return "Good evening";}
		}

// Write another function called salutation() that takes a parameter called $gender. It should return "sir" or "ma'am" depending on whether it receives the string "male" or "female" as a parameter.

function salutation($gender) {
			if ($gender == "Male")  {return "sir";} 
			else { return "ma'am";}
			
			}


// Now create a form and write PHP code to receive the response, making use of your functions to construct the output: the user should identify their gender via radio buttons, and after submitting the page should greet them with the time- and gender-appropriate greeting.

?>

	<form method="get" action="exercise-sol.php">
			<div>
				<input type="radio" value="Male" name="gender" />
				<label for="male">Male</label>
			</div>
			<div>
				<input type="radio" value="Female" name="gender" />
				<label for="female">Female</label>
			</div>

		<input type="submit" value="Submit" id="gender-submit" name="gender-submit" />
	</form>
<?php

	// Now we'll handle the form that was submitted,                
	// using the above function                                     
	if (isset($_GET['gender-submit'])) {								
		$gender = $_GET["gender"];
		
		$greeting = greeting();
		$salutation = salutation($gender);		
	
		echo ("<strong>$greeting $salutation.</strong>");									
		}															
			                                                        	
?>



</body>
</html>