<?php include("./includes/_head.php"); ?>

 <div class= "container">
	 <div class= "row">
	     <div class= "col-sm-12">
	 			<?php 
	 			echo renderNav($pages); 
	         echo "<h2>$page->title</h2>";
				echo $page->body;	
				?>		
       	</div>
	 </div>
 </div>


<?php include("./includes/_foot.php"); ?>