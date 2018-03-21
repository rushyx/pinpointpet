<?php include("./includes/_head.php"); ?>

    <div class="container">
	    	<div class="row">
		     <div class= "col-sm-12">
		 			<?php echo renderNav($pages); ?>		
	       	</div>
	     	</div>
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
                 <h1>Contact Pinpoint Pet</h1>
                 <p class="lead">If you have checked our <?php echo "<a href= '{$pages->get("/faq/")->url}'";?> >FAQ page</a> and have more question then please use this form to contact us</p>

						<form id="contact-form" method="post" action= <?php echo $pages->get('/message-sent/')->url ?> role="form">
					   <div class="messages"></div>
					   <div class="controls">
					
						   <div class="row">
								<div class="col-md-6">
							   	<div class="form-group">
							      	<label for="form_name">Firstname *</label>
							         <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
							         <div class="help-block with-errors"></div>
							      </div>
							   </div>
							   
							   <div class="col-md-6">
							   	<div class="form-group">
							      	<label for="form_lastname">Lastname *</label>
							         <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
							         <div class="help-block with-errors"></div>
							   	</div>
							   </div>
							</div>
							
							<div class="row">
								<div class="col-md-6">
							   	<div class="form-group">
							      	<label for="form_email">Email *</label>
							         <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
							         <div class="help-block with-errors"></div>
							      </div>
							   </div>
							   
							   <div class="col-md-6">
							   	<div class="form-group">
								      <label for="form_phone">Phone</label>
								      <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone no.">
								      <div class="help-block with-errors"></div>
							     </div>
							  </div>
							</div>
							
							<div class="row">
								<div class="col-md-12">
							   	<div class="form-group">
								      <label for="form_message">Message *</label>
								      <textarea id="form_message" name="message" class="form-control" placeholder="Your message *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
								      <div class="help-block with-errors"></div>
							      </div>
							   </div>
							   
							   <div class="col-md-12">
							   	<input type="submit" class="btn btn-success btn-send" value="Send message" name="msg-sent">
							   </div>
							</div>
							
							<div class="row">
								<div class="col-md-12">
							   	<p class="text-muted"><strong>*</strong> These fields are required.</p>
						   	</div>
							</div>
						</div>
					</form>
             </div>
         </div>
     </div>

<?php include("./includes/_foot.php"); ?>