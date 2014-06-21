<?php



// Define a new function called playgame() which accepts
// two paramaters, $user_throw and $comp_throw. We'll worry about 
// what those two throws are later; for now all the function has to do
// is (a) figure out the winner and echo an announcement of who won, and
// (b) keep track of User Wins, Computer Wins, and Ties by incremementing each of those
// counters based on who won.  

function playgame($user_throw, $comp_throw) {
	
	// set these variables to GLOBAL so that they can be accessed outside the function
	global $comp_wins;
	global $user_wins;
	global $ties;

	if ($user_throw == "Rock") {
	if ($comp_throw == "Rock") 		{$winner = "Tie"; 		$ties = $ties + 1;}
	if ($comp_throw == "Paper") 	{$winner = "Computer"; 	$comp_wins= $comp_wins + 1;}
	if ($comp_throw == "Scissors") 	{$winner = "User"; 		$user_wins = $user_wins + 1;}
			}
			
if ($user_throw == "Paper") {
	if ($comp_throw == "Rock") 		{$winner = "User"; 		$user_wins = $user_wins + 1;}
	if ($comp_throw == "Paper") 	{$winner = "Tie"; 		$ties = $ties + 1;}
	if ($comp_throw == "Scissors") 	{$winner = "Computer"; 	$comp_wins= $comp_wins + 1;}
			}

if ($user_throw == "Scissors") {
	if ($comp_throw == "Rock") 		{$winner = "Computer"; 	$comp_wins= $comp_wins + 1;}
	if ($comp_throw == "Paper") 	{$winner = "User"; 		$user_wins = $user_wins + 1;}
	if ($comp_throw == "Scissors") 	{$winner = "Tie"; 		$ties = $ties + 1;}
			}
	
			// ECHO STUFF
			echo "\n";
			
			echo "The user threw $user_throw and the Computer threw $comp_throw";
			echo "\n";
			
		if ($winner !== "Tie")	{echo ("The winner is $winner");}
			else {echo "It was a tie.";}
			
			echo "\n";
			

			
			echo "\n\n";
			
	}



	// Run a loop that assigns new random "throws" for both User and Player 
	// every time the loop is run. Then -- still inside the loop -- play those
	// throws against each other be passing them into the playgame() function.
	for ($i = 1; $i <= 20; $i++) {	
		
			$throws[0] = "Rock";
			$throws[1] = "Paper";
			$throws[2] = "Scissors";
			
			

		$random_number1 = rand(0,2);
		$random_number2 = rand(0,2);

		$user_throw = $throws[$random_number1];
		$comp_throw = $throws[$random_number2];
				echo ("Game number $i");
				 playgame($user_throw, $comp_throw);
				 
			 }
			 			 
					echo ("Score: Computer has won $comp_wins times, User has won $user_wins times, and there have been $ties ties.")
						
			
?>