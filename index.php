<!DOCTYPE html>
<html>

<head>
      <meta charset="UTF-8" />
	 <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Offr</title>
   
    <link rel="stylesheet" href="css/offr_form.css">
   
</head>

<body>
	

		
<div valign="top"><?php include 'Include/header.php';?></div>	

	
	
    <div>
        <div class="container">
            <div class="row" >
				
	
				
				
                <div class="col-md-5">
                    <div>
						<h1>Contact Offr</h1>
						<p>Have any questions? We'd love to hear from you.</p>
 <form id="main-demo-white-form" class="simple-form white modern-rounded-style main-demo-form" action="sendmail.php" method="post">
	 
	  <label>
	             <input type="text" name="name" value="" class="validate-name" min="2" placeholder="What is your name?" required>
	 </label>
	 
		 <label>
              <input type="text" name="phone" class="validate-phone" placeholder="What is your phone number?" required>
          </label>
       
        <label>
            <input type="text" name="email" class="validate-email" value="" placeholder="What is your email?">
        </label>

      

     
        <label>
            <select name="subject" title="demo" required>
                <option value="">What is your profession?</option>
                <option value="Agent/Seller">Agent/Seller</option>
                <option value="Agent">Agent</option>
				  <option value="Solicitor">Solicitor</option>
			
                <option value="Offer">Other</option>
            </select>
        </label>

        <label>
            <textarea name="message" placeholder="Write your message here ..." required></textarea>
        </label>

        <!-- Drag & Drop Files Uploading -->
        <div class="simple-files">
            <label class="simple-file-label">
                <input type="file" name="files[]" multiple>
                <span class="simple-files-trigger" style="color:#ffffff;"><strong>Select</strong> or drop files here.</span>
            </label>
        </div>

        <div class="form-submit text-center">
            <button type="submit">Send now</button>
        </div>

        <!-- Consent Checkbox -->
        <div class="consent">
            <label class="custom-checkbox-label">
                <input type="checkbox" class="simple-consent-checkbox" name="consent" value="agree" required="" checked>
                <span class="custom-checkbox-button"></span>

                By clicking the “Send now” button you agree to our <a href="#">Terms and Conditions</a>.
            </label>
        </div>

        <!-- Error & Info messages will show here -->
        <div class="server-response"></div>
    </form>
					
					
					
					
					
					</div>
                </div>
				    <div class="col-md-5">
				
					<h1>Support</h1>
						<p>Our team is here to provide you with answers to your questions.</p>
				

<div valign="top"><?php include 'Include/map.html';?></div>
     				

	
<h3>Community Forum</h3>
	<p>Browse and participate on our community forum to get help from fellow members. Send us any suggestions and feedback on your experience - we are always keen to listen to anything you have to say.  <a href="#" style="color:#FE7133"><strong> Visit our support forum</strong></a></p>	

   
            	
<h3>Book a Demo</h3>
	<p>Request a customised demonstration for you and your team and discover how you can take your business and service to the next level.     <a href="#" style="color:#FE7133"><strong>Book a Demo</strong></a></p>		


              	
<h3>Buying or Selling</h3>
	<p>Whether you're looking for an agent to sell your property or buying a property. We will make the entire process fast and stress free.     <a href="#" style="color:#FE7133"><strong>Buying or Selling</strong></a></p>		



				</div>
               
            </div>

        </div>
    </div>
	
    <div valign="top"><?php include 'Include/footer.php';?></div>
	
	
	<script src="js/simple-forms-translations.js"></script>
<script src="js/simple-forms.min.js"></script>



<script>
    var simple_forms = new SimpleForms("#contact-form", {
        theme: "white",
        style: "modern-rounded",
    });
	
</script>
	

    
</body>

</html>