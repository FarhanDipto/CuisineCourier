<?php include "header.php"; ?> 
<body>
	

	<center> <img src="feedback3.jpg" style="background-color: red"> </center>

	
	<div class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						
						<p><b>Our primary objective is to ensure that our clients are completely satisfied.<br>We are willing to listen to your thoughts and ideas.</b></p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<form  action="" method="post">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name">
									<div class="help-block with-errors"></div>
								</div>                                 
							</div>
							<!-- <div class="col-md-12">
								<div class="form-group">
									<input type="text" placeholder="Your Email" id="email" class="form-control" name="name" required data-error="Please enter your email">
									<div class="help-block with-errors"></div>
								</div> 
							</div> -->
							<div class="col-md-12">
								<div class="form-group">
									<select class="custom-select d-block form-control" id="guest" name="rev" required data-error="Please Select Person">
									  <option value="Exellent">Exellent</option>
									  <option value="Good">Good</option>
									  <option value="Poor">Poor</option>
									  <option value="Very Poor">Very Poor</option>
									  
									</select>
									<div class="help-block with-errors"></div>
								</div> 
							</div>
							<div class="col-md-12">
								<div class="form-group"> 
									<textarea class="form-control" id="message" placeholder="Your Message" rows="4" name="desc" data-error="Write your message" required></textarea>
									<div class="help-block with-errors"></div>
								</div>
								<div class="submit-button text-center">
									<button name="sb" class="btn btn-common" id="submit" type="submit">Send Message</button>
									<div id="msgSubmit" class="h3 text-center hidden"></div> 
									<div class="clearfix"></div> 
								</div>
							</div>
						</div>            
					</form>
					<?php
					if(isset($_POST['sb']))
					{
						$nm = $_POST['name'];
						$rev = $_POST['rev'];
						$des = $_POST['desc'];
						include "connect.php";
						mysqli_query($con,"insert into review(name, review, description) values('$nm','$rev','$des')");
						echo "<h2 style='color:tomato; text-align:center;'>Your review is submitted</h2>";
					}	

					?>





				</div>
			</div>
		
		</div>
	</div>
	<!-- End Contact -->
<?php include "footer.php"; ?>