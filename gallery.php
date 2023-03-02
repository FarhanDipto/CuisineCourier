<?php include "header.php"; ?>	

	<div class="all-page-title page-breadcrumb2">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Our Food Gallery</h1>
				</div>
			</div>
		</div>
	</div>

	
	<div class="gallery-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<p><b>Feast your eyes on our mouth-watering food gallery!<br>As Apicius once said, <b>"We eat first with our eyes..."</b></b></p>
					</div>
				</div>
			</div>
			<div class="tz-gallery">
				<div class="row">
					
					<?php
							include "connect.php";
							$s = mysqli_query($con,"select image from menu");
							while($r = mysqli_fetch_array($s))
							{
					?>
						<div class="col-sm-12 col-md-4 col-lg-4">
						
							<a class="lightbox" href="<?php echo "admin/".$r['image']; ?>">
								<img class="img-fluid"  src="<?php echo "admin/".$r['image']; ?>" alt="Gallery Images" style="width: 450px; height: 230px;">

								
							</a>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>


<?php include "footer.php"; ?>