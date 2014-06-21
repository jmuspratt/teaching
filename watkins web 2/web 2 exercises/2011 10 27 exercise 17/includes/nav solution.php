<?php // you have to open PHP at the top of the page, even if you're going to close it immediately

?>



<nav>
	<ul>
		<li><a href="index.php">home</a></li>
		<li<?php if ($this_page =="about") {echo (" class='current'");}?>><a href="index.php">portfolio</a></li>
		<li><a href="about.php">portfolio</a></li>
		<li><a href="contact.php">contact</a></li>
	</ul>
</nav>