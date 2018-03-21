<?php include("./includes/_head.php"); ?>

 <div class= "container">
	<div class="row">
		<div class= "col-sm-12"> 
 			<?php 
 			echo renderNav($pages);
			echo $page->body; 
			?>		
		</div>
 	</div>

	<div class= "row">
		<div class= "col-sm-4">
       <?php echo "<h3>".$page->featured_text."</h3>"; ?>
	<!--$image = $page->featured_images->first();
		$thumb = $image->size(150,150);
			echo "<a href= '{$pages->get("/how-it-works/wireless-charging/")->url}' >";
			echo "<img src= '{$thumb->url}' alt= '{$thumb->description}' ></a>"; 
	-->
		</div>
		
		<div class= "col-sm-4">
			<h3>Waterproof and durable</h3>
		</div>
		
		<div class= "col-sm-4">
         <h3>Unique Tracking App</h3>
		</div>
	</div>

</div>

<?php include("./includes/_foot.php"); ?>

