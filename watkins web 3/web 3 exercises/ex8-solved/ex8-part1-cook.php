<?php
// capture the user input (whatever they put after the filename in Terminal)

$user_throw = $argv[1];

// store possiblities in an array

$throws[0] = "Rock";
$throws[1] = "Paper";
$throws[2] = "Scissors";




echo $throws[$random_number];

$random_number = rand(0,2);
$computer_throw =  $throws[$random_number];

echo $throws[$random_number];

	echo "\n\n\n\n";
	echo "The user threw $user_throw";
	echo "\n\n\n\n";
	echo "And the Computer threw $computer_throw";
	echo "\n\n\n\n";


if ( $computer_throw == $user_throw )
{
	echo "It's a tie!";

}


elseif ( (($computer_throw == "Paper") && ($user_throw == "Rock")) ||  
(($computer_throw == "Scissors") && ($user_throw == "Paper")) || 
(($computer_throw == "Rock") && ($user_throw == "Scissors")) )
{

	echo "The Computer Wins.\n";
	echo "You Lose.";

}
else {

	echo "You WIN.\n";
	echo "and the computer is a loser";

}




for ($i = 1; $i <=10; $i++) {   
            echo ("the counter is at $i");
            }


?>




































