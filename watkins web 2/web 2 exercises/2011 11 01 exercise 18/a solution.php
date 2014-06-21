<?php

print ("\n\n------------------------------------------------------------\n
------------------------- Part A----------------------------\n
------------------------------------------------------------\n");
//------------------
// DEMO

// Arrays!

// So far the variables we have been working with only let us store a string of text or a number. These "regular" variables are called SCALAR variables. An ARRAY is different:it can hold more than just a simple string or number. Arrays are composed of 1 or more ELEMENTS, where each element has a KEY and a VALUE. 

// Here's how I think of it. An array ($todays_meals) is a miniature database. Inside that database, let's say there are three records or ELEMENTS. Each record has a field name (the key) and the contents of that field are stored as a value:
//   Database = Today's Meals 
//   -----------------------
//   | KEY       | VALUE    |
//   | --------- | -------- |
//   | breakfast | cereal   |
//   | lunch     | sandwich |
//   | dinner    | pizza    |

// The above chart might be stored in PHP as an array called $todays_meals, using the following syntax: 
$todays_meals['breakfast'] = "some beige cereal";
$todays_meals['lunch'] = "a delightful sandwich";
$todays_meals['dinner'] = "a large pizza";

// We could also have created this array in a single statement using the array function and the arrow ( => ) syntax:
$todays_meals = array ("breakfast" => "some beige cereal", "lunch" => "a delightful sandwich", "dinner" => "a large pizza"); 


// If you want to access a particular element, you call it by its key and the bracket syntax used above. At that point it's just like a regular variable in the way it behaves.

// The big catch here is that if you're in the middle of a quoted print string, you have to drop the quotes around the array's key (even single quotes won't work). In other words, you use $todays_meals[breakfast], not $todays_meals['breakfast']
print ("For breakfast I had $todays_meals[breakfast].");
print ("\n");

// Or we can do it another way by assigning that particular "breakfast" element, with quotes, to a temporary regular variable (aka a "scalar" variable), and then insert that temporary variable into the print statement like normal: 
$breakfast = $todays_meals['breakfast'];
print ("For breakfast I had $breakfast.");
print ("\n\n---------------\n");


// IMPORTANT: Because an array has a more complex structure than a scalar variable, you can't just print the entire thing with the print or echo function. Notice what happens:
print ("Let's try to use the PRINT function to see the contents of an array:\n");
print ($todays_meals); 
print ("\n\n---------------\n");

// However, if you're debugging and just want to see the entire contents of an array, you can use the print_r function:
print ("This should work better. Let's use the PRINT_R function to see the contents of an array:\n");
print_r ($todays_meals); 
print ("\n\n---------------\n");

// The count function is very useful for quickly getting the number of elements in an array
$meal_quantity = count($todays_meals);
print ("I had $meal_quantity meals today");
print ("\n\n---------------\n");


// Arrays are powerful because they pack multiple pieces of information into a single variable. You can, for instance, use a variable to access a particular key within an array:

// Suppose we're given two scalar variables that tell us what the user's favorite and hated meals are:
$favorite_meal = "lunch";
$hated_meal = "breakfast";

// Since the contents of the two variables is a text string that already matches some of the keys in $todays_meals, we can access the element of arrays by subsitituing the keys for with these variables:
$favorite_meal_contents = $todays_meals[$favorite_meal];
$hated_meal_contents = $todays_meals[$hated_meal];
echo ("My favorite meal is $favorite_meal, and today I had $favorite_meal_contents. But my most hated meal is $hated_meal, and I had $hated_meal_contents.");
print ("\n\n---------------\n");


// The above arrays, which use *words* as their keys, are often called "associative" arrays. The other kind (called "indexed" or "numeric" arrays), use numbers, starting with 0 and going up as far as they need to. It's common to use numeric arrays when you don't really need a descriptive word to keep track of the key. 

// To repeat, the first key in a numeric array is always 0, not 1! 
// An array with 10 elements has indexes from 0 to 9. 

//   Database = Class Names
//   -----------------------
//   |KEY| VALUE   |
//   |---| ------- |
//   | 0 | Aaron   |
//   | 1 | Atrian  |
//   | 2 | Eric    |
//   | 3 | Jill    |
//   | 4 | Katelyn |
//   | 5 | Kelsey  |
//   | 6 | Lindsey |
//   | 7 | Mark    |
//   | 8 | Richard |
//   | 9 | Xavier  |

// Lets create this array just like we created the associate one before, but this time with numbers for keys (as with scalar variables, we don't want quotes around numbers):

$class_names[0] = "Aaron";
$class_names[1] = "Atrian";
$class_names[2] = "Eric";
$class_names[3] = "Jill";
$class_names[4] = "Katelyn";
$class_names[5] = "Kelsey";
$class_names[6] = "Lindsey";
$class_names[7] = "Mark";
$class_names[8] = "Richard";
$class_names[9] = "Xavier";

// Again, the array function would have done the same thing:
$class_names =  array (0 => "Aaron", 1 => "Atrian",  2=> "Eric", 3 => "Jill", 4 => "Katelyn", 5 => "Kelsey", 6 =>"Lindsey", 7 => "Mark", 8 => "Richard", 9 => "Xavier");

// The cool thing with numeric arrays is that we can also let PHP add new elements while automatically assigning the next numeric key. Just use empty brackets:
$class_names[] = "James"; // now we have an 11th element in our array, accessible at $class_names[10]. The first 10 elements weren't disturbed. 

// Output the array with print_r
print_r ($class_names);



//------------------
// Exercise


// Continue working with the $todays_meals array created above.
// First add a new element whose array is "snack" and give it some value. 
$todays_meals['snack'] = "some halloween candy";

// Next, update the contents of the "dinner" element to some food that isn't pizza.
$todays_meals['dinner'] = "steak";
 
// Here's some code that gives you the current time, roughly, using the date() function and some conditionals.
date_default_timezone_set ("America/Chicago" );
$hour = date('G');
if ( $hour >= 5 )                 {$vague_time = "morning";}
if ( $hour >= 12 &&  $hour < 14 ) {$vague_time = "midday";}
if ( $hour >= 14 &&  $hour < 17 ) {$vague_time = "afternoon";}
if ( $hour >= 17 &&  $hour < 21 ) {$vague_time = "evening";}
if ( $hour >= 22 &&  $hour < 5 )  {$vague_time = "night";}
print ("\n\n---------------\n");


// Now, instead of using conditionals, create an array called $meal_assignments. Use multiple PHP statements where the array's keys are the values of the vague times and where its values are the keys of $todays_meals. In other words, this array should associate a time of day (afternoon) with a meal (snack).

$meal_assignments["morning"] = "breakfast";
$meal_assignments["midday"] = "lunch";
$meal_assignments["afternoon"] = "snack";
$meal_assignments["evening"] = "dinner";
$meal_assignments["night"] = "no meal";

// Now Create a  variable called $meal_now that (dynamically) is assigned the correct meal, based on vague_time.  
$meal_now = $meal_assignments[$vague_time];


// Create a variable called $meal_now_content that (dynamically) is assigned the contents of today's meal, based on the $meal_now and the $todays_meals array 
$meal_now_content = $todays_meals[$meal_now];

// If you've done everything correctly, this statement should work (and change throughout the day):
echo ("The hour is $hour, so it's $vague_time. You should be eating $meal_now, and today that means you will be having $meal_now_content.");



// Continue working with the $class_names array

// A tall, ambitious man from Utah has joined our class. Add "Mitt" to the $class_names array, using the number 2 as the key. In order to avoid kicking Eric out, *first* reassign him to a different key.
$class_names[11] = $class_names[2];
$class_names[2] = "Mitt";

// Now print the whole array to confirm that Mitt has been added to the class in the right place
print_r ($class_names);

// The statement below uses the "rand" function to store a random integer in $random. It will always be between 0 and 11 and it will change every time you run this file. Use $random to print out a random class name.
print ("\n\n---------------\n");
$random = rand(0,11);

print ($class_names[$random]);

// Duplicate your code above and modify it so that this time, the text "You do not belong here." appears if Mitt was selected by the random number. Your conditional should test for Mitt's name, not for his array key. Run your file as many times as you need to confirm it's working.
print ("\n\n---------------\n");

print ($class_names[$random]);
if (($class_names[$random]) == "Mitt") {print (", you do not belong here.");}


?>


<?php
// Print four blank new lines for clarity when output to the Terminal.
echo ("\n\n\n\n");

?>