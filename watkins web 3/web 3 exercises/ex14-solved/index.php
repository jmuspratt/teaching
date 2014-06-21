<!doctype html>
<head>
	<title>Exercise 14</title>
	<link rel="stylesheet" type="text/css" media="all" href="style.css" />

	
</head>
<body>
<nav><p><a class="current"  href="index.php">Part 1</a> | <a href="index2.php">Part 2</a></p></nav>
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
		
		$table_name =  'romney';
						
		?>
		
		<div class="candidate romney">
			<h2>2012 Contributions to <strong>Romney</strong></h2>
	
	<?php
	// ----- Retrieving data from the database
		
		// send a SQL query to the database selecting all columns (*) from the tables and sorting them.
		// THIS IS THE IMPORTANT PART (THE SQL QUERY ITSELF)
		$results = mysql_query("SELECT * FROM $table_name WHERE contb_receipt_amt > 0 ORDER BY contb_receipt_amt ASC");
		
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
			<span class="contribution <?php echo $class; ?>"><?php echo $contributor_name; ?> ($<?php echo $contribution_amount; ?>)</span>
			<?php
		} // end FOR loop
	
	?>
	

	</div> <!-- /romney -->
	

	</section>
</div> <!-- /main -->
</body>
