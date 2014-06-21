<?php
print ("\n\n------------------------------------------------------------\n
------------------------- Part B----------------------------\n
------------------------------------------------------------\n");

//------------------
// DEMO


// Looping through arrays!

// Let's make our class list, letting PHP assign the numeric keys as it goes.
print ("\n\n---------------\n");

$class_names[] = "Aaron";
$class_names[] = "Atrian";
$class_names[] = "Eric";
$class_names[] = "Jill";
$class_names[] = "Katelyn";
$class_names[] = "Kelsey";
$class_names[] = "Lindsey";
$class_names[] = "Mark";
$class_names[] = "Richard";
$class_names[] = "Xavier";


// Because they're numeric, we can use a "for" loop to output the keys and values:

for ($counter = 0; $counter <= 9; $counter++) {
	print ("The counter is at $counter, and our array at this key has a value of $class_names[$counter]");
	print ("\n");
	}

// Using concatenation and a loop, create a new array called $class_funny_names. It should match $class_names except that  class members with odd-numbered keys should have " the Great" added to their names, while those with even-numbered keys should have " the Barbarian" added to their names. While you're in the loop that makes this change, print each funny name. To test whether the counter is odd, use if ($counter % 2) {...}. The % sign is called the "modulus" and when you use it in conjunction with 2, it returns the remainder of $counter divided by 2. That turns out to be exactly the same as asking whether a number is odd or even: it will either return a 1 or 0, which in the "if" statement functions like a boolean.
print ("\n\n---------------\n");

for ($counter = 0; $counter <= 9; $counter++) {
	if ($counter % 2) {
		$class_funny_names[$counter] = "$class_names[$counter]" . " the Great";
		}
	else {$class_funny_names[$counter] = "$class_names[$counter]" . " the Barbarian";
		}
	print ($class_funny_names[$counter]);
	print ("\n");
	}




// Create an associative array called $fonts that stores the favorite font of each student. The KEYS should be the student names while the VALUES should be: Baskerville, Bodoni, Futura, Garamond, Gotham, Gill Sans, Helvetica, Mrs. Eaves, Rotis, and Thesis.
$fonts["Aaron"] = "Baskerville";
$fonts["Atrian"] = "Bodoni";
$fonts["Eric"] = "Futura";
$fonts["Jill"] = "Garamond";
$fonts["Katelyn"] = "Gotham";
$fonts["Kelsey"] = "Gill Sans";
$fonts["Lindsey"] = "Helvetica";
$fonts["Mark"] = "Mrs. Eaves";
$fonts["Richard"] = "Rotis";
$fonts["Xavier"] = "Thesis";

// Using this new $fonts array Use a loop to print 10 sentences that says something like "STUDENT NAME loves the font FONTNAME", using variables so that each time through the loop it prints who likes which font. Hint: temporary variables INSIDE the loop will prbably help you.
print ("\n\n---------------\n");

for ($counter = 0; $counter <= 9; $counter++) {
	$this_student = $class_names[$counter];
	$this_font = $fonts[$this_student];
	print ("$this_student likes $this_font");
	print ("\n");
	}

// Now write a new loop that reassigns the favorites so that everybody's favorite font shifts forward by 1 slot. Aaron should like Bodoni, Atrian should like Futura, all the way up until Xavier likes Baskerville. This loop should just change the assignments, not print anything
for ($counter = 0; $counter <= 9; $counter++) {
	$this_student = $class_names[$counter];
	$next_student = $class_names[$counter+1];
	$this_font = $fonts[$this_student];
	$next_font = $fonts[$next_student];
	
	if ($counter == 9) {$next_font = "Baskerville";} // kind of a cheat
	
	$fonts[$this_student] = $next_font; // reassign!
	}
 

// Now paste in your "font printing" loop from above to show the change has worked: 
print ("\n\n---------------\n");
for ($counter = 0; $counter <= 9; $counter++) {
	$this_student = $class_names[$counter];
	$this_font = $fonts[$this_student];
	print ("$this_student likes $this_font");
	print ("\n");
	}





echo ("\n\n\n\n");

?>