<?php
print ("\n\n\n\n");


//------------------
// DEMO


// LOOPS!

// Loops allow us to repeat an action with PHP. Usually the action involves printing something, manipulating a variable, or some combination of the two.

// This is a "while' loop. PHP executes the contents of the loop (whatever is between the curly braces), then goes back and does it again. It only stops when the contents of the condition (whatever is between the parentheses) stops being true.

$counter = 1;
while ($counter <= 10) {
	echo ("The counter is now at $counter\n"); // output the value of $counter
	$counter = $counter + 1; 				   // add 1 to whatever value $counter is
	}
	
echo ("\n\n");
	
// Here's another that creates a new variable inside the loop. Notice how its value also gets updated each time the loop gets run:
$counter = 1;
while ($counter <= 10) {
	$counter_squared = $counter * $counter;
	echo ("$counter squared is $counter_squared\n"); 	
	$counter ++; // this is the increment operator. it's the same as $counter = $counter + 1;
	}

echo ("\n\n");

// Creating the counter outside the loop and then incrementing it at the end (but inside) the loop is kind of annoying. So most programmers use "for" loops instead of "while" loops. The syntax requires that you put three things in the parentheses, separated by semicolons: The counter initialization, the conditional statement, and the increment. NOTE: there is no semicolon after the increment parameter (last one):

for ($counter = 1; $counter <= 10; $counter ++) {
	echo ("This loop's counter is at $counter\n");
	}

echo ("\n\n");

// Loops get very powerful when combined with conditionals
for ($counter = 1; $counter <= 40; $counter ++) {
	echo ("This loop's counter is at $counter, which is an");
	if ($counter % 2) { echo (" ODD");} else {echo (" EVEN");} // the % operator returns a remainder when divided by the subsequent number. So when combined with the number 2, it's a great way of testing whether $counter is odd or even.
	echo (" number");
	echo ("\n");
	}

echo ("\n\n");

// You can even nest loops. 
for ($counter = 1; $counter <= 15; $counter ++) {
	echo ("Counter is $counter. "); 
	for ($inner_counter = 1; $inner_counter <= $counter; $inner_counter ++) { 		// within each value of counter (e.g. 4), output another 
		echo ("[ $inner_counter ]"); 												// run a loop from 1 to that number (again, 4), outputting hte inner number in brackets
		}
echo ("\n");

	}

echo ("\n\n");


//------------------
// EXERCISE -- Left Brained

// Let's say I put $5 in a bank account, and it earns 2% interest, compounded yearly. After 1 year, I'll have $5 * 1.02, or $5.10. After the second year, the interested is calculated with the $5.10 as the principal, so my total will be $5.10 * 1.02, or $5.202. Write a program that shows how much money I have each year, for year 1 through 50. Round off your *printed output* to the 2nd decimal place, but make sure to keep an unrounded variable in your loop so you don't throw off the calculation.

// Here's some starting code:
$interest_multiplier = 1.02;
$starter = 5;
$total = $starter;

for ($year = 1; $year <= 50; $year ++) {
	// your code here
	}

echo ("\n\n");


//------------------
// EXERCISE -- Right Brained

// Have your hypothetical user run this script and input two numbers on input (e.g. "php b.php 25 8"). sing loops and these inputs, create a typographical output in Terminal that changes in interesting ways when different numbers are input. Show your best results in class.

$number1 = $argv[1];
$number2 = $argv[2];



?>








<?php
echo ("\n\n\n\n");
?>