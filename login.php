<?php include "header.php"; ?>

<body>

	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1> Log into CuisineCourier </h1>
				</div>
			</div>
		</div>
	</div>


	<div class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">

				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
					<form action="loginck.php" method="post">

						<table border="0" align="center" cellpadding="5" cellspacing="7">

							<tr align="right">
								<td> <img src="Login2.png" style="width: 40%;  margin-left: -150px"> <br></td>
								<p style="margin-left: -300px; font-size: 1.3em;"><b>New to our website?</b></p>
								<p> <a href="registration.php" style="margin-left: -300px; font-size: 1.3em;"> Go to <b>Registration</b> page</p>
								</td>
							</tr>
							<tr>
								<td> Enter your UserID: </td>
								<td> <input type="text" name="uid" placeholder="Enter Your User ID" style="padding: 10px; width: 150%"> <br> </td>

							</tr>

							<tr>
								<td> Enter your Password</td>
								<td> <input type="Password" name="pass" placeholder="Enter Your Password" style="padding: 10px; width: 150%"> <br> </td>

							</tr>

							<tr>
								<td align="right"> <input type="submit" name="" value="Login Now" style="color:white; border:0ch; background: #306c74; font-size: 1.1em;"</td>
							</tr>


					</form>
					</table>




				</div>
			</div>

		</div>
	</div>
	<?php include "footer.php"; ?>