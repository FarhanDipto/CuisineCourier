<?php include "header.php"; ?>

<body>


	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1> Register to CuisineCourier </h1>
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
					<table cellpadding="10" cellspacing="12" align="left	">
						<form action="" method="POST">

							<tr>
								<td>
									<input type="text" name="uid" value="" placeholder="Enter user id" required="" style="padding: 10px; width: 300%"> <br>
								</td>
							</tr>

							<tr>
								<td> <input type="email" name="email" value="" placeholder="Enter Your Email Address" required="" style="padding: 10px; width: 300%"> <br> </td>
							</tr>

							<tr>
								<td> <input type="password" name="pass" value="" placeholder=" Enter Your password" required="" style="padding: 10px; width: 300%"> <br> </td>
							</tr>

							<tr>
								<td align="center"> <input type="submit" name="sb" value="Registration Now" style="color:white; border:0ch; background: #306c74; font-size: 1.1em;"> <br> </td>
							</tr>

						</form>
					</table>

					<?php
					if (isset($_POST['sb'])) {

						$uid = $_POST['uid'];
						$pass = $_POST['pass'];
						$email = $_POST['email'];
						include "connect.php";
						mysqli_query($con, "insert into registration(userid, email, password) values('$uid','$email','$pass')");
						echo "<script>alert('Registration SuccessFully');</script>";
						echo "<center>Registration SuccessFully ... Click to <a href='login.php'>login</a></center>";
					}

					?>





				</div>
			</div>

		</div>
	</div>

	<?php include "footer.php"; ?>