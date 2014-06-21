<!doctype html>
<head>
	<title>Exercise 10</title>
	<link rel="stylesheet" type="text/css" media="all" href="style.css" />
	
</head>
<body>
	
<?php 

// -------------------
// Part 1: Demo

	// Here's a poem
	$poem = "There's a certain slant of light,
		On winter afternoons,
		That oppresses, like the weight
		Of cathedral tunes.

		Heavenly hurt it gives us;
		We can find no scar,
		But internal difference
		Where the meanings are.

		None may teach it anything,
		'Tis the seal, despair, --
		An imperial affliction
		Sent us of the air.

		When it comes, the landscape listens,
		Shadows hold their breath;
		When it goes, 't is like the distance
		On the look of death.";

		// explode() is a function that chops a string into an array of pieces. The point at which it splits the string is based on a delimiter (also a string) tht you provide. So let's explode the poem on the word "it". PHP will find the word "it" wherever it appears and return the text between the "it"s as elements in an array:
		
		$poem_exploded = explode("it", $poem);
		
		// Now lets see what kind of an array this created. Note: we cna't use echo on an array, we haev to use print_r
			echo "<p>Here is the first element in our array: <em>$poem_exploded[0]</em></p>";
			echo "<p>Here is the second element in our array: <em>$poem_exploded[1]</em></p>";
			echo "<p>Here is the third element in our array: <em>$poem_exploded[2]</em></p>";
			echo "<p>Here is the fourth element in our array: <em>$poem_exploded[3]</em></p>";
			echo "<p>Here is the fifth element in our array: <em>$poem_exploded[3]</em></p>";
		
		// Sometimes you use explode on a string that only appears once in the content. If we explode on "tunes", we get an array with just two elements, the text before and the text after "tunes."
		$poem_exploded_tunes = explode("tunes", $poem);
		// grab the first element in the array
		$everything_after_tunes = $poem_exploded_tunes[0];
		echo "<p>Everything after the word <em>tunes</em>: <em>$everything_after_tunes</em></p>";



	// -------------------
	// Part 1: Exercise
	
	

	// Here is an include that pulls in text strings, stored in $song1 and $song2. #song1 and #song2 are similar but have some differences. 
		include ('songs.php');
	
	// Let's suppose you want to compare the second verse of each song to see if they're the same, and you don't care about the rest of the songs.
	
	
	// First, open songs.php and note the numbers that precede each verse. Let's use those.
	
	// do an explode on the string "2. " on both songs, and store the resulting arrays in separate variables
	
	// for both songs, store the contents of the text that *follows* "2. " by accessing and storing the appropriate element of the arrays. 
	
	// for both songs, do another explode on the string "3. ", and store the resulting arrays in separate variables.
	
	// for both songs, store the element of the arrays that comes *before* 3. each song should now contain only the second verse.
	
	// compare the contens of both song snippets using the comparison operator (==), and output a message that announces whether they're the same or not.
	
	
	
	
// -------------------
// Part 2

	// You can retrieve the HTML source of a web page using the curl() function. It requires a few steps and some web hosts will try to block it, so lets make a function that does everything for us nad does a better job of pretending to be a real person browsing the web:
		
	function get_url_contents($url){
	        $crl = curl_init();
	        $timeout = 5;
	        curl_setopt ($crl, CURLOPT_URL,$url);
	        curl_setopt ($crl, CURLOPT_RETURNTRANSFER, 1);
	        curl_setopt ($crl, CURLOPT_CONNECTTIMEOUT, $timeout);
	        $ret = curl_exec($crl);
	        curl_close($crl);
	        return $ret;
	}
	


	
	// uncomment the next line to use the function to store the Watkins Web page source HTML in the $page_html variabel:
	
	
	// $page_html = get_url_contents("http://www.watkins.edu/academics");
	
	
	// Now try using explode() to access the *last* paragraph of that page ("The Certificate program..."). Use a delimiter of your choice.
	
	// Echo that paragraph into your page here: 
		

		
?>

</body>