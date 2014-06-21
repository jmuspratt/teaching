<h1>Here is the date</h1>

<?php


date_default_timezone_set("America/Chicago");


$day = date('l');

$month = date('F');


function add_two($number) {
			$output = $input + 2;
			return $output;
			}

$number = 5;

$output = add_two($number);



echo ("<p>The number is $number. And the output is $output.");


?>

