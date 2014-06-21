<!doctype html>
<!--[if lt IE 7]> <html lang="en"> <![endif]-->
<!--[if IE 7]>    <html lang="en"> <![endif]-->
<!--[if IE 8]>    <html lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
<title>Exercise 21: PHP Functions</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/CSS" href="basics.css" media="screen" />

	<!--[if lt IE 9]>
	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->



</head>



<body>

<div id="wrap">

<div id="main">

<h2>Demo</h2>

<p>In PHP, a <em>function</em> is like a mini-program built for a particular task that might need to be repeated at various points in a PHP program or website. It usually looks like a word followed by two parentheses. 	Some functions are already built into PHP, like <code>time()</code>, which "returns" the number of seconds since January 1, 1970 as an integer.</p>

<h4>Functions that just spit information out</h4>

<p><strong><?php echo time(); ?></strong> seconds have passed since January 1, 1970, in case you were wondering.</p>	

<p>We are running <strong>PHP version <?php echo phpversion(); ?></strong> on this server.</p>	

<h4>Functions that take parameters</h4>

<p><code>date()</code> is a little more useful, but requires that we "pass" it parameters within the parentheses for it to do anything. So you can think of <code>time()</code> as a factory that is happy to produce something when asked, whereas <code>date</code> needs some inputs before it will output anything.</p>
	
<p>Today's date is <?php echo date(); ?> ← doesn't output anything</p>

<p>Today's date is <?php echo date('l'); ?>, if you just want to know the day of the week. It's day number <?php echo date('j'); ?> in the month of <?php echo date('F'); ?>. In fuller form, today is <?php echo date('l, F j, Y'); ?>. See <a href="http://us3.php.net/manual/en/function.date.php">this chart</a> for more options with the <code>date()</code> function.</p>

<p>Here is another example, using the rand() function, which most commonly accepts two paramaters: the upper and lower limits within which it should generate a random number.</p>

<?php
// These line breaks won't show up in our HTML -- it will be a single sentence between paragraph tags:
echo ("<p>One random number between 1 and 100 is <strong>"); 
echo rand(0,100); 
echo ("</strong>, while a random number between 101 and 200 is <strong>");
echo rand(101,200);
echo ("</strong>.");

?>


<p>Notice that in the examples above we had to <code>echo</code> (aka <code>print</code>) the function in order to output its "results". Functions usually <em>return</em> their results rather than print them, because sometimes we might not want to output them immediately. So you might assign a function's results to a variable and do something else with it before printing it:</p>

<?php 

$random1 = rand(0,100);
$random2 = rand(101,200);
$average = (($random + $random2) / 2);

echo ("<p>The average of two random numbers -- <strong>$random1</strong> and <strong>$random2</strong>, is $average.</p>");

?>

<h3>Building your own</h3>

<p>But you're not limited to the built in functions: you can construct your own by writing the word "function" followed by your custom function name, two parentheses, and then the function contents inside curly braces.
	
<p>A custom function that just outputs stuff might look like this:</p>

<?php 
// define the "welcome" function. notice how the date function gets run as part of it.
function welcome () {
	echo ("<p>Welcome to my site!</p>");
	echo ("<p>Today is <strong>");
	echo date('l, F j, Y');
	echo ("</strong>.</p>");
	}
?>

<p>Since this function includes <code>echo</code> statements inside it, you could just invoke it in PHP:
	
	<p>This is my site</p>
	<?php welcome(); ?>
	<p>Some more HTML might go here</p>

<p>A custom function that requires an input would look like this:</p>

<?php

function double_it($number) {
	$doubled = $number * 2;
	return $doubled;
	}

// We'll generate a random number ($random) and then run it through out new function to to double it and create $random_doubled.
$random = rand(0,10);
$random_doubled = double_it($random);

echo ("Here is a random number: $random. That number doubled is $random_doubled. Reload the page to see it happen again.");

?>


<h3>Fancy Functions</h3>

<p>Used in combination with forms and other each other, functions can be very powerful. All the examples below combine HTML forms that submit back to this page (<code>&#60;form action=&#34;index.php&#34;&#62;</code>). The page then tests to see which form was submitted and then echoes back some information, using functions along the way. </p>


<h4>This form retrieves a favicon from a URL</h4>

	<form method="get" action="index.php">
		<label for="url">Input the URL of a website</label>
		<input type="text" name="url" id="url" />
		<input type="submit" value="Submit" id="url-submit" name="url-submit" />
	</form>

<?php
	
	// Here's a function that takes a URL as an input and returns the URL of that site's favicon image:
	function get_favicon($url) {
		$url = str_replace("http://",'',$url);
		return "http://www.google.com/s2/favicons?domain=".$url;
		}

	// Now we'll handle the form that was submitted, 
	// using the above function
	if (isset($_GET['url-submit'])) {				// if the url-submit button has been clicked,
		$the_url = $_GET["url"];					// store the submitted url in $the_url.
		$favicon = get_favicon($the_url);			// run $url through the get_favicon function...
													// and store the returned image URL in $favicon. 
		if ($favicon) {														// If $favicon has any contents (i.e. if the function worked)..
			echo ("<p><strong>Here is that site's favicon:</strong>");		// echo a sentence
			echo ("<img src='$favicon' alt='Favicon' /></p>");				// followed by an image tag whose src attribute is the $favicon URL.
			}																// close if $favicon {...
		}																	// close if (isset($_GET['url-submit']...
			
?>

<h4>This form calculates tax in Tennessee</h4>

	<form method="get" action="index.php">
		<div>
			<label for="bill-amount">Input the bill amount in dollars</label>
			<input type="text" name="bill-amount" id="bill-amount" />
		</div>
		<div>
			<label for="tax-percent">Input the sales tax rate as a percent</label>
			<input type="text" name="tax-percent" id="tax-percent" />
		</div>
		<input type="submit" value="Submit" id="bill-submit" name="bill-submit" />
	</form>

<?php 

// notice this function takes TWO parameters, separated by commmas
function calculate_tax($some_amount, $some_tax_percent) {
	$multiplier = ($some_tax_percent/100) + 1; 
	$some_total = $some_amount * $multiplier;
	$some_total = "$" . number_format($some_total, 2);
	return $some_total;
	}
	
	// Now we'll handle the form that was submitted,                
	// using the above function                                     
	if (isset($_GET['bill-submit'])) {								
		$bill_amount = $_GET["bill-amount"];									
		$tax_percent = $_GET["tax-percent"];									
		
		$total = calculate_tax($bill_amount, $tax_percent);
	
		echo ("<p><strong>Your total with tax is $total</strong></p>"); 										
		}															
			                                                        	
?>

<h4>This form gets the weather from an address</h4>

	<form method="get" action="index.php">
		<div>
			<label for="address">Input an address, city name, zip code, etc.</label>
			<input type="text" name="address" id="address" />
		</div>
		<input type="submit" value="Submit" id="weather-submit" name="weather-submit" />
	</form>

<?php 

function get_weather($address) {

		$xml = simplexml_load_file("http://www.google.com/ig/api?weather=$address");
		$information = $xml->xpath("/xml_api_reply/weather/forecast_information");
		$current = $xml->xpath("/xml_api_reply/weather/current_conditions");
        $weather_array[] = $information[0]->city['data'];
        $weather_array[] = $current[0]->temp_f['data'];
        $weather_array[] = $current[0]->condition['data'];
        return $weather_array;
       }

	// Now we'll handle the form that was submitted,                
	// using the above function                                     
	if (isset($_GET['weather-submit'])) {								
		$address = $_GET["address"];
		$weather_array = get_weather($address);
		$city = $weather_array[0];
		$temp = $weather_array[1];
		$forecast = $weather_array[2];
		
		echo ("<p>The temperature in <em>$city</em> is <strong>$temp</strong>. The forecast is <strong>$forecast.</strong></p>"); 										
		}	
	
?>

</body>
</html>