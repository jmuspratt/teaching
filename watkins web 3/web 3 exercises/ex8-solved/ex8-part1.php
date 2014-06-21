<?php
// capture the user input (whatever they put after the filename in Terminal)
$user_throw = $argv[1];
// store possiblities in an array
$throws[0] = "Rock";
$throws[1] = "Paper";
$throws[2] = "Scissors";
$random_number = rand(0,2);
$comp_throw = $throws[$random_number];


if ($user_throw == "Rock") {
	if ($comp_throw == "Rock") 		{$winner = "Tie";}
	if ($comp_throw == "Paper") 	{$winner = "Computer";}
	if ($comp_throw == "Scissors") 	{$winner = "User";}
			}
			
if ($user_throw == "Paper") {
	if ($comp_throw == "Rock") 		{$winner = "User";}
	if ($comp_throw == "Paper") 	{$winner = "Tie";}
	if ($comp_throw == "Scissors") 	{$winner = "Computer";}
			}

if ($user_throw == "Scissors") {
	if ($comp_throw == "Rock") 		{$winner = "Computer";}
	if ($comp_throw == "Paper") 	{$winner = "User";}
	if ($comp_throw == "Scissors") 	{$winner = "Tie";}
			}
	
	
			// ECHO STUFF
			echo "\n\n\n\n";
			echo "The user threw $user_throw and the Computer threw $comp_throw";
			echo "\n\n\n\n";
			
		if ($winner !== "Tie")	{echo ("The winner is $winner");}
			else {echo "It was a tie.";}
			
			echo "\n\n\n\n";
			
			
?>