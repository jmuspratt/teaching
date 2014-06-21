<?php
print ("\n\n\n\n");

//------------------
// DEMO


// Math time.
// You can do pretty much any mathematical operation in PHP. Use parentheses to be sure a certain operation is performed before another. Add spaces around the methematical operators (+ - * / =) to make things easier to read. 
$number1 = 4;
$number2 = 8;
$average = ( ($number1 + $number2) / 2);

print "The average of $number1 and $number2 is $average.";
print "\n"; 

// "abs" is a PHP function that finds the *absolute value* of the number given to it. In other words, it evaluates the expression inside the parentheses and then removes a negative sign if one exists from a number.
$difference = abs($number1 - $number2); 

print "The difference between $number1 and $number2 is $difference.";
print "\n\n"; 

// Sometimes we do the important operations right in the output:
$airfare_advertised = 250;
print "Sure, we advertise the ticket at $airfare_advertised dollars, but it will cost you " . (($airfare_advertised*1.08) + 50 + 200) . " dollars after taxes, fees, and our hatred of our customers."; 
print "\n\n"; 

// But for more complex operations, it's often more legible to break down the process. First we assign a few variables (in practice these would come from a user-submitted form, a database, or both):
$user_birth_year = 1960;
$childs_birth_year = 1992;
$this_year = 2011;

// and then as a second step we would create some more variables based on these.
$user_age = $this_year - $user_birth_year;
$childs_age = $this_year - $childs_birth_year;
$user_age_when_child_was_born = $childs_birth_year - $user_birth_year;
$year_when_child_will_be_users_age = $this_year + ($childs_birth_year - $user_birth_year);

// And finally we would write the output, which is hopefully a bit easier to comprehend and proofread as a result. This becomes especially important when you're trying to output HTML and don't want PHP operations confusing your syntax.
print "You were born in $user_birth_year, while your child was born in $childs_birth_year. So you were $user_age_when_child_was_born when you had him/her and you are $user_age years old now. Since your child is $childs_age now, he/she will be the age you are now in $year_when_child_will_be_users_age.";
print "\n\n"; 

//------------------
// EXERCISE

// Write a program that takes a price and adds sales tax. You may not edit the first or last line of the code. Notice that tax is being "input" to the program as a percentage, but you'll probably need something else to calculate a total price. So create as many variables and write as many lines of PHP as you want. Just make sure you assign a value at the end to $price_after_tax so that the final line of code outputs correctly. 

// first lines of your code (don't change these)
$price = 27.95; //expressed in dollars
$tax = 8; // expressed as a percent


// ↓ Your code goes here ↓


// ↑ Your code goes here ↑


// final lines of your code (don't change this):
print "The price is $price. Because sales tax is $tax percent, your total is $price_after_tax ";
print "\n\n"; 




// BONUS ROUND. PHP has a function called "round", which will round numbers off to however decimal places you want. Adapting the example below, add a line to your program above which rounds $price_after_tax to 2 decimal places.

print "Rounding numbers!\n";
$my_number = 10.53535;
$rounded_whole = round($my_number); 
$rounded_1     = round($my_number, 1); 
$rounded_2     = round($my_number, 2); 

print	"Let's round $my_number off.\n 
		Rounded off to a whole number: $rounded_whole
		Rounded off to 1 decimal place: $rounded_1
		Rounded off to 2 decimal places: $rounded_2";

?>

<?php
// Print four blank new lines for clarity when output to the Terminal.
print ("\n\n\n\n");

?>