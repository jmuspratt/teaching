<!doctype html>
<!--[if lt IE 7]> <html lang="en"> <![endif]-->
<!--[if IE 7]>    <html lang="en"> <![endif]-->
<!--[if IE 8]>    <html lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
	<title>Exercise 6: Functions, Loops</title>
	
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" media="all" href="style.css" />

</head>

<body>
	
	<header class="cf">
			<h1>Exercise 6</h1>

	<nav>
		<ul>
		<li><a href="index.php">Functions</a></li>
		<li class="current"><a href="index2.php">Loops</a></li>
		</ul>
			
	</nav>
			
	
</header>

	<section id="main" role="main" class="cf">
			
		
	<h2>For and While Loops</h2>
		
	<?php
	// Loops enable you to repeat an action or sequence of calculations on a set of things, large or small. While there are a few types of loops, the thing they have in common is the following:
	//	1. Something controls how many times the loop should be run
	//	2. One or more variables are usually used in such a way that their value changes each time the loop is run. 
	//  3. Loops can be used to echo information, but also to modify or construct new information to be echoed or used later on, outside the loop.
	
	
	
	?>
	<section>
		
		
	<h3>A <strong>While</strong> Counter</h3>
	
	<?php
	
	// WHILE Loops
	
	// In PSEUDO-code, the idea of a WHILE loop is this:
	// while ([some situation is still true]) {
	//		[keep doing stuff until the situation is no longer true]
	//	}
	
	// Below is a WHILE loop that starts at 1, increments by 1 each time it goes through, and then stops when the counter hits 6. WHILE loops often use a "counter" variable to control when the loop should start and stop:
	
	$counter = 1;  	 // this just gives $counter a starting value
	while ( $counter <= 6 ) { // as long as $counter is less than or equal to 6 ...
		echo ("<p>Now the counter is on the number $counter.</p>"); // this text gets echoed every time the loop runs, but $counter has a  different value every time. 
		$counter = $counter + 1 ; // this looks a little weird but it's the normal way to increment a variable by 1. We're saying "take the old value of $counter, add 1, and store the new value in $counter". This also gets executed every time the loop gets run, because it's INSIDE the curly braces.
		}
		
		
		?>
		
		
		
		</section>
		<section>
	<h3>A <strong>For</strong> Counter</h3>
	
			<?php 

	// WHILE loops are fine but it's somewhat awkward to put one $counter value outside the loop and the incrementing action ($counter = $counter + 1) inside. A FOR loop solves this by letting you specify everything about the loop with three paramaters up front: starting value, "while" value, and incrementing action. Note that these must be separated by semicolons, but the last expression doesn't get one.
	
	// This FOR loop does exactly what the WHILE loop above does:
		for ($counter = 0; $counter <= 6;  $counter= $counter + 1) { // set up all the paramaters for the loop in parentheses: starting value, "while" condition, incrementing expression
			echo ("<p>Now the counter is on the number $counter.</p>");
			}
			
			?>
			</section>
			<section>
			<?php 
		
	// FOR LOOP EXERCISE 1: Use a loop to construct a list of the numbers 10 to 20 and their squares (e.g. the square of 6 is 6*6, or 36).
	
	// ↓ Your code here ↓ 


		
	// ↑ Your code here ↑ 
		
		?>
		</section>
		<section>
		<?php 

	// Loops can be used to manipulate data besides numeric variables. Below, we'll create an array of usernames. A note about arrays: if we aren't too fussy about what element gets what index, we can use the $usernames[] = "whatever" syntax (with no number between the brackets), and PHP will just add the element to the array, automatically incrementing the array key as it goes. 

	$usernames[] = "ajohnson";		// will automatically get array key 0
	$usernames[] = "awagner";  		// will automatically get array key 1
	$usernames[] = "jthompson";		// will automatically get array key 2
	$usernames[] = "xpayne";   		// will automatically get array key 3
	$usernames[] = "rnishimori";	// will automatically get array key 4
	$usernames[] = "nhosselton";	// will automatically get array key 5
	$usernames[] = "kullrich"; 		// will automatically get array key 6
	$usernames[] = "jmuspratt";		// will automatically get array key 7
	$usernames[] = "rcook";    		// will automatically get array key 8
	$usernames[] = "eandre";   		// will automatically get array key 9
	$usernames[] = "kpennington";	// will automatically get array key 10
	$usernames[] = "mfentriss";		// will automatically get array key 11

// Here's proof that it works: we can access any of the elements at random and they will echo correctly:
	$key = rand(0, 11); // let's just pick a random key between 0 and 11 by using the rand() function.
	echo ("<p><strong>Username number $key is $usernames[$key]</strong>. <em>Hit refresh to see another!</em>.</p>");
		
	?>
	</section>
	<section>
	<?php 


	// Now we'll use a FOR loop to dynamically change the array key each time the loop goes around. By inserting $class_names[$counter] into the loop, this has the effect of outputting accessing a different element each time:
	for ($counter = 0; $counter <= 9; $counter=$counter + 1) {
		echo ("<p>The counter is at $counter, and our array at key number $counter has a value of $usernames[$counter].</p>");
		echo ("\n");
		}

		?>
		</section>
		<section>
		
		<h3>An Array of Numbers </h3>
		
		<?php 

	// FOR LOOP EXERCISE 2: Create a FOR loop that CREATES a brand new indexed array called $numbers. The array should have 75 elements in it, and the values should count down: $numbers[0] should have the value 74 and $numbers[74], $numbers[1] should have the value 73, all the way down until $number[74] has the value 0.
	
	// ↓ Your code here ↓ 

	// ↑ Your code here ↑
	
	// FOR LOOP EXERCISE 3: Now write another FOR loop that echoes all the values of $numbers in the format "<p>The element with index 0 has the value 74.</p>", etc.
	
	// ↓ Your code here ↓ 


	// ↑ Your code here ↑
	
		?>
	
	
	<h2><strong>Foreach</strong> Loops</h2>
	
	
		<h3>A list of users</h3>
		<ul>
		<?php 
		

	// FOREACH LOOPS 
	
	// There's one other type of loop that's most comonly used with arrays called FOREACH
	
	// Suppose we are in the middle of a PHP program and want to see the complete contents of $usernames, defined above. We know $usernames is an array, but maybe we don't know how many elements are in it, so we can't use WHILE or FOR. FOREACH is the solution. It lets you loop through the array without having to worry about counters. For indexed arrays, we use this syntax: 
	
	// foreach ($arrayname as $value) {
	//		echo $value;
	//		}
	
			foreach ($usernames as $the_username) { // notice $the_username is sort of like a variable inside a function: it's only needed in the context of the foreach loop, as a stand-in for whatever the contents of the element's value each time through the loop. There's no $the_username outside of the loop.
				echo "<li>Username: $the_username</li>";
			} 
	?>
	</ul>
	
	<?php 
	// Instead of echoing the contents of each element, we could also use FOREACH to construct a new array. Here we will append _student to each username, except for jmuspratt, who gets _teacher, and save the contents in an array called $usernames_with_titles
		foreach ($usernames as $the_username) { 
			if ($the_username == "jmuspratt") {$usernames_with_titles[] = $the_username . "_teacher";} 
			else {$usernames_with_titles[] = $the_username . "_student";} 
		} 
	?>
	
	
	<h3>A list of users with titles appended</h3>
	<ul>
	<?php 
	// and now we run another loop to echo the contents of $usernames_with_titles:
		foreach ($usernames_with_titles  as $the_username) {   
			echo "<li>Username: $the_username</li>";
		} 
	?>
	</ul>
	
	
	
	<?php

	
	// FOREACH LOOP EXERCISE:  
	
	
	// Suppose we make an array of blog post titles
	$posts[] = "Testing, testing, 1-2-3";
	$posts[] = "Lend me your ears";	
	$posts[] = "Design makes me great.";  	
	$posts[] = "Watkins rules.";	
	$posts[] = "Typography and me. A Narrative.";   	
	$posts[] = "Chicken Sandwiches";   	

	// There's a function called strpos which takes a variable and a string as parameters. It will return the position of the sub-string if the string exists, and will return FALSE if it doesn't appera at all. For example:
		
		strpos("Watkins", "ki"); // returns 3 (because ki starts at the third character of the string)
		strpos("Watkins", "qu"); // returns FALSE  


	// Write a FOREACH loop that constructs a new array called $selfish_posts. $selfish_posts containing posts that contain the word "me". 


	// ↓ Your code here ↓ 


	// ↑ Your code here ↑




		echo ("<h3>Some Selfish Posts</h3>");
		echo ("<ul>");
	
		// Write another FOREACH loop that outputs the contents of the new $selfish_posts array, wrapping each in an <li> tag.
	
		// ↓ Your code here ↓ 


		// ↑ Your code here ↑
	
	


	?>
	
	
<section>

<?php
?>

</section>


	<footer class="clear cf">

	<p>A Watkins College production.</p>

	</footer>

</section> <!-- /main -->



</body>
</html>