<!doctype html>
<!--[if lt IE 7]> <html lang="en"> <![endif]-->
<!--[if IE 7]>    <html lang="en"> <![endif]-->
<!--[if IE 8]>    <html lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
	<title>Exercise 5: Variables, Arrays</title>
	
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" media="all" href="style.css" />

</head>

<body>
	
	<header class="cf">
			<h1>Exercise 5</h1>

	<nav>
		<ul>
		<li class="current"><a href="index.php">Variables, Arrays</a></li>
		<li><a href="index2.php">Control Structures, Includes</a></li>
		</ul>
			
	</nav>
			
	
</header>

	<section id="main" role="main" class="cf">
			
		
	<h2>Variable Storage and Manipulation</h2>
	
		<?php
		// ↑ PHP turned *OPENED* in the previous line.
			
		// PHP variables can store text (aka "strings") or numbers. 
		// - the variable name itself CANNOT contain hyphens or other punctuation marks. 
		// - variables cannot BEGIN with a number
		// - The value of a variable, if a text string, need quotation marks around it.
		
			$guy_1_firstname = "Newt";
			$guy_1_age = 68;
			$guy_2_firstname = "Barack";
			$guy_2_age = 50;
			
		// In PHP it's common to assign values to new variables by performing operations on existing ones.
		
			$age_sum = $guy_1_age + $guy_2_age;
			$age_difference = abs($guy_2_age - $guy_1_age); // we use the 'abs' function to remove a negative sign if guy2's age happens to be the smaller one.
			$age_average = ($age_sum / 2); // PHP is 'procedural': it goes in sequential order down the page, so this line wouldn't have worked if we'd put it above the line where $age_sum gets defined.
			
		// When you're ready to output something to the browser, you use the 'echo' or 'print' function: just insert the variable names into your statement along with the HTML and other text:
			echo ("<p>$guy_1_firstname is $guy_1_age years old, while $guy_2_firstname is $guy_2_age. They are $age_difference years apart.</p>");
			
		
		// If you have double quotation marks in your text strings, you will have to "escape" them so that the PHP interpreter doesn't see those quotes as an end to the quoted string. Use a this backslash: (\) before the " character.
			
			$guy_1_quote = "<p>My slogan is \"Vote for me.\"</p>"; // My slogan is "Vote for me."
			
			echo $guy_1_quote;
			
		// Escaping your quotation marks can get tedious (especially when outputting HTML attributes that have quotation marks in them). So instead, we turn often PHP off and on as necessary. Below we turn PHP off, start our HTML (<p class="important">), and switch in and out of PHP as necessary:
			
		// ↓ PHP *CLOSED* in the next line.
		?>
				
		<p class="important"><?php echo $guy_1_firstname; ?> and <?php echo $guy_2_firstname; ?> have a combined age of <?php echo $age_sum; ?>, so their average age is <?php echo $age_average; ?>.</p>
			
		<?php 
		// ↑ PHP turned *OPENED* in the previous line.
		

	// ------------------------------------------
	// VARIABLE EXERCISE: Let's use PHP variables to store the two things we need to make a hyperlink: the text to be linked and the destination URL (which will go in the href attribute). Use "Watkins College" and http://watkins.edu or some other site you prefer in your example. Put your code under 
	
	// First, store the text to be hyperlinked in a variable.
	
	// Store the URL in a variable:
	
	// Now create a variable called $the_complete_link which combines the above two variables along with the appropriate HTML to make a link. Escape your quotation marks!
		
	// If you've done the above correctly, the code below should now output your link:
	
	if ( $the_complete_link ) {
		echo "<p>";
		echo "You should totally go visit ";
		echo $the_complete_link;
		echo ".</p>";
		}
		?>
		
	<h2>More Variable Manipulation</h2>
	
	<?php
	// Sometimes you want to combine the contents of two or more variables. 
	
	// First. suppose we store the lastnames as variables.
	$guy_1_lastname = "Gingrich";
	$guy_2_lastname = "Obama";
	
	// Now we can use the "concatenation operator" (.) to combine the first and last names. 
	$guy_1_username = $guy_1_firstname . $guy_1_lastname;
	$guy_2_username = $guy_2_firstname . $guy_2_lastname;
		
	echo ("<p>$guy_1_firstname, your username is <strong>$guy_1_username</strong>. $guy_2_firstname, your username is <strong>$guy_2_username</strong>.</p>");
	
	// If we want a space between the first and last names, we just concatenate the two names with the space between them:
	$guy_1_fullname = $guy_1_firstname . " " . $guy_1_lastname;
	$guy_2_fullname = $guy_2_firstname . " " . $guy_2_lastname;

	echo ("<p>Their full names are <strong>$guy_1_fullname</strong> and  <strong>$guy_2_fullname</strong>.</p>");


		
	// ------------------------------------------
	// VARIABLE EXERCISE: It's a good habit to store information in the simplest possible form. Let's say we have the phone number (615) 383-4848. We'll eventually want to output it exactly like that (with the parentheses, space, and hyphen), but let's store it as three separate variables first:
	
	// First, store the area code as a three-digit number. 
	
	// Next, store the second three numbers in a variable called $exchange:	

	// Next, store the last three numbers in a variable called $last_four:	
	
	// Use concatenation to combine $exchange, the hyphen character, and $last_four into a variable called $local_phone

	// Now use concatenation to prefix $local_phone with $area (which should be surround by parentheses); store the result in $full_phone:
	
	// The following code should now output something:

	if ( $local_phone && $full_phone ) {
		echo ( "<p>If you're in Nashville, call <strong>$local_phone</strong>. Otherwise, call <strong>$full_phone</strong>.</p>" );
		}


	?>
	<section>




	<h2>Array Review</h2>
	
<?php
	
	// Variables can also store *ARRAYS*, a more complex structure of information. You can think of an array as a miniature database. The structure of an array involves a set of ELEMENTS, each of which is composed of a KEY and a VALUE.
	
	// The first type of array is called ASSOCIATIVE, which means the keys are text strings. Let's create a variable called $web3 which stores some info about the course:
	
	//   Web 3 Array
	//   ---------------------------------
	//   | KEY    | VALUE                |
	//   | -------| -------------------- |
	//   | title         | Web 3         |   <-- this is an element.
	//   | subject       | Dynamic Sites |   <-- this is also an element.
	//   | room          | 205           |   <-- this is also an element.
	//   | studentcount  | 11            |   <-- this is also an element.
	
	// Here's how we might store these in $web3:
	$web3[title] = "Web 3";
	$web3[subject] = "Dynamic Sites";	
	$web3[room] = 205;
	$web3[studentcount] = 11;

	// We could also have created this array in a single statement using the array function and the arrow ( => ) syntax:
	$web3 = array (title => "Web 3", subject => "Dynamic Sites", room => 205, studentcount => 11); 

	// And we could output a particular element's value like this
	echo "<p>In $web3[title] we will study $web3[subject]. All $web3[studentcount] of you should meet in Room $web3[room]. </p>";
	
	// You can treat each element in the array as if it were its own variable. Here we'll reassign a few values:
	$web3[subject] = "Dynamic Sites: PHP, Wordpress, and a host of other things";	
	$web3[room] = "two-hundred and five"; 
	$web3[studentcount] = $web3[studentcount] + 30000; // increased enrolment

	// and output the same sentence to show the changes:
	echo "<p>In $web3[title] we will study $web3[subject]. All $web3[studentcount] of you should meet in Room $web3[room]. </p>";
	?>
	</section>
	<section>
	<?php 

	// Since the keys are just text strings, you can also specify the key itself as a variable. Here we'll change the value of $key right before outputting the "same" sentence, and we can see the sentence change:
		$key = "subject";
		echo ("<p>The <em>$key</em> of $web3[title] is <strong>$web3[$key]</strong></p>");
		
		$key = "room";
		echo ("<p>The <em>$key</em> of $web3[title] is <strong>$web3[$key]</strong></p>");
		
		$key = "studentcount";
		echo ("<p>The <em>$key</em> of $web3[title] is <strong>$web3[$key]</strong></p>");
	
		?>
		</section>
		<section>
		<?php 
	
	// The second type of array is called INDEXED, which means the keys are numbers. These are a little more common in real world PHP, because the numbers are more easily controlled programatically. Note: the starting index is always 0 (ZERO), NOT 1! Don't ask me why.
	
	// Let's store a simple list of course titles in $web_courses:
	
	$web_courses[0] = "Web 1: Static Pages with HTML and CSS";
	$web_courses[1] = "Web 2: User Interface Design and Development";
	$web_courses[2] = "Web 3: PHP and Dynamic Sites";
	
	echo ("<p>The first course you should take is <strong>$web_courses[0]</strong></p>" );

	// Since the key is numeric, you can do stuff like this:
	$key = 0;
	echo ("<p>I love <em>$web_courses[$key]</em>!</p>");

	$key = $key + 1; // adds 1 to the previous value of $key, so key is now 2
	echo ("<p>I love <em>$web_courses[$key]</em>!</p>");

	$key = $key + 1; // adds 1 to the previous value of $key, so key is now 3
	echo ("<p>I love <em>$web_courses[$key]</em>!</p>");
	
	
	?>
	</section>
	<section>
	<?php 
	
	// ------------------------------------------
	// ARRAY EXERCISE: Here's a list of blog posts:
	
	//   | date   | title           | content                        |    
	//   -------------------------------------------------------------
	//   | Jan 1  | Happy New Year  | It is now 2012.                | 
	//   | Jan 5  | Designing       | I love fonts.                  | 
	//   | Jan 12 | Lunch           | Today I had a turkey sandwich. |
	//   | Jan 15 | Weather         | OMG it sure is raning a lot.   |
	 
	// First, store each post as an array where the key is the column header (aka a database "field") and the value is the contents of that field. The first post can just be $post1 and should contain three fields. Then do the same for $post2, $post3, and $post4


	// This code should now work:
	echo ("<p>On <strong>$post2[date]</strong> I wrote my second blog post. It was called <strong>$post2[title]</strong> and reads as follows:<br />
	<em>$post2[content]</em></p>");
	
	// You can in fact make an array of arrays. Do so now: store $post1, $post2, $post3, and $post4 in a single INDEXED array called $posts. Remember, indexed arrays just use numbers for their keys.

	
	
	// This code should now spit out the contentes of each post:
	foreach ($posts as $index=>$post) {
		echo ("<p><strong>Here is post with index $index:</strong></p>");
		foreach ($post as $key=>$value) {
				echo "<ul>";
			    echo "<li><em>" . $key . "</em>: ".$value . "</li>";
				echo "</ul>";
				}
		}
		


		
?>
</section>


	<footer class="clear cf">

	<p>A Watkins College production.</p>

	</footer>

</section> <!-- /main -->



</body>
</html>