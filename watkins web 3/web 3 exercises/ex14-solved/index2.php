<!doctype html>
<head>
	<title>Exercise 14</title>
	<link rel="stylesheet" type="text/css" media="all" href="style.css" />

	
</head>
<body>
<nav><p><a href="index.php">Part 1</a> | <a class="current" href="index2.php">Part 2</a></p></nav>
	
	<div id="main">
		<section>
	
<h1>Retrieving data from a MYSQL database</h1>
<h2>Customizing the search through user input.</h2>

	<form id="add" action="#" method="get">
		<label for="term">Enter a TN town/city to filter the information below</label><br />
		<input id="term" name="term" type="text" />
  <br /><input type="radio" name="sort" id="sort-amount" value="amount" checked><label for="sort-amount">Sort by Contribution Amount</label>
		<input type="radio" name="sort" id="sort-occupation" value="occupation"><label for="sort-occupation">Sort by Contributor&#8217;s Occupation</label>
		
		<input type="submit" value="Show Me the Money" />
	</form>	
	


<?php

// -------------------------------
// PART 1
// Upload the exercise and run it. Read through the code below and make sure you understand each step.
	
	// ----- Database connection
		include('config.php');
		
	// ----- Get form input
		
		$search = $_GET['term'];
		$sort =  $_GET['sort'];
		
		if ($search) {
			echo ("<p>Showing only contributions from <strong>$search</strong>, sorted by <strong>$sort</strong></p>"); 
			
			}

	// ----- Define function
		
	// this function takes just one paramater, the name of the table we want to access (romney or obama)
	function show_contributions($table_name) {
				
		// ----- Retrieving data from the database
		
		// send a SQL query to the database selecting all columns (*) from the tables and sorting them.
		$results = mysql_query("SELECT * FROM $table_name WHERE contb_receipt_amt > 0 ORDER BY contb_receipt_amt ASC");
		
		// ----- Use a SQL search if the user submitted a form with a city name
		// use "global" operator to retrieve a variable that was set outside the function
		global $search;
		global $sort;
		// If a search term was submitted...
		if ($search) {
			// capitalize the search term
			$search = strtoupper($search);
			if ($sort == "amount") 	{$this_sort = "contb_receipt_amt";}
			if ($sort == "occupation") 	{$this_sort = "contbr_occupation";}
			// overwrite $results with a similar query but with the addition of WHERE contbr_city = '$search'
			$results = mysql_query("SELECT * FROM $table_name WHERE contbr_city = '$search' AND contb_receipt_amt > 0 ORDER BY $this_sort ASC");
			} // end if condition
		
		// count the found rows using the mysql_num_rows() function
		$results_count = mysql_num_rows($results);
		
		// ----- Loop through retrieved data
		for ($i = 0; $i < $results_count; $i++) {
			
			// for this msyql row (aka record), create an associative array called $contribution
			// (the mysql_fetch_assoc() function keeps track of which row we're on (it moves its internal pointer ahead each time the loop runs, so there's no need to use $i as the counter in an array).
	 		$contribution = mysql_fetch_assoc($results);
			// store the array values we want in variables 
			$id							= $contribution[id];
			$contributor_name 			= $contribution[contbr_nm];
			$contributor_city			= $contribution[contbr_city];
			$contributor_employer 		= $contribution[contbr_employer];
			$contributor_zip 			= $contribution[contbr_zip];
			$contributor_occupation		= $contribution[contbr_occupation];
			$contribution_date			= $contribution[contb_receipt_dt];
			$contribution_amount		= $contribution[contb_receipt_amt];
		
			if ($contribution_amount > 50  ){ $class = "c50";}
			if ($contribution_amount > 100 ){ $class = "c100";}
			if ($contribution_amount > 500 ){ $class = "c500";}
			if ($contribution_amount > 1000 ){ $class = "c1000";}
			if ($contribution_amount > 1500 ){ $class = "c1500";}
			if ($contribution_amount > 2500 ){ $class = "c2500";}
			?>
			<span class="contribution <?php echo $class; ?>">
				
				<?php 	if ($sort == "occupation") 	{echo $contributor_occupation;}
						else  						{echo $contributor_name;}
				?>
				($<?php echo $contribution_amount; ?>)</span>
			<?php
		} // end FOR loop
	} // end function definition
	
	?>
	

	<div class="candidate romney">
		<h2>2012 Contributions to <strong>Romney</strong></h2>
		<?php show_contributions("romney"); ?>
	</div> <!-- /romney -->
	
	
	<div class="candidate obama">
		<h2>2012 Contributions to <strong>Obama</strong></h2>
		<?php show_contributions("obama"); ?>
	</div> <!-- /obama -->
	
		
	


	</section>
</div> <!-- /main -->
</body>
