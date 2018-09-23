<?php
	$pageTitle = 'Our Office - Curwin Business Center';
	include('includes/header.php');
?>

	<section class="page-header">
		<div class="container">
			<div class="row">
				<div class="col">
					<ul class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li class="active">Pages</li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<h1>Our Office</h1>
				</div>
			</div>
		</div>
	</section>

	<div class="container">
		<div class="row">
			<div class="col">
				<div class="owl-carousel owl-theme mb-0" data-plugin-options="{'items': 1, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 3000}">
					<div>
						<img alt="" class="img-fluid rounded" src="img/office/our-office-1.jpg">
					</div>
					<div>
						<img alt="" class="img-fluid rounded" src="img/office/our-office-3.jpg">
					</div>
				</div>
			</div>
		</div>

		<hr class="tall">

		<div class="row mb-5">
			<div class="col-lg-7">
				<h2>A place where amazing things <strong>Get Done!</strong></h2>
				<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut feugiat urna arcu, vel molestie nunc commodo non. Nullam vestibulum odio vitae fermentum rutrum.</p>

				<p>Mauris lobortis nulla ut aliquet interdum. Donec commodo ac elit sed placerat. Mauris rhoncus est ac sodales gravida. In eros felis, elementum aliquam nisi vel, pellentesque faucibus nulla.</p>

				<div class="row mt-5 mb-5">
					<div class="col-lg-6">
						<div class="feature-box feature-box-style-2">
							<div class="feature-box-icon">
								<i class="fas fa-star"></i>
							</div>
							<div class="feature-box-info">
								<h4 class="heading-primary mb-1">12 years in business</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing <span class="alternative-font">metus.</span> elit. Quisque rutrum pellentesque imperdiet.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="feature-box feature-box-style-2">
							<div class="feature-box-icon">
								<i class="fas fa-heart"></i>
							</div>
							<div class="feature-box-info">
								<h4 class="heading-primary mb-1">Loved by customers</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
							</div>
						</div>
					</div>
				</div>

				<hr class="tall">

				<h4>Work <strong>Space</strong></h4>

				<div data-plugin-lightbox data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}}">
					<div class="row">
						<div class="col-lg-4">
							<a class="img-thumbnail d-block mb-5" href="img/office/our-office-1.jpg" data-plugin-options="{'type':'image'}">
								<img class="img-fluid" src="img/office/our-office-1.jpg" alt="Office">
								<span class="zoom">
									<i class="fas fa-search"></i>
								</span>
							</a>
						</div>
						<div class="col-lg-4">
							<a class="img-thumbnail d-block mb-5" href="img/office/our-office-2.jpg" data-plugin-options="{'type':'image'}">
								<img class="img-fluid" src="img/office/our-office-2.jpg" alt="Office">
								<span class="zoom">
									<i class="fas fa-search"></i>
								</span>
							</a>
						</div>
						<div class="col-lg-4">
							<a class="img-thumbnail d-block mb-5" href="img/office/our-office-3.jpg" data-plugin-options="{'type':'image'}">
								<img class="img-fluid" src="img/office/our-office-3.jpg" alt="Office">
								<span class="zoom">
									<i class="fas fa-search"></i>
								</span>
							</a>
						</div>
					</div>
				</div>

			</div>
			<div class="col-lg-5">
				<h4>Our <strong>Location</strong></h4>

				<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
				<div id="googlemaps" class="google-map small"></div>

				<ul class="list list-icons list-icons-style-3 mt-4">
					<li><i class="fas fa-map-marker-alt"></i> <strong>Address:</strong> 1234 Street Name, City Name, United States</li>
					<li><i class="fas fa-phone"></i> <strong>Phone:</strong> (123) 456-789</li>
					<li><i class="far fa-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a></li>
				</ul>

				<hr>

				<h4>Business <strong>Hours</strong></h4>
				<ul class="list list-icons list-dark mt-4">
					<li><i class="far fa-clock"></i> Monday - Friday - 9am to 5pm</li>
					<li><i class="far fa-clock"></i> Saturday - 9am to 2pm</li>
					<li><i class="far fa-clock"></i> Sunday - Closed</li>
				</ul>
			</div>
		</div>
	</div>

	<section class="section bg-light-5 section-text-overlay">
		<span class="text-background font-primary font-weight-bold ws-nowrap appear-animation" data-appear-animation="textBgFadeInUp" data-appear-animation-delay="900">OUR COMPANY</span>
		<div class="container">
			<div class="row align-items-center justify-content-center text-center text-md-left">
				<div class="col-md-7 mb-5 mb-md-0">
					<div class="overflow-hidden">
						<span class="d-block top-sub-title text-color-primary appear-animation" data-appear-animation="maskUp">LOREM IPSUM DOLOR SIT</span>
					</div>
					<div class="overflow-hidden mb-2">
						<h2 class="font-weight-bold mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">OUR COMPANY</h2>
					</div>
					<div class="overflow-hidden mb-5">
						<p class="mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc. </p>
					</div>
					<a href="#" class="btn btn-primary btn-rounded btn-h-4 btn-v-3 font-weight-semibold appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">GET STARTED NOW</a>
				</div>
				<div class="col-9 col-md-4 offset-md-1">
					<div class="owl-carousel owl-theme nav-style-3 rounded-style-1" data-plugin-options="{'items': 1, 'dots': false, 'nav': true, 'navtext': []}">
						<div>
							<img src="img/generic/generic-square-3.jpg" class="img-fluid rounded-circle" alt="" />
						</div>
						<div>
							<img src="img/generic/generic-square-3.jpg" class="img-fluid rounded-circle" alt="" />
						</div>
						<div>
							<img src="img/generic/generic-square-3.jpg" class="img-fluid rounded-circle" alt="" />
						</div>
						<div>
							<img src="img/generic/generic-square-3.jpg" class="img-fluid rounded-circle" alt="" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php
	include('includes/footer.php');
?>