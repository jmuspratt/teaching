<!doctype html>
<head>
	<title>Exercise 14</title>
	<link rel="stylesheet" type="text/css" media="all" href="style.css" />

	
</head>
<body>
<nav><p><a class="current" href="index.php">Part 1</a> | <a href="index2.php">Part 2</a></p></nav>

	<div id="main">
		<section>
	
	

<h1>Retrieving data from a MYSQL database</h1>
<h2>Demo: database connection, SQL statement, Loop</h2>

<?php

// -------------------------------
// PART 1
// Upload the exercise and run it. Read through the code below and make sure you understand each step.
	
	// ----- Database connection
		include('config.php');
		
						
		?>
		
		<div class="candidate romney">
			<h2>2012 Contributions to <strong>Romney</strong></h2>
	
	<?php
	// ----- Retrieve data from the database
		
		// THIS IS THE IMPORTANT PART (THE SQL QUERY ITSELF)
		// send a SQL query to the database that selecs all columns (*) from the 'romney' table and sorts them. We use WHERE contb_receipt_amt > 0 in order to exclude the refunds (negative contributions) in the database.
		
		$table_name =  'romney';
		$results = mysql_query("SELECT * FROM $table_name WHERE contb_receipt_amt > 0 ORDER BY contbr_zip ASC");
		
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

			?>
			<p class="contribution"><?php echo $contributor_name; ?>, a <?php echo $contributor_occupation; ?> from <?php echo $contributor_city; ?>, gave $<?php echo $contribution_amount; ?></p>
			<?php
		} // end FOR loop
	
	?>
	

	</div> <!-- /romney -->
	

	</section>
</div> <!-- /main -->
</body>
