<?php
	$pageTitle = 'Contact - Curwin Business Center';
	$page = 'contact';
	include('includes/header.php');
?>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 col-xl-4 order-md-1 px-0">
				<section class="section bg-dark-3">
					<div class="row my-5">
						<div class="col text-center appear-animation" data-appear-animation="fadeInUpShorter">
							<div class="icon-box icon-box-style-5 mb-3">
								<div class="icon-box-icon bg-dark-5 mb-3">
									<i class="lnr lnr-apartment text-color-light"></i>
								</div>
								<div class="icon-box-info">
									<div class="icon-box-info-title">
										<h2 class="font-weight-bold mb-0">GET IN TOUCH</h2>
									</div>
								</div>
							</div>
							<span class="top-sub-title text-color-light-3">OUR ADDRESS</span>
							<h3 class="font-weight-bold text-color-light line-height-1 mb-3">Kennebecasis Valley</h3>
							<span class="d-block text-color-light-3">204 Hampton Road, Quispamsis</span>
							info@curwinbusinesscentre.com<span class="d-block mb-3">
								<a href="tel:+1234567890" class="link-color-light-3">(506) 847-4485</a></span>
							<a href="https://www.google.com/maps?q=204+Hampton+Rd,+Quispamsis,+NB+E2E+4L8,+Canada&hl=en&t=v&output=embed" class="text-color-primary font-weight-bold popup-gmaps learn-more">GET DIRECTIONS <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</section>
			</div>
			<div class="col-md-6 col-xl-4 order-md-2 px-0">
				<div class="min-height-550 h-100 gt-video-outer">
					<video autoplay muted loop class="gt-myVideo">
						<source src="video/contact1.mp4" type="video/mp4">
						Your browser does not support HTML5 video.
					</video>
				</div>
			</div>
			<div class="col-md-6 col-xl-4 order-md-3 order-xl-3 px-0">
				<section class="section bg-dark-3 h-100 d-flex align-items-center">
					<div class="row justify-content-center w-100">
						<div class="col-10 col-lg-8 mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" data-plugin-options="{'accY': 100}">
							<div class="icon-box icon-box-style-4 align-items-center">
								<div class="icon-box-icon bg-primary">
									<i class="lnr lnr-envelope text-color-light"></i>
								</div>
								<div class="icon-box-info">
									<div class="icon-box-info-title">
										<h2 class="font-weight-bold text-color-light text-4 mb-0">Support E-mail Address</h2>
									</div>
									<a href="mailto:example@domain.com" class="link-color-light-2 text-2 opacity-8">info@curwinbusinesscentre.com</a>
								</div>
							</div>
						</div>
						<div class="col-10 col-lg-8 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" data-plugin-options="{'accY': 100}">
							<div class="icon-box icon-box-style-4 align-items-center">
								<div class="icon-box-icon bg-primary">
									<i class="lnr lnr-phone-handset text-color-light"></i>
								</div>
								<div class="icon-box-info">
									<div class="icon-box-info-title">
										<h2 class="font-weight-bold text-color-light text-4 mb-0">Office Phone Number</h2>
									</div>
									<span class="d-block">
										<a href="tel:+1234567890" class="link-color-light-2 text-2 opacity-8">(506) 847-4485</a> - <a href="tel:+1234567890" class="link-color-light-2 text-2 opacity-8"></a>
									</span>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
			<div class="col-md-6 col-xl-4 order-md-4 order-xl-4 px-0">
				<div class="min-height-550 h-100 gt-video-outer">
					<video autoplay muted loop class="gt-myVideo">
						<source src="video/contact2.mp4" type="video/mp4">
						Your browser does not support HTML5 video.
					</video>
				</div>
			</div>
			<div class="col-md-6 col-xl-4 order-md-5 px-0">
				<section class="section bg-primary h-100 d-flex justify-content-center flex-column">
					<div class="row appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
						<div class="col px-4 px-lg-5 mx-4">
							<span class="top-sub-title text-color-light opacity-6">QUICK CONTACT</span>
							<h2 class="text-color-light font-weight-bold mb-4">Send us a message</h2>
						</div>
					</div>
					<div class="row appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
						<div class="col px-4 px-lg-5 mx-4">
							<form class="contact-form form-style-3 form-errors-light" action="php/contact-form.php" method="POST">
								<div class="contact-form-success alert alert-success d-none">
									<strong>Success!</strong> Your message has been sent to us.
								</div>
								<div class="contact-form-error alert alert-danger d-none">
									<strong>Error!</strong> There was an error sending your message.
									<span class="mail-error-message d-block"></span>
								</div>
								<div class="form-row">
									<div class="form-group col-lg-6">
										<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" placeholder="Name" required>
									</div>
									<div class="form-group col-lg-6">
										<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" placeholder="E-mail" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" placeholder="Subject" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col">
										<textarea maxlength="5000" data-msg-required="Please enter your message." rows="5" class="form-control" name="message" id="message" placeholder="Message" required></textarea>
									</div>
								</div>
								<div class="form-row mt-2">
									<div class="col">
										<input type="submit" value="SEND MESSAGE" class="btn btn-dark btn-rounded btn-4 font-weight-semibold text-0" data-loading-text="Loading...">
									</div>
								</div>
							</form>
						</div>
					</div>
				</section>
			</div>
			<div class="col-md-6 col-xl-4 order-md-6 px-0">
				<div class="min-height-550 h-100 gt-video-outer">
					<video autoplay muted loop class="gt-myVideo">
						<source src="video/contact3.mp4" type="video/mp4">
						Your browser does not support HTML5 video.
					</video>
				</div>
			</div>
		</div>
	</div>

<?php
$custom_footer_class = 'mt-0';
	include('includes/footer.php');
?>