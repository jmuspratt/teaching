<?php
print ("\n\n\n\n");


//------------------
// DEMO


// Very often in PHP, we want to manipulate information before we output anything to the Terminal/Web browser. Variables in PHP begin with the $ sign and are case-sensitive. They CANNOT begin with an number, contain spaces or basically any punctuatin (- + ! @ ) except the underscore character (_). You should therefore use underscores ($my_variable_name) for mult-word variable names OR the camelCase format of capitalization. Notice that camelCase always starts with lowercase and only switches to inital caps for multiple words: ($user, $userPriveliges, $userName, $myVariableName). Choose one format and be consistent! I'll be using underscores in class.

// You assign a variable a value with the equals (=) sign, which here is called the "assignment operator". This action both creates the variable in PHP and gives it (temporary) contents. Here will set the variable "my_town" to contain a text string. NOTE: this is not really like a mathematical equation, where the expression is either true or false. It's an *assignment*: you are telling PHP to take the thing on the left and give it the value of the thing on the right.

$my_home_town = "Nashville";

// Now let's print stuff and add in our variable. Notice the difference in output when we use double vs single quotes!
print "Here is some text in double quotes. My town is $my_home_town\n";
print 'Here is some text in single quotes. My town is $my_home_town';
print ("\n\n");

// You can use the assignment operator along with variables 
$my_favorite_town = $my_home_town;
print "My home town is $my_home_town and my favorite town is $my_favorite_town.";
print ("\n\n");

// You can also override previously stored values -- the contents of the variable changes is processed sequentially in the code, so from this point forward the new  contents of the variable will be reflected on output:
$my_favorite_town = "Dubuque";
print "Now my home town is still $my_home_town, but my favorite town is $my_favorite_town."; 
print ("\n\n");

// By the way, there is nothing stopping you from *updating* the contents of a variable based on its existing contents. In other words, you can put it on both sides of the equals sign. Remember, the equals means "shall now be assigned the value..."
$my_favorite_town = "$my_favorite_town, City of Darkness";
print "Welcome to $my_favorite_town."; 
print ("\n\n");

//------------------
// EXERCISE

// Create a variable for your favorite color and assign it a value (a text string containing a word or phrase)
$favorite_color = "red";

// Create a new variable for your most *hated* color and assign it a value.
$hated_color = "green";

// Print an English sentence that includes your two variables and makes sense when output to the terminal.
print "I love $favorite_color and I hate $hated_color.\n";

// Find a way to swap the contents of the variables without typing the name of either color again. Sequence matters!
$temp = $favorite_color; // use a temporary variable to stor the value of the $favorite_color 
$favorite_color = $hated_color; // assign favorite color the value of $hated_color
$hated_color = $temp; // $favorite color has now been changed, but we can still get its previous value with $temp.

// Copy and paste your print statement from above to show that the variables have been swapped:
print "I love $favorite_color and I hate $hated_color.";





?>





<?php
// Print four blank new lines for clarity when output to the Terminal.
print ("\n\n\n\n");

?>