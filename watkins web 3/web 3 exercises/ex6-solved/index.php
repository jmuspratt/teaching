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
		<li class="current"><a href="index.php">Functions</a></li>
		<li><a href="index2.php">Loops</a></li>
		</ul>
			
	</nav>
			
	
</header>

	<section id="main" role="main" class="cf">
			
		
	<h2>Functions</h2>
	
<section>

<?php
	// Functions are sort of mini-programs which process data. Here are the fundamental things to know about functions:
	
	// THING 1. Functions can output information into your document (if they use an echo or print statement), but more often they just "RETURN" information. "Returning" the info allows it to be stored in a varibale of your choosing, but it does NOT echo it. The idea is that you can store the returned value in a variable and manipulate it further with PHP before echoing it: 
		// Example:
		$the_numeric_day_of_the_month = date('j'); // here we use the date() function, built-in to PHP, and store the value that it returns in a variable.
		echo ("<p>The day of the month is $the_numeric_day_of_the_month.</p>"); // now we echo the value within some HTML

		?>
	</section>
	<section>
		<?php 

	// THING 2. Some functions require one or more inputs (aka "parameters" or "arguments") to work, and behave differently depending on what you input. Other functions don't need any input. Still others make the input optional but use a default value if you don't specify one.
	// Example:
	// Go take a look at this page now: http://us3.php.net/manual/en/function.date.php
	// The date() function takes certain letters of the alphabet as inputs and gives back different information.
	// You just have to look up which letter to use depending on what you want. Uppercase vs. lowercase matters!
	$the_numeric_day_of_the_month = date('j'); 
	$the_numeric_day_of_the_year = date('z'); 
	$the_month_name = date('F'); 
	$the_year_number = date('Y');
	
	echo ("<p>Today is day $the_numeric_day_of_the_month of $the_month_name in the year $the_year_number.</p>"); // now we echo the value within some HTML
	// There's now reason you can't do multiple things in one step. Let's run the date function twice, getting back hours and minutes, but concatenate the result with a colon in the middle:
	$the_time = date('h') . ":" . date('i');
	
	echo ("<p>The server thinks the time now $the_time.</p>"); // now we echo the value within some HTML

	// Let's fix the time zone issue with another built-in PHP function. date_default_timezone_set() requires a text string from this page to determine the correct offset: http://www.php.net/manual/en/timezones.america.php
	date_default_timezone_set('America/Chicago'); // from this point forward the date() function will take into account the time zone.

	$the_time = date('h') . ":" . date('i'); 
	echo ("<p>The time here in Nashville is actually $the_time.</p>"); // now we echo the value within some HTML

	?>
</section>
<section>
	<?php 	
	// THING 3. Some functions are native to the PHP processor; but you can also define your own. To do so, use the word function, your function name, and then curly braces. Notice the use of echo vs return.
	// Example:
	
	function echohello() {
		echo ("<p><strong>hello!</strong></p>");
		}
		
		echo ("I am about to run this crazy <code>echohello</code> function...</p>");
		echohello(); // writing the function here runs it. Since echohello() uses an echo statement, it will echo the HTML it stores.
	
	
	// Let's do it the other way, where the function just RETURNS a value:

	function returnhello() {
		return ("<p><strong>hello!</strong></p>"); // return, not echo
		}
		
	echo ("I am about to run this crazy <code>returnhello()</code> function...");
	returnhello();  // running the function

	echo ("<p>Nothing happened, because I didn't manually <code>echo</code> the value that <code>returnhello()</code> returns.</p>");
	echo ("<p>So let's echo the function instead:</p>");
		
	echo returnhello();
		
	echo ("<p>We could also store the value, then echo it:</p>");
	$message = returnhello();
	echo $message;

		?>
	</section>
	<section>
		<?php 	
	
	// Here's an example of a more useful function that takes an input paramater:
	
	function wrap_in_strong_tags($input) {
		return ("<strong>" . $input . "</strong>"); // concatenate paragraph tags before and after the input
	}
	
	// Now we can use our new function by running any text or variable:
	echo ("<p>");
	echo wrap_in_strong_tags("My text in need of bolding"); 
	echo ("</p>");

	$unbolded_text = ("My text in need of bolding");
	$bolded_text = wrap_in_strong_tags($unbolded_text); // NOTICE: we DO NOT need to use a variable called $input -- that was just an internal variable for the purposes of defining how the function should work. Our function knows to expect a single paramater variable, so it doesn't really care what that this one is called $unbolded_text here.
	echo ("<p>$bolded_text</p>");
	
	?>
	</section>
	<section>
	<?php 
	
	// Functions can take any number of paramaters, which is particularly useful for calculations. 
	
	function add_on_sales_tax($x, $y) { // define a function that takes two inputs (price and sales tax rate)
		$multiplier = $y/100 + 1;  // e.g. $y is 5, then the multipler should be 1.05
		$total_with_sales_tax =  $x * $multiplier; // e.g. $x is $10, so the total should be $10.50
		$total_with_sales_tax = round ($total_with_sales_tax, 2); // lets round things off to 2 decimals using the built-in round() function -- functions within functions!
		
		return $total_with_sales_tax;
	}
	
	// To use this function we have to know exactly the form the inputs need to be in. In this case: a dollar amount as the first input (29.99) and sales text expressed as a percent as the second value (7)
	
	echo ("<p>The price is 29.99, but since Tennesee has 7% sales tax, the total will be $"); 
	$total = add_on_sales_tax(29.99, 7); // run the function with the two paramaters
	echo $total; // echo the total
	echo ("</p>");

	
	?>
	</section>
	<section>
		<?php 
	
	// Imagine we had an associative array of sales taxes, where the key is the state abbreviation (TN) and the value is the sales tax rate (7).
	
	$sales_taxes = array("TN" => 7, "KY" => 6, "TX" => 6.25); 
	
	// Now we can pass that sales tax rate to our function as the second paramater:
	echo ("<p>In TN that $29.99 book will cost you $"); 
	echo add_on_sales_tax(29.99, $sales_taxes[TN]); echo (".</p>");
	
	echo ("<p>In KY that $29.99 book will cost you $"); 
	echo add_on_sales_tax(29.99, $sales_taxes[KY]); echo (".</p>");
	
	echo ("<p>In TX that $29.99 book will cost you $"); 
	echo add_on_sales_tax(29.99, $sales_taxes[TX]); echo (".</p>");
	
	?>
	</section>
	<section>
	<?php 
	
	// FUNCTION EXERCISE 1: Write a function called calculate_birth_year() that accepts two paramaters -- the first should be the user's age. The second should be a text letter (Y or N) that indicates whether the person's birthday has passed this year or not. Make use of the date() function WITHIN your function to ensure your code will work no matter what year it is.
	
	// ↓ Your code here ↓ 	
	
	function calculate_birth_year($age, $birthday_yet) {
		$this_year = date('Y');
		$output = $this_year - $age;
		if ($birthday_yet == "N") {$output = $output - 1;}
		return $output;
		}

	// ↑ Your code here ↑ 


	// To test your function, uncomment the next four lines. You can tinker with the first two lines to make sure your function works with various possibilities.
		$age = "32";
		$birthday_yet = "N";
		$birth_year = calculate_birth_year($age, $birthday_yet); 
		echo ("<p>Since your age is $age, you were born in $birth_year.</p>");
	
		?>
		</section>
		<section>
			<?php 

	// FUNCTION EXERCISE 2: 
	// PHP has a built-in function called strlen() (short for "String Length") that takes a single string as a paramater and returns the number of characters in the string. Example: 
	
		strlen("Joe"); // returns 3 (but doesn't echo anything by itself)
		strlen("Joseph"); // returns 6 (but doesn't echo anything by itself)
	
	// There's another function called substr() ("Sub-string"?) which, when given a string and a few more paramaters, will return a particular portion of the string. Here's how to grab the FIRST LETTER of a string:
	
	 	 substr("Gertrude", 0, 1); // returns "G" (but doesn't echo anything by itself)
	
	
	
	// Write a function called check_username() that makes use of these built-in functions and some conditionals in order to check the validity of a username. The "rules" are (1) the username must be 7 letters long OR more and (2) the first letter cannot be q (lowercase). If the username violates one of these rules, your function echo a message that explains what's wrong.

	// ↓ Your code here ↓ 

	function check_username($username) {
		$length = strlen($username);
		$first_letter = substr($username, 0, 1);
		if ( $length < 7 && $first_letter == "q" ) 		{$response = "Username needs to be 7 or more letters, and no Q at the beginning!";}
		elseif ( $length < 7 && $first_letter !== "q" ) {$response = "Username needs to be 7 or more letters!";}
		elseif ( $first_letter == "q") 					{$response = "Q not allowed at the beginning of your username!";}
		else {$response = "Good username!";}
		return $response;
		}
	
	// ↑ Your code here ↑ 


	// To test your function, uncomment the next 2 lines. You can tinker with the first line to make sure your function works with various possibilities.
		$username = "qjmuspratt";
		$response = check_username($username);
		echo $response;
	
?>
</section>


	<footer class="clear cf">

	<p>A Watkins College production.</p>

	</footer>

</section> <!-- /main -->



</body>
</html>