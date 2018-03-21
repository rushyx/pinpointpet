<?php include("./includes/_head.php"); ?>

 <div class= "container">
	 <div class="row">
	     <div class= "col-sm-12">
	 			<?php 
	 			echo renderNav($pages);
				echo "<h2>$page->title</h2>";
         	echo $page->body; 
         	?>

				<div id= "faq-panel">
					<p>Click any question to see our answer</p>
				<?php
						foreach($page->faq_list as $faq)
						{
							 echo "<button class= 'accordion'>$faq->faq_label</button>";
							 echo "<div class= 'ppp-panel'><p>$faq->faq_text</p></div>";   
						} 
				?>
				</div>
        </div>
     </div>
</div>


<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) 
{
  acc[i].onclick = function() 
  {
    this.classList.toggle("selected");
    var panel = this.nextElementSibling;
   
    if (panel.style.maxHeight)
      panel.style.maxHeight = null;
    else 
      panel.style.maxHeight = panel.scrollHeight + "px";
  }
}
</script>

<?php include("./includes/_foot.php"); ?>