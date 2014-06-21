<!doctype html>
<!--[if lt IE 7]> <html lang="en"> <![endif]-->
<!--[if IE 7]>    <html lang="en"> <![endif]-->
<!--[if IE 8]>    <html lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
	<title>Exercise 5: Control Structures, Includes</title>
	
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" media="all" href="style.css" />

</head>

<body>
	
	<header class="cf">
			<h1>Exercise 5</h1>

	<nav>
		<ul>
		<li><a href="index.php">Variables, Arrays</a></li>
		<li class="current"><a href="index2.php">Control Structures, Includes</a></li>
		</ul>
			
	</nav>
			
	
</header>

	<section id="main" role="main" class="cf">
		
		<h2>Includes</h2>
		<?php
		
		// Includes are a simple way of scooping up the contents of an external file and inserting them into the current file. 
		// Open up myinfo.php and look at the contents.
	
		// suppose we now set a variable:
		$my_favorite_philosopher = "Socrates";
	
		// and output it in some HTML:
		echo ("<p>My favorite philosopher is $my_favorite_philosopher.</p>");
	
	
		// Let's now include the file.'Include' is a PHP FUNCTION like 'echo', and it takes as a paramater the file path and filename. This should go in quotation marks and parentheses:
	
		include ('myinfo.php'); // almost exactly as if we'd inserted myinfo.php's code right here  
	
		// Notice what the following code will output if we run it again:
		echo ("<p>My favorite philosopher is $my_favorite_philosopher.</p>");

	
	// ------------------------------------------
	// INCLUDE EXERCISE: let's use variables and includes together in a way output some blog information.
	
	// First, store some sample info of your own making in an associative array with three elements. The array should be called $post and you should store the post's title, date, and content in it (in fact, use those words as your array keys).
	$post['title'] = "My first post";
	$post['date'] = "Jan 30";
	$post['content'] = "I love design.";
	
	
	// now create a new file called snippet-post.php. In that file, you need to echo the three elements you've defined above, but wrapped in valid, semantic HTML. So put the title in an h1, the date in an h2, and the content in a <p> tag. Finally, wrap the whole thing in an article tag.

	// now use the include function to insert the content of snippet-post.php here. 
	include ('snippet-post.php');

	// To show the flexibility of your code, copy and paste your $post variable assignments from above and change all the values (imagine it's a different blog post). 
	$post['title'] = "My second post";
	$post['date'] = "Feb 5";
	$post['content'] = "I love art.";

	// Now copy your include statement below once again, and see the new output.
	include ('snippet-post.php');
	
	?>
			
	<h2>Control structures</h2>
	<section>
	
		<?php
		
		// PHP uses several reserved keywords to test CONDITIONS. This is the classic conditional in PSEUDO-code:
		// if ( [condition] ) {
		//      [ execute some code ]
		//		}
		// else { 
		//      [ execute some other code ]
		//      }
		
		// For Example ....
		
		$age = 25;
		
		$difference = $age - 35;
		$part1 = "<p>Since you are <strong>$age years old</strong>, ";
		
		
		if  ( $difference >= 0 ) { // >= means "greater than or equal to"
			$part2 = "you may run for President.</p>";
			} 
		else {
			$years = abs ($difference);
			$part2 = "you will have to wait <strong>$years more years</strong> until you run for President.</p>";
			}
	
			$response = $part1 . $part2;
			
			// Here's the output
			echo $response;

			// Now go back to line 42 and change $age to 42 to see the other outcome.
			
		
		// There are a few important things to know about conditionals 
		// 1. Conditions always evaluate to either TRUE or FALSE. TRUE and FALSE are fundamental "boolean" states: they aren't the same as the text strings "TRUE" and "FALSE". 
		
		// 2. COMPARISON is not the same as ASSIGNMENT. When testing if a variable matches a particular number or string, use the == (double equals) operator. It compares the two things on either side of the operator and returns TRUE or FALSE. if you use = (single equals), you will inadvertantly assign a new value to the variable. 
		
		  $age = 60; // ASSIGNS the variable $age the value of 60.
		
		  echo ("<p>Your age is $age.</p>"); // prints "Your age is 60."
		
		  if ($age == 60) { // evaluates to TRUE OR FALSE (in this case, TRUE)
			  echo ("<p>You are the same age as Barack Obama!</p>");
			  }
	  		?>
		
	  	</section>
	  	<section>
	  <?php
		  
		// You can also test for the opposite of a condition using the (!) character
		// You should read this as "If ... not " or simply as "Unless..."
		  $name = "Chris";
			
			if ( $name !== "Fred" ) {   // UNLESS $name is equal to Fred... 
				echo ("<p>Your name is not Fred.</p>");
			}	 
			?>

		
		</section>
		<section>
	<?php

			// You can also create a multipart condition using if... elseif... else ...
			// Notice that as above the final ELSE statement expression doesn't have a condition right after it -- you just declare what should happen if none of the above statements return TRUE.
			
  		  $your_state = "Hawaii";
			
			if ($your_state == "Tennessee") { 
				echo ("<p>You live in the center of the universe.</p>");
				}
			elseif ($your_state == "Hawaii" ||  $your_state == "Alaska") { // the || expression means "OR"
				echo ("<p>You live in the non-continental US.</p>");
				}
			else {
				echo ("<p>You live in a continental state that isn't Tennessee.</p>");
				}

		?>
		
	</section>
	<section>
<?php
	
	// ------------------------------------------
	// CONDITIONAL EXERCISE 1: The date('l'); function returns a text string: "Sunday" through "Saturday" based on the server's internal clock.
	
	// Write some PHP that outputs a different statement depending on the day of the week.
	// - Sunday through Tuesday should output "it's the first half of the week"
	// - Wednesday should output "it's the middle of the week."
	// - Thursday through Saturday should output "it's the second half of the week!"
	
	// HERE'S THE CATCH: you may only use ONE Array and ONE "If ... elseif... else" statement.
	// Any other scalar variables are fine.
	
	// Write your code below, following the $today assignment statement. Store your output in a variable called $output. Once you think your script is working, try overriding the $today variable with other strings (i.e. just insert $today = "Wednesday"; below to test the Wednesday condition.)
	
	$today = date("l");
	// ↓ Your code goes here ↓ 
	  
	$day['Sunday'] = 1;
	$day['Monday'] = 2;
	$day['Tuesday'] = 3;
	$day['Wednesday'] = 4;
	$day['Thursday'] = 5;
	$day['Friday'] = 6;
	$day['Saturday'] = 7;

	$day_number = $day[$today];
	
	if     ( $day_number < 3 )   {$output = "it's the first half of the week";}
	elseif ( $day_number == 4 )  {$output = "it's the middle of the week.";}
	else                         {$output = "it's the second half of the week!";}
	// ↑ Your code goes here ↑ 

	
	// This code should now work:
	if ( $output ) {
		echo ("Today is $today, so... ");
		echo $output;
		}
		?>
		</section>
		<section>
<?php 
	// ------------------------------------------
	// CONDITIONAL EXERCISE 2: Duplicate snippet-post.php and rename it snippet-post-condition.php. Edit this copy so that instead of always outputting the array's three elements as an article with headings, it first checks for the value of the variable $template. If $template is set to "fullpost", it should output the structure as it was written before (article tag, headings, paragraph). But if $template is set to "list", it should output the title of the post ONLY, wrapped in an <li> tag.
	
	
	// If you've done the above, this code should now work.
	// (it will pick up $post's values from the top of the page.)
	
	$template = "fullpost"; ?>
	<p> Here is the <strong>full post</strong>:</p>
	<?php include ("snippet-post-condition.php"); ?>
	
	<?php $template = "list"; ?>
	<p>And here is <strong>an unordered list</strong> with just one item in it. It just shows the post&#8217;s title:</p>
	<ul>
	<?php include ("snippet-post-condition.php"); ?>

	</ul>


	</section>

	<footer class="clear cf">

	<p>A Watkins College production.</p>

	</footer>

</section> <!-- /main -->



</body>
</html>