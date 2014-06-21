<!doctype html>
<head>
	<title>Exercise 11</title>
	<link rel="stylesheet" type="text/css" media="all" href="style.css" />
	
</head>
<body>
	
	
	
	<div id="main">
		<section>
		<h1>Demo</h1>
		
<?php 


// DEMO 
	
	// Let's store the URL of an RSS feed. If you try to enter this URL into a browser, it won't show a web page; it will prompt you to read it as RSS.
	$feed_url = ("http://news.search.yahoo.com/news/rss?p=pineapple");

	$rawfeed = file_get_contents("$feed_url");

	// Parse the XML into a structured object
	$xml = new SimpleXmlElement($rawfeed);
	// Set up arrays based on $xml object
	$channel = $xml->channel;
	$item = $channel->item;
	
	// Lets display 10 items
	echo ("<ul>");
	
	for ($i = 0; $i <= 9; $i++) {
		$thisheadline = $item[$i]->title;
		$this_guid = $item[$i]->guid;
		$this_link = $item[$i]->link;
		$rawpubdate = $item[$i]->pubDate;		
		
		echo ("<li>$rawpubdate: <a href=\"$this_link\">$thisheadline</a> </li>\n");
	}

	echo ("</ul>");
	
	
	?>
	</section>
	
	<section>
	
	<h1>Exercise</h1>
	
	<?php
// EXERCISE 
	
	// Here's an input form.
	?>
	<form id="the-form" action="#" method="get">
		
		<label for="term">Type a keyword here</label>
		<input id="term" name="term" type="input" type="text" />
		<input id="form-submit" name="form-submit" type="submit" value="Blam" />

	</form>	
<?php

	// In the space below, copy all the RSS-handling code from the demo above. Then modify the code so that the page can receive the input from the form (when submitted) and use it as a term at the end of the RSS feed url. In other words, when I punch in "Nashville" and hit Blam, the page should reload with a list of news articles about Nashville. You may want to use the form-handling code from demo-input.php in Web 2, Exercise 19: http://web2.jamesmuspratt.com/blog/exercise-19. See also http://web2.jamesmuspratt.com/exercises/ex19/demo-input.php. 
		
	// a) First, try modifying $feed_url so that it contains $keyword at the end instead of "pineapple". Then above this line, assign $keyword a value using the assignment operator ($keyword = "nashville";) When you upload your modified file, does the page retrieve a list of articles? If so, you're halfway there.
	
	
	
	// b) Now your job is to change $keyword based on what was input by the user. try  Try following the demo-output.php file from line 66. Inside that "if isset()" conditional, try assigning the submitted term to $keyword. Remember, the input field whose contents you want to retrieve has an ID of "term".
	
		
		
?>
	</section>
</div> <!-- /main -->
</body>