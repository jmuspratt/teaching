<?php 
if ($template == "list") {
	?>
 <li><?php echo $post['title']; ?></li>
<?php }

else {
	
	?>
<article>
<h1><?php echo $post['title']; ?></h1>
<h2><?php echo $post['date']; ?></h2>

<p><?php echo $post['content']; ?>
</article>
<?php } ?>