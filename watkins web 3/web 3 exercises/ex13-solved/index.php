<!doctype html>
<head>
	<title>Exercise 13</title>
	<link rel="stylesheet" type="text/css" media="all" href="style.css" />

	
</head>
<body>
	<div id="main">
		<section>
	
	<!-- THIS IS THE INPUT FORM -->
	
	
	<form id="add" action="#" method="get">
		
		<label for="term">Type a keyword here</label>
		<input id="term" name="term" type="input" type="text" />
		<input id="add-submit" name="add-submit" type="submit" value="Blam" />

	</form>	
	



<?php

// -------------------------------
// PART 1
// Upload the exercise and run it. Read through the code below and make sure you understand each step in the code. For now, ignore the "if" statement that runs from 67 through 93, since we're not dealing with forms at all yet. 

	// (a) Open zips.txt and add a few new zip codes. Upload the file and confirm that the script still works.
	// (b) What happens if you leave an extra line break between zip codes? What happens if you separate two zip codes on a line with a space between them?
	
// -------------------------------
// PART 2
	// (a) Add some conditionals to your code: add a "cool" class to the output paragraph if the temperatures is below 50 degrees and a "warm" class for temperatures above 80 degrees. If the city name is Nashville, add a class of "nashville" too. Then add statements to style.css that make use of these styles.
	// (b) Now in line 48. change "zips.txt" to "zips-wealthiest.txt". Confirm that the script still works (slowly) when loading 100 zip codes.
	
// -------------------------------
// PART 3
// In line 48, change "zips.txt" to "user-history.txt" Now uncomment the input form above (lines 15-21). 
	// (a) Try inputting a few new zip codes (via the web page) to confirm the script correctly reads and writes to the text file. 
	// (b) At the bottom of this file, uncomment the "destroy history" form. Now write a conditional that checks to see if *this* form was submitted -- if it was, PHP should clear the user history (i.e. overwrites user_history.txt with zero data). 

	// Specify a filename to work with
	$file_name = "user-history.txt";
	
	// If the Destroy button was submitted...
 	if ($_GET["destroy-submit"]) {
 		 // we use a handle with a file pointer set to write
 		 $handle = fopen($file_name, 'w') or die("The file could not be written to.");
			 
 		 // now append our zip-with-carriage-return to the file
 		 fwrite($handle, '');
			 
 		 // close the file
 		 fclose($handle);
	
 		}
	

	// Create a "handle" composed of the fopen function and an error message for a possible failure.
	// 'r' standards for read, 'w' for write (complete overwrite), and 'a' stands for append. 
	// We'll use 'r' for read:
	$handle = fopen($file_name, 'r') or die("The file could not be read.");

	// scoop the file contents (as a string) into a variable. The second paramater is the number of bytes to read -- we use filesize() function to automatically calculate the whole file size and read that.
	$file_contents = fread( $handle, filesize($file_name) );
	
	// close the file
	fclose($handle);
	
	// explode on the newline character ("\n") so that each zip code becomes an element in the array.
	$zips_array = explode("\n", $file_contents);
				 
	// Now check to see if the input form was submitted by the user
	if ($_GET["add-submit"]) {
		
		// store the submitted input (which had a name attribute of 'term') in a variable 
		$submitted_zip = $_GET["term"];
		 
		// if $submitted_zip contains something AND (&&) is numeric...
		if ( $submitted_zip && is_numeric($submitted_zip) ) {
					
			 // add the submitted zip to the array retrieved from the text file
			 $zips_array[] = $submitted_zip;
		 
			 // and while we're here, append this zip code to the text file.
			 // first, we'll add a carriage return (or new line) to the end of our string
			 $submitted_zip_cr = "\n" . $submitted_zip;
		 
			 // we use a handle with a file pointer set to "append" (a) to the existing file.
			 $handle = fopen($file_name, 'a') or die("The file could not be appended.");
			 
			 // now append our zip-with-carriage-return to the file
			 fwrite($handle, $submitted_zip_cr);
			 
			 // close the file
			 fclose($handle);
				 
			 } // end if statement
		 
		 else {
			 echo ("<p class=\"error\">Sorry, you must type a zip code in, and it may not contain any letters).<p>");
			 } // end else statement
		 
		 
	 } // end if ($_GET["form-submit"]) 




	 // if it worked and we have an array now...
	if ( $zips_array) {

			// loop through each element in the array
		foreach ($zips_array as $zip) {
			// Load the XML feed as straight data, into a giant string.
			$xmlContents = file_get_contents("http://xml.weather.yahoo.com/forecastrss?p=$zip");
			// This hack prepares for SimpleXML's inability to handle namespace syntax like "yweather:" and "geo:"
			$xmlContents = str_replace("yweather:", "", $xmlContents);
			$xmlContents = str_replace("geo:", "", $xmlContents);	
			// Use SimpleXML to create an object from this giant string.
			$xml = simplexml_load_string($xmlContents);
			// Get city name
			$city = $xml->channel->location["city"];
			// Get wind speed
			$wind_speed = $xml->channel->wind["speed"];
			// Get wind direction
			$wind_direction = $xml->channel->wind["direction"];
			// Get temperature
			$temp = $xml->channel->wind["chill"];
			
			
			// class handling
			$classes = "";
			if ( $temp <= 50 ) 			{$classes .= " cool";}
			if ( $temp >= 80 ) 			{$classes .= " warm";}
			if ( $city == "Nashville" ) {$classes .= " nashville";}
			?>
	
				<!-- We're still in the foreach loop! Even this HTML comment will be printed as many times as there are elements in the array! -->
				<p class="announce <?php echo $classes; ?>">
				Zipcode: <?php echo $zip;?>. 
				In <?php echo $city; ?>, 
				it&#8217;s <?php echo $temp; ?>&#176; fahrenheit. 
				The wind is blowing at <?php echo $wind_speed; ?> mph 
				with a direction of <?php echo $wind_direction; ?>&#176;.</p>
	
		<?php 
		
				} // end foreach loop
		} // end if zips_array
	
	// now do an else (if the array was empty)
	else { 
		
		echo ("<p>There is nothing in the zip codes array.");
	} // end else
	
	
		?>
		
	

		<form id="destroy" action="#" method="get">
			<input id="destroy-submit" name="destroy-submit" type="submit" value="Destroy History" />
		</form>	
		
		
		
	

	</section>
</div> <!-- /main -->
</body>