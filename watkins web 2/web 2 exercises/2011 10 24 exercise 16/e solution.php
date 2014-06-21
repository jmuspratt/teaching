<?php
print ("\n\n\n\n");

//------------------
// DEMO


// The Terminal allows us to receive inputs from the user when the file is run. Let's say we write a program where we ask for a first name and age from the user. Instead of typing "php e.php" to run the file, the user should type something like "php e.php Joe 19" 

// Our PHP script can extract the "Joe" and the "19" using the special "argv" variables below. We'll assign them simpler variable names for our convenience:
$first_name = $argv[1];
$user_age = $argv[2];

// Factoids
$this_year = 2011;
$year_mcenroe_borg = 1980;
$chuck_norris_age = 71;

// See, it works:
print "Ok, your name is $first_name and your age is $user_age.";
print ("\n\n");


// This is what *conditions* look like in PHP. Try testing the program by running it with different names and ages.

if ( $user_age > 15 ) { $can_drive="YES"; } // test for "greater than"
else { $can_drive = "NO";}

if ( $user_age >= 21 ) { $can_drink="YES"; } // test for "greater than or equal to"
else { $can_drink = "NO";}

if ( $user_age ==  $chuck_norris_age ) { $by_the_way ="OMG. Are you Chuck Norris?"; } // test for "equals". NOTE THE DOUBLE EQUALS SIGN. It means *comparison* not "assignment".
else { $by_the_way = "Unfortunately, you are probably not Chuck Norris.";}

print "$first_name, our legal system has determined the following:
	Allowed to drive? *$can_drive*
	Allowed to drink? *$can_drink* 
	($by_the_way)";

print ("\n\n");

//------------------
// EXERCISE

// Write a program that uses the $first_name and $user_age inputs above. Tell the user how much younger or older he/she is than Chuck Norris, and then *whether* they were born before, after, or the same year as the famous McEnroe/Borg match.

$age_difference = abs( $user_age - $chuck_norris_age ); 
if ( ($user_age - $chuck_norris_age) > 0 ) {$age_direction = "older";}
	else {$age_direction = "younger";}
	
if ($age_difference == 0 ) {print "You are the same age as Chuck Norris!"; }
else {	print "You are $age_difference years $age_direction than Chuck Norris"; }
print ("\n\n");

$year_user_birth = $this_year - $user_age;

if ( $year_mcenroe_borg > $year_user_birth )  { $tennis_direction = "before"; }
else {$tennis_direction = "after";}

 if ( $year_mcenroe_borg == $year_user_birth ) {print "You were born the same year as the McEnroe/Borg match.";} 
else {print "You were born $tennis_direction the McEnroe/Borg Match.";}



?>









<?php
// Print four blank new lines for clarity when output to the Terminal.
print ("\n\n\n\n");

?>