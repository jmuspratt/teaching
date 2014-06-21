<?php
print ("\n\n\n\n");


//------------------
// DEMO

// Note: try running this php file both in the Terminal and on a web server.



// INCLUDES!

// There are several PHP functions that scoop up the contenets of one file and insert them into the current one. "include" is the simplest:


	echo ("<h1>Awesome site</h1>");
	include ("includes/nav.php"); // remember to put quotes around the path to your file
	echo ("<p>Awesome content. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p.>");




// STOPPING AND STARTING PHP
// When working with both HTML and PHP, you should think of PHP as the more "fundamental" language -- it controls what HTML is output to the browser. There are a couple ways to output HTML.


$my_school = "Watkins College";

// Method one: echo or print it.
	echo ("<p>");
	echo ("1. Welcome to my website. I go to $my_school");
	echo ("</p>");
	echo ("\n\n");

// This works fine, but it starts to get tricky when you have quotation marks around your attribute values (which are required in everything up to HTML5).
// So when those come along, you can escape your quotation marks:
	echo ("<p>2. Welcome to my website. I go to <a href=\"http://watkins.edu\">$my_school</a></p>");
	echo ("\n\n");

// Or you can just switch to single quotes for the attribute values (I don't think any browsers have a problem with this):
	echo ("<p>3. Welcome to my website. I go to <a href='http://watkins.edu'>$my_school</a></p>");
	echo ("\n\n");


// But for longer blocks, it's easier to switch off PHP altogether and change to HTML. 
// Notice how the PHP opening and closing tags alternate:
	
//                                                    ↓-------- HTML -------↓                         ↓-HTML-↓
	echo ("<p>4. Welcome to my website. I go to "); ?> <a href="watkins.edu"><?php echo $my_school; ?></a></p> <?php 
	echo ("\n\n");

// But normally we would add line breaks to keep track of where PHP turns on and off. This is the same as 4 but with line breaks. Although it looks different in the Terminal, a browser will ignore the line breaks when rendering the page, so they don't matter.
echo ("<p>5. Welcome to my website. I go to ");
	?> 
	
<a href="watkins.edu">

<?php 
	echo $my_school; 
	?>

</a></p>

<?php // Back into PHP



// One of the coolest things about this technique is that you can turn switch out of PHP *in the middle of a loop* and everything will work as you would expect. Just remember to close the loop after you've switched back to PHP


for ($counter = 1; $counter <= 5; $counter ++) { // OPEN LOOP

?>
	<p>Here is an HTML paragraph. I call it paragraph number <?php echo $counter; ?>.</p>

<?php
}				// CLOSE LOOP


echo ("\n\n\n\n");




//------------------
// EXERCISE

// Try including "header.php", which I've placed in the includes folder
 	include ("includes/header.php");

// Let's say this page (c.php) is the About page on our website.  I've set a variable called $this_page to identify it.
	$this_page = ("about");

// The thing is, we want to include nav.php on every page on our website, and that means we can't set different "class='current' attributes on each list item. To put it another way, by default an include doesn't know where it's being included. But we can use PHP along with the above $this_page identifier to get around this.

// Open nav.php and write a PHP conditional *inside the about <li>* that will check to see the value of $this_page. If it matches the string "about", your code should output the attribute "class='current'" right inside that <li>. Then include nav.php here once again to test it. If it works, the second navigation item should look like this: 		<li class='current'><a href="index.php">portfolio</a></li>
	include ("includes/nav.php");
	

?>








<?php
// Print four blank new lines for clarity when output to the Terminal.
echo ("\n\n\n\n");

?>