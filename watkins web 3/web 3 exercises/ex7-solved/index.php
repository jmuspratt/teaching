<!doctype html>
<!--[if lt IE 7]> <html lang="en"> <![endif]-->
<!--[if IE 7]>    <html lang="en"> <![endif]-->
<!--[if IE 8]>    <html lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
	<title>Exercise 7</title>
	
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" media="all" href="style.css" />

</head>

<body>
	<div id="top">
		
	
		<header class="cf">
			<h1>Exercise 7</h1>
		</header>

		<div id="main" role="main" class="cf">
			
			<h2>My Blog</h2>
			
		<?php		
		
		// START HERE
		// -----------
		// In addition to writing and testing your PHP file here, this exercise requires writing edit CSS stylesheet to (a) make the type look nice, (b) position the main content (#main) and (#sidebar) as vertical columns next to each other, and (c) float the thumbnail images in each blog post so that the content wraps around them. It's up to you to decide whether to save the stylesheet part of the exercise until you've got the PHP/HTML working or to jump back and forth between the two as you work.
		
		
		// Step 1: use the include function to grab the contents of the posts.php file. You'll probably want to open posts.php and see how it sets up the blog posts. Summary: $posts is an indexed array containing 5 variables ($post1 through $post5). Each of the posts is itself an associative array containing three elements, whose keys are title, date, and content.
		
		include ("posts.php");
		
		// Step 2: Inside this #main div, loop through the $posts array using a foreach loop. Each time through the loop, output the individual post's title, date, thumbnail image, and content. You must integrate semantic HTML markup with your PHP code, so you will probably need to turn php on and off where appropriate. Note: the solution does NOT require another loop inside the main foreach loop. 
		
		foreach ( $posts as $post ) {
			?>
			
			<article>
				<hgroup>
					<h2><?php echo $post[date]; ?></h2>
					<h1><?php echo $post[title]; ?></h1>
				</hgroup>

				<img class="left" src="images/<?php echo $post[thumb]; ?>" alt="thumb for <?php echo $post[title]; ?>" />
				<?php echo $post[content]; ?>
				
			</article>
				

		<?php } 
		?>

		</div> <!-- /#main -->

		<div id="sidebar" role="complementary">
			<h2>Recent Post Titles</h2>
	
		<ul>
		<?php
		// Step 3: Run a similar loop inside this sidebar div, but this time just output the title of each post. You don't need to link that title to anything: just make sure the final output is an unordered list of post titles.	
		
			foreach ( $posts as $post ) {
				?>
					<li><?php echo $post[title]; ?></li>
			<?php } 
			?>
			
	</ul>
			
		</div> <!-- /#sidebar -->
	
		
		<footer class="clear cf">

			<p>A Watkins College production.</p>

		</footer>
		

</div><!-- /#top -->

</body>
</html>