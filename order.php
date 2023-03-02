<?php session_start(); ?>
<?php include "header.php"; ?>
<div style="height: 150px;"></div>
<div style="width: 90%; margin: 0 auto; background-color: white; padding: 50px;">

	<?php
	if (isset($_SESSION['uid'])) {
		include "connect.php";
		$uid = $_SESSION['uid'];
		$nm = $_POST['nm'];
		$mo = $_POST['mo'];
		$em = $_POST['em'];
		$ad = $_POST['ad'];
		$s = mysqli_query($con, "select * from addcart where u_id='$uid'");
		while ($r = mysqli_fetch_array($s)) {
			$p_id = $r['p_id'];
			mysqli_query($con, "insert into checkout(p_id, u_id,name,mobile,email,location) values('$p_id','$uid','$nm','$mo','$em','$ad')") or die("Error");
	?>

		<?php
		}


		?>

		<!-- <div style="background-color: #3b0878; font-size:2.3em; color: #b7e352;">Order Place SuccessFully </div>
	<div style="color: #4d2e1f; font-size:1.8em;"> 
			More Detail to Contact 24x7 <br>
			+91 99240 42799
			<img src="/cooking.gif" alt="">
	</div> -->
		<div style="background-color: #ffffff; font-size:2.3em; color: #000000;">Order has been placed. </div>
		<div style="font-size:1.8em;">
			Please be patient while the chefs prepare your meal.<br>
		</div>

	<?php
	} else {
	?>
		<div style="background-color: pink; color: black; padding: 20px; font-size: 2.1em;">You cannot proceed with an empty cart! Please add your food to check out.</div>

	<?php
	}
	?>

</div>
<br><br><br>

<body>
	<p style="width: 2%; display:inline; margin-left: 550px; padding-top: -100px;"><img src="cooking.gif" alt=""></p>
	<p> </p>
	<p> </p>
	<p> </p>
	<p> </p>
	<p> </p>
	<p> </p>
	<!-- <center> <img src="cooking.jpg" style="background-color: red"> </center> -->
</body>


<?php include "footer.php"; ?>