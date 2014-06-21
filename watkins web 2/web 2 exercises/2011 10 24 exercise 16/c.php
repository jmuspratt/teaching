<?php
print ("\n\n\n\n");


//------------------
// DEMO

// Let's set some more variables.
 
// Remember, text "strings" require quotation marks around them when being assigned.
$my_town = "Nashville";
$my_state = "TN";
$my_street_name = "Rosa L Parks Boulevard";

// Numbers are different. Numbers don't need quotes around them:
$my_zip = 37228;
$my_street_number = 2298;

// But that's only true of pure numbers. If your data includes characters besides numerical digits, you need to store it as a string.
$my_phone = "(615) 383-4848";


// You can shove the contents of multiple text strings OR variables together with the "concatenation" operator, which is a period. Notice the spaces around the period (not actually necessary, they just improve code legibility).

print "This is a silly example," . " but once this is output, " . "you won't see any extra spaces" . "in this sentence.";
print ("\n\n");

// Here's a more realistic example, where we create a new variable by combining two existing ones
$my_street = $my_street_number . $my_street_name;
print "My street (without a space) is $my_street";
print ("\n\n");

// But that doesn't put a space between the variables, so lets concatenate the variables together with an empty space character between them:
$my_street = $my_street_number . " " . $my_street_name;
print "My street (with a space) is $my_street";
print "\n\n";

//------------------
// EXERCISE


print "My address is:\n";
// Output Watkins's address using the variables that were above, the print function, and the newline character to format it correctly:



print "Once again, my address is:\n";
// Output Watkins's address again, but this time do so by creating a single variable first. Right *before* the print statement below, create a variable called $my_address and assign it the contents of the above variables, concatenated to be formatted correctly.

print "$my_address"; // this won't print anything until you give $my_address some contents (above this line)
?>





<?php

// Print four blank new lines for clarity when output to the Terminal.
print ("\n\n\n\n");

?>