<?php
print ("\n\n\n\n");


//------------------
// DEMO

// Let's look at conditions and the comparison operator (==) more closely. 
// Suppose we create a variable and store the string "Watkins" in it:

$my_school= "Watkins";

// This value *compares* the value of $my_school to the string "Watkins" and determines what to do based on whether they match. I'll write it with line breaks at the curly braces, which is common in PHP:

if ($my_school == "Watkins") {
	echo "Your school is Watkins.";
	}
	else {
		echo "Your school is not Watkins.";
		}
echo ("\n\n");

// The reason this works is that ($my_school == "Watkins") is a "boolean expression" that PHP evaluates as either TRUE or FALSE (there are no other options). We can prove it by using the var_dump function:

echo ("Let's evaluate whether \$my_school is equal to \"Watkins\": ");
var_dump($my_school == "Watkins"); // outputs the result of the comparison between "Watkins" and "Watkins"
echo ("Let's evaluate whether \$my_school is equal to \"Duke\": ");
var_dump($my_school == "Duke"); // outputs the result of the comparison between "Watkins" and "Duke"
echo ("\n\n");

// This is good to know when looking at the other way of using the if .. else conditions, which is simply to check if a value has been set for a variable. Instead of writing "if ($variable == "whatever")..." we just write "if ($variable)...": 

if ($my_state) { // evaluates to FALSE because we haven't set $my_state to contain anything yet
	echo ("My state is $my_state"); 
	}
	else {
		echo ("My state has not been set.");
		}
		
echo ("\n\n");

$my_state = "Tennessee"; // Now I've set $my_state to contain a string.

// ..and we'll run the exact same conditional statements.

if ($my_state) { // so this will now evaluate to TRUE (or 1, in PHP-speak)
	echo ("My state is $my_state."); 
	}
	else {
		echo ("My state has not been set");
		}
echo ("\n\n");

// So in other words the stuff inside an "if" statement is always going to evaluate to TRUE or FALSE, no matter how simple or complicated the particular statement.

// Here's how to do a variety of related expressions:

// The && operator means "and". We'll use it to check whether the user's age is between 18 and 25. Note the use of nested parentheses. Also, the <= operator means "less than or equal to", while >= means "greater than or equal to"
 
$user_age = 22;
if ( ($user_age >= 18) && ($user_age <= 25 ) ) { //  the whole condition is TRUE only if BOTH conditions are satisfied."
	echo ("You are in our target demographic.");
	}
echo ("\n\n");

// The "inclusive" OR operator is ||
$my_city = "Nashville";
$my_computer = "Mac";
$my_band = "Coldplay";

if ($my_city == "Nashville" || $my_computer == "Mac" || $my_band == "The National") {// the whole condition is TRUE if either one OR multiple conditions are satisfied
	echo ("You have great taste in at least one thing.");
	} 
echo ("\n\n");


// The "exclusive" OR operator is XOR
$my_breakfast = "Wendys";
$my_lunch = "McDonalds";
$my_dinner = "Burger King";

if ($my_breakfast == "McDonalds" XOR $my_lunch == "McDonalds" XOR $my_dinner == "McDonalds") { // the whole condition is TRUE if EXACTLY ONE condition is satisfied.
	echo ("You went to McDonald's once today.");
	} 
echo ("\n\n");


// The generic symbol for NOT is !, and !== means NOT EQUAL TO  
$my_car = "honda";
$my_age = "18";

if ($my_car !== "toyota") {  // you can read this in your head as either "IF $my_eyes IS NOT red...." or as "UNLESS $my_eyes IS red..."
	echo "Your car is not a Toyota.";
	}
echo ("\n\n");

// You can put a ! in front of a whole expression.
if (!($my_age >= 21)) {  // though in this case, it would be simpler to write "if ($my_age < 21)" 
	echo "We don't serve you kids here.";
	}
echo ("\n\n");


//------------------
// EXERCISE

// Pretend the user has input his/her birth year.
$birth_year = "1982";

// Write a conditional statement that checks to see if their birth year was between 1980 and 1990, and if so, print a statement that informs them of this. Now add on to this outcome another (nested) condition: If they were also born between 1981 and 1983, print another statement saying so. In both cases, don't bother with an else statement -- nothing will be printed if the conditions aren't satisfied. Test your program by changing the $birth_year assignment above to different years.

if ( ($birth_year >= 1980) && ($birth_year <= 1990) ) {							// check if within outer range.
	echo ("You were born between 1980 and 1990");								// start the sentence.
	if ( ($birth_year >= 1981) && ($birth_year <= 1985) ) {						// check if within outer range.
		echo (" and, more specifically, you were born between 1981 and 1985");	// (optionally) continue the sentence.
	}																			// end the inner range check
	echo ("."); 																// still inside the original conditional, finish with a period at the end of the sentence
	}																			// end the outer range check
echo ("\n\n");

// Write a program that takes the following inputs and calculates a $total based on the variables below. Feel free to create as many new variables you want along the way. 

$price = 85;				// price in dollars
$birth_year = 1970;			// customer's birth year
$this_year = 2011;    		// might as well make this a variable too
$senior_discount = 15;		// discount as a percentage
$senior_definition = 65;	// gotta be 65 OR OLDER to get it
$youth_discount = 10;		// discount as a percentage
$youth_definition = 18;   	// gotta be 18 years old OR YOUNGER to get it 
$sales_tax = 8;				// tax as a percentage

// calculate customer's age
$age = $this_year - $birth_year;
// there will only be one discount, if any, so create a single variable, defaulting to 0 to represent it.
$discount = 0;
// if a discount applies, override the 0 value
if ($age >= $senior_definition ) {$discount = $senior_discount;}
if ($age <= $youth_definition ) {$discount = $youth_discount;}

// convert discount from percentage to multiplier.
// e.g 15% discount will create a multiplier of .85
$discount_multiplier = (100 - $discount) / 100;

// convert sales tax from percentage to multiplier
// e.g. 8% sales tax will create a multiplier of 1.08
$sales_tax_multipler = ($sales_tax/100) + 1;

// multiply everything
$total = $price * $discount_multiplier * $sales_tax_multipler;


// Add code to this statement to let the customer know whether he/she received a discount and how much it was.
echo ("Your total is $total dollars. ");
if ($discount > 0) {echo ("You received a discount of $discount percent.");}

?>








<?php
// Print four blank new lines for clarity when output to the Terminal.
echo ("\n\n\n\n");

?>