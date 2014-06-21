<?php 

// if the form was submitted....
	
		// user the GET superglobal to grab the user-inputted zip code
		$zip = $_GET["zip"];

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
	?>




<!doctype html>
<head>
	<title>Exercise 12</title>
	<link rel="stylesheet" type="text/css" media="all" href="style.css" />
	
<?php 

// EXERCISE 12
	
	// Use inline CSS below to change the page's appearance based on 
	
	// (a) The temperature (measured in degrees fahrenheit)
	// (b) The wind speed (measured in miles per hour)
	// (c) The wind direction (measured as 0 to 360 degrees)
 	
	//	Use color, font size/style/weight, OPACITY, rotation (http://www.css3maker.com/text-rotation.html), and/or the provided background images (arrow.png or line.png). Do not use any other image files.
	
	// Your page should balance aesthetic variety with logical visual cues and legibility.
 
	
	// You may edit any HTML, CSS, or PHP. 

	// if the form was submitted, add a <style> tag in the head of the document.
	if (isset($_GET['form-submit'])) {  ?>
		
	<style>
		body {background-color: rgb(240,240,240);}
	</style>
	
<?php 
	// end if statement
	}
?>

	
	
</head>
<body>
	<div id="main">
		<section>
	
	
			<?php if (isset($_GET['form-submit'])) { ?>
	
	<p class="announce">In <?php echo $city; ?>, it&#8217;s <?php echo $temp; ?>&#176; fahrenheit. The wind is blowing at <?php echo $wind_speed; ?> mph with a direction of <?php echo $wind_direction; ?>&#176;.</p>
	
		<?php 
			// end if statement
			}
		?>
		
		
	
	<form id="the-form" action="#" method="get">
		
		<label for="zip">Type in a zip code</label>
		<input id="zip" name="zip" type="text" />
		<input id="form-submit" name="form-submit" type="submit" value="Visualize it" />

	</form>	


	</section>
</div> <!-- /main -->
</body>