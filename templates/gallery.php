<?php include("./includes/_head.php"); ?>

 <div class= "container">
 	<div class="row">
   	<div class= "col-sm-12">
 			<?php 
 			echo renderNav($pages); 
			echo "<h2>{$page->title}</h2>";
         echo $page->body;
         ?>             				
 
			<ul id= "Gallery">
				<?php
				foreach($page->image_field as $image) 
				{
				   $thumbnail = $image->size(150,100);
	   			echo "<li><a href='{$image->url}'><img src='{$thumbnail->url}' class='img-thumbnail' alt='{$thumbnail->description}' ></a></li>";
				}
				?>		
			</ul>
   	</div>
 	</div>
 </div>


<!-- Javascript Gallery loading and hook  -->
<script src="<?php echo $config->urls->templates?>photoswipe/lib/klass.min.js"></script>
<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
<script src="<?php echo $config->urls->templates?>photoswipe/code.photoswipe-3.0.5.min.js"></script>   

<script>
(function(window, $, PhotoSwipe){
	
	$(document).ready(function(){
		
		var options = {};
		$("#Gallery a").photoSwipe(options);
	
	});
	
	
}(window, window.jQuery, window.Code.PhotoSwipe));
</script>      

<?php include("./includes/_foot.php"); ?>
