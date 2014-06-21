<!doctype html>
<head>
	<title>Exercise 9</title>
	<link rel="stylesheet" type="text/css" media="all" href="style.css" />
	
</head>
<body>
	
<?php 

// the function below can grab the favicon of pretty much any website. You feed it a URL, and it returns the address if an image file.

function get_favicon($url) {
		
		 // use str_replace to remove the http:// part of the URL
		$url = str_replace("http://",'',$url);
		
		// use google's service to find the favicon image, whatever file type it is
		$favicon = "http://www.google.com/s2/favicons?domain=".$url;
		
		
		// return an image URL (something like http://example.com/favicon.png)
		return $favicon;
		
		}
		
		
// Part 1: show that the function works with an example.
	
		// Store a full URL of your choosing in a variable called $example_url. 
		// Full URLs always have http:// (or https://) at the beginning, and most of the time, www is optional. In other words, www.example.com is NOT a real URL but http://example.com IS.
		
		
		// Now run $example_url through the get_favicon() function and store the returned result in $example_favicon.
		
		// Finally, display the favicon in the page using an <img /> tag.
		// Remember the standard way of displaying a remote image would look like this in HTML:
		// <img src="http://example.com/favicon.png" alt = "A favicon" />
		// so you need to display something similar but dynamically insert the appropriate file address into the src attribute. You will need to turn PHP on and off as appropriate. 
		
		
// Part 2: Displaying favicons dynamically

			// Let's load a list of the busiest 50 websites and store them in an array called topsites. (open topsites.php to see this).

		
			// As you know, the first element in an index array is number 0, and it can be accessed like this: $topsites[0]. The second element would be $topsites[1], and so on. Try outputting the favicon of the 10th item in the $topsites array by running it through the get_favicon function and constructing an image tag as you did before:


	
			// Once that's working, write a "for" loop that runs a counter from 0 to 49, and use that $counter variable to loop through all fifty elements in $topsites. Each time the loop runs, it should output a different <img /> tag until all 40 favicons have been displayed.  


		
// Part 3: Incorporating Total Visits info

			// a second array called $visits contains the total number of visits to each site for 2010. In other words, the visitor count for $topsites[14] is $visits[14]. Duplicate your loop below and add code inside the loop that draws a bar whose width is based on the number of visits to that site.
			// Hint: you can create simple bar with an inline style like this:
			// <div style="background:#0675A4; width:120px; height:20px;"></div>
			// So put that in your Loop but make the width change for each element in the array.

	
	

				
		
		
		
?>


</body>