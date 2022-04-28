<?php include('header.php') 
?>
<!--start of banner setion-->
<section class="banner">
	<div class="container">
		<div class="row">
			<div class="carousel slide" id="slider" data-ride="carousel">
				<div class="carousel-inner">
					<!--div to ensure one carousel item should be active at a time-->
					<ol class="carousel-indicators">
						<li class="active" data-slide-to="0"></li>
						<li data-target="#slider" data-slide-to="1"></li>
						<li data-target="#slider" data-slide-to="2"></li>
					</ol>
					<div class="item active" id="slide1">
						<img src="images/banner1.jpg">
						<!--div to write text over an image-->
						<div class="carousel-caption">
							<h2 class="banner1Heading">Welcome to<br>
							Real Canna Seeds</h2>
							<p class="banner1Para">We provide seeds of high quality according to different seasons and<br>
								we promise to provide valuable services for our customers.
							</p>
							<a href="contactus.php" class="buttonUrl">
								<button type="button" class="btn btn-lg btn-success">Contact Us</button>
							</a>
						</div>
					</div>

					<div class="item" id="slide2">
						<img src="images/banner2.jpg">
						<!--div to write text over an image-->
						<div class="carousel-caption">
							<h2 class="banner2Heading">Welcome to<br>
							Real Canna Seeds</h2>
							<p class="banner2Para">We provide seeds of high quality according to different seasons and<br>
								we promise to provide valuable services for our customers.
							</p>
						</div>
					</div>

					<div class="item" id="slide3">
						<img src="images/banner3.jpg">
						<!--div to write text over an image-->
						<div class="carousel-caption">
							<h2 class="banner2Heading">Welcome to<br>
							Real Canna Seeds</h2>
							<p class="banner2Para">We provide seeds of high quality according to different seasons and<br>
								we promise to provide valuable services for our customers.
							</p>
						</div>
					</div>
				</div>
				<a class="left carousel-control" href="#slider" data-slide="prev" role="button">
					<span class="icon-prev"></span>
				</a>
				<a class="right carousel-control" href="#slider" data-slide="next" role="button">
					<span class="icon-next"></span>
				</a>
			</div>
		</div>
	</div>
</section>
<!--end of banner section-->

<!--start of services section-->
<section class="Services">
	<div class="container">
		<div class="row">
			<center>
				<h3>Our Products</h3>
			</center>
			<br>
			<div class="col-sm-4">
				<img src="images/star.png">
				<h3 class="seo">SEO</h3>
				<p>It is a long established fact<br>
					that a reader will be distr-<br>
					-cted by the readable content<br>
					of a page when looking at its<br>
				layout</p>
			</div>
			<div class="col-sm-4">
				<img src="images/star.png">
				<h3 class="service">SERVICES</h3>
				<p>It is a long established fact<br>
					that a reader will be distr-<br>
					-cted by the readable content<br>
					of a page when looking at its<br>
				layout</p>
			</div>
			<div class="col-sm-4">
				<img src="images/star.png">
				<h3 class="logo">LOGO</h3>
				<p>It is a long established fact<br>
					that a reader will be distr-<br>
					-cted by the readable content<br>
					of a page when looking at its<br>
				layout</p>
			</div>
		</div>
	</div>
</section>
<!--end of service section-->

<section class="videoGallery">
	<div class="container">
		<div class="col-lg-12">
			<!--First row for 4 youtube screens-->
			<h3 class="text-center videoTxt">Video Gallery</h3>
			<div class="row">
				<div class="col-lg-3 videoScreen">
					<iframe src="https://www.youtube.com/embed/Y63oofQycXQ" allowfullscreen frameborder="0"></iframe>
					<center><label>Growing Canna From Seed</label></center>
				</div>

				<div class="col-lg-3 videoScreen">
					<iframe src="https://www.youtube.com/embed/IBW34r4JbWA" allowfullscreen frameborder="0"></iframe>
					<center><label>Take a Tour</label></center>
				</div>

				<div class="col-lg-3 videoScreen">
					<iframe src="https://www.youtube.com/embed/JgPa6rU9z6I" allowfullscreen frameborder="0"></iframe>
					<center><label>Growing Cannas</label></center>
				</div>

				<div class="col-lg-3 videoScreen">
					<iframe src="https://www.youtube.com/embed/nccrA8oz0Qc" allowfullscreen frameborder="0"></iframe>
					<center><label>Cannabis Oil</label></center>
				</div>
			</div>

			<!--Second row for 4 youtube screens-->
			<div class="row">
				<div class="col-lg-3 videoScreen">
					<iframe src="https://www.youtube.com/embed/uQEDp1dbH6k" allowfullscreen frameborder="0"></iframe>
					<center><label>Growing Canna Lily Seeds</label></center>
				</div>

				<div class="col-lg-3 videoScreen">
					<iframe src="https://www.youtube.com/embed/oZwcxrpIX8I" allowfullscreen frameborder="0"></iframe>
					<center><label>Producing Cannabis Seeds</label></center>
				</div>

				<div class="col-lg-3 videoScreen">
					<iframe src="https://www.youtube.com/embed/vnnyfEuPgMw" allowfullscreen frameborder="0"></iframe>
					<center><label>Harvesting Canna Seeds</label></center>
				</div>

				<div class="col-lg-3 videoScreen">
					<iframe src="https://www.youtube.com/embed/MKzeMOAXHxM" allowfullscreen frameborder="0"></iframe>
					<center><label>Post Canna Seeds Germination</label></center>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- end of video gallery section -->
<!--start of about us section-->
<section class="AboutUs">
	<div class="container">
		<div class="well well-lg">
			<div class="row">
				<div class="col-lg-8">
					<h2>
						About Us
					</h2>	
					<p>
						Lorem ipsum dolor sit elit, consectuer adispicting<br>
						elit,sed do eisumod tempor incidendent at labour et<br>
						dolare magnate segnata. El chezore erong defects and<br>
						lorem ipsum significanta.
					</p>
				</div>
				<div class="col-lg-4">
					<img src="images/seeds_aboutUsSection.jpg" class="img-responsive">
				</div>
			</div>
		</div>
	</div>
</section>
<!--end of about us section-->

<!-- start of review secton-->
<section class="review">
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<img src="images/left-arrow(blue).png" class="img-left">
			</div>
			<div class="col-sm-2">
				<img src="images/profile-photo.png" class="img-client">
			</div>
			<div class="col-sm-4">
				<h2>LARA ANGIE</h2><br>
				<p>I reviewed all the products and it was a great<br>
				experience for me this time.</p>
			</div>
			<div class="col-sm-3">
				<img src="images/right-arrow(blue).png" class="img-right">
			</div>
		</div>
	</div>
</section>
<!--end of review section-->

<!--start of email section-->
<section class="emailSec">
	<div class="container">
		<div class="row">
			<div class="well-lg">
				<center>
					<form action="emailConnection.php" method="post">
						<label>Email ID</label>
						<input type="email" name="email" id="email" class="email" placeholder="Email ID" required="">
						<input type="submit" value="Subscribe" class="btn btn-lg">
					</form>
				</center>
			</div>
		</div>
	</div>
</section>
<!--end of email section-->
<?php include('footer.php')?>