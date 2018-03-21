<!doctype html>
<html lang= "en">
<head>
   <meta charset="utf-8">
	<meta name= "viewport" content= "width=device-width, initial-scale=1">	
   
   <meta name="description" content="<?php echo $page->page_meta_description; ?>">

   <title><?php echo $page->title; ?></title>
   
<!--	<link rel= "stylesheet" href= "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
	<link rel= "stylesheet" href= "<?php echo $config->urls->templates?>css/bootstrap.min.css">
	<link rel= "stylesheet" href= "<?php echo $config->urls->templates?>css/site.css">

	<?php if ($page->name == "contact-pinpoint-pet") echo "<link rel= 'stylesheet' href= 'https://fonts.googleapis.com/css?family=Lato:300,400,700'>"; ?>
	<?php if ($page->name == "gallery") echo "<link rel= 'stylesheet' href= '{$config->urls->templates}photoswipe/photoswipe.css'>"; ?>

 	<script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script> 
  	<script src= "<?php echo $config->urls->templates?>js/bootstrap.min.js"></script>
 	<?php if ($page->name == "contact-pinpoint-pet") echo "<script src= '{$config->urls->templates}js/contact.js'></script>"; ?>
   
</head>

<body>

<header>
   <div class= "container">
   	<div class= "row">
			<div class= "col-sm-12">
				<?php echo $hdr_logo; ?>
			</div>
		</div>
	</div>
</header>
