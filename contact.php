<!DOCTYPE html>
<html>

  <head>
  
     <title> Contact Us </title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link href="css/bootstrap.css" rel="stylesheet">
	 <link href = "css/costomcontact.css" rel="stylesheet">
	  <link href = "css/animate.css" rel="stylesheet">

  </head>
    
  <body class = "image">
  
	    <div class="rt">
		<br>
		<h1><a href="index.php" > Rt Camp </a></h1>
		</div>
		
		    <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                       SHOPING
                       <span class="caret"></span>
                       </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="http://www.flipkart.com">FLIPKART</a></li>
                         <li><a href="http://www.snapdeal.com/">SNAPDEAL</a></li>
                         <li><a href="http://www.shopclues.com/">SHOPCLUE</a></li>
                         </ul>
                         </div>
						 
						 
						 
						 <?php 
						 
						     function remove_garbage($str)
	                         {
	                         return preg_match( "/[\r\n]/", $str );
	                         }
						 
						 
						    if(isset($_POST['contact-submit'])){
							
							$name = trim($_POST['name']);
							$email = trim($_POST['email']);
							$password = trim($_POST['password']);
							$phone = trim($_POST['phone']);
							$mss = $_POST['message'];
						 
 						    if(remove_garbage($name) || remove_garbage($email) || remove_garbage($phone)){
							 Die();
							 }
						     
							if(!$name || !$email || !$password || !$phone || !$mss){
							  
							 echo "<div class='woo'>
							<h5 class ='nike'>your have to fill the form !</h5>
						    <p></h4><a href='contact.php' class='btn btn-default' id='no'>&laquo;Go back and try again</a></p>
							</div>";
		                     exit;	
							}
							
							$to = "abhishekabhiabhi0@gmail.com";
							$subject = "$name sent you message from your to a email";
							
							//actual message
							
							$message = "Name :$name \r\n";
							$message .= "Email :$email \r\n";
							$message .= "Message :$mss \r\n";
							
							//now we are going to check the check box
							
							if(isset($_POST['check'])){
							
							$message = "\r\n\r\n please add $email to mail list .\r\n";
							
							}
							
							$message = wordwrap($message ,72);
							
							
							
							// Set the mail headers into a variable
								$headers = "MIME-Version: 1.0\r\n";
								$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
								$headers .= "From: " . $name . " <" . $email . ">\r\n";
								$headers .= "X-Priority: 1\r\n";
								$headers .= "X-MSMail-Priority: High\r\n\r\n";
						   
							// send the mail 
							
							 mail($to ,$subject ,$message ,$headers);
							 
							 ?>
						 
							<!-- Show success message after email has sent -->
							<div class="complete">
							<h5>Thanks for contacting <br> Abhishek Kumar Abhi!</h5>
							<p>Please allow 24 hours for a response.</p>
							<p><a class="btn btn-default" id="btn4" href="index.php" role="button">&laquo; Go to Home Page</a></p>
							</div>
							
							<?php
								} else {
							?>		
							
						 <!--contact form-->
						 
                  <div class="container">
                        <div class="back">				  
				        <form class="form-horizontal" action="contact.php" method="post" name="contact" id="contact-form ">
				  
				        
				     	<label for="Name" class="col-sm-2 control-label">Name</label>
				    	<div class="col-sm-10">
					    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
					    </div>
				        <br><br><br>
					
				  
				 
					<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-10">
					  <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Email">
					</div>
				     <br><br><br>
				  
					<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
					<div class="col-sm-10">
					  <input type="password" class="form-control" id="inputPassword3" name="password" placeholder="Password">
					</div>
				    <br><br><br>
					
				
					<label for="Phone no" class="col-sm-2 control-label"> Phone-no </label>
					<div class="col-sm-10">
					  <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone no">
					</div>
                    <br><br><br>				
					
					
					<label for="message" class="col-sm-2 control-label">Message</label>
					<div class="col-sm-10">
					  <textarea type="text" class="form-control" id="text" name="message" placeholder="please enter your text"></textarea>
					</div>
					<br><br><br>
				
					<div class="col-sm-offset-2 col-sm-10">
					  <div class="checkbox">
						<label>
						  <input type="checkbox" name="check" > Remember me</label>
					  </div>
					 </div>
				  <br><br><br>
				  
					<div class="col-sm-offset-2 col-sm-10">
					  <button type="submit" class="btn btn-default"  name="contact-submit"> submit </button>
				  </div>
				  <br><br><br>
			 
				</form>
				<?php } ?>
				</div>
		   		</div>
																		
              <div class="row">
              <div class="col-lg-4">
                  <div class="bluebox">
                      <h2><span class="glyphicon glyphicon-book"></span> Learn </h2>
                        <p class="lead">  Listen your favorite star and follower and  konow what they fell what they twitte about the world its time for you to be close as much passible to your stars</p>
                         <a class="readmore" href="https://www.instagram.com/?hl=en">Instgram </a>
                  </div>
              </div>
               <div class="col-lg-4">
                  <div class="redbox">
                        <h2><span class="glyphicon glyphicon-eye-open"></span>Create</h2>
                        <p class="lead"> Listen your favorite star and follower and  konow what they fell what they twitte about the world its time for you to be close as much passible to your stars</p>
                         <a class="readmore" href="https://twitter.com/?lang=en">Twitter </a>
                  </div>
              </div>
               <div class="col-lg-4">
                  <div class="bluebox">
                      <h2><span class="glyphicon glyphicon-road"></span>Track</h2>
			
                        <p class="lead">  Listen your favorite star and follower and  konow what they fell what they twitte about the world its time for you to be close as much passible to your stars</p>
                         <a class="readmore" href="https://www.facebook.com/login/">Facebook </a>
                  </div>
              </div>
          </div>
 
                           								  								  
	 <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>							     \
     <script src="js/bootstrap.min.js"></script>

       <footer>
         &copyright 2016 @ A.K ABHI Ptv Ltd.
       </footer>

</body>
</html>