<?php
		// set up configuration variables
		$host_name="wd03.watkinswebdev.com";
		$user = "jschmoe";
		$pass = "schmoepassword";
		$database="wd_03_ex14";

		// connect to the database
		$connection = mysql_connect("$host_name", "$user", "$pass");
		if (!$connection) exit("Could not connect to $database.");

		// select the database	
		$db_selected = mysql_select_db("$database", $connection);
		if (!$db_selected) { die ("Can't use $database: " . mysql_error()); }


?>