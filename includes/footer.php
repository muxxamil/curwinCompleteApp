		<footer class="<?php echo (!empty($custom_footer_class) ? $custom_footer_class : '');?>" id="footer">
			<div class="container">
				<div class="row">
					<div class="footer-ribbon">
						<span>Get in Touch</span>
					</div>
					<div class="col-lg-3">
						<div class="newsletter">
							<h4>Want To Know More?</h4>
							<p>Keep up on our always evolving businesses and seminars. Enter your e-mail and subscribe to our email list.</p>
		
							<div class="alert alert-success d-none" id="newsletterSuccess">
								<strong>Success!</strong> You've been added to our email list.
							</div>
		
							<div class="alert alert-danger d-none" id="newsletterError"></div>
		
							<form id="newsletterForm" class="form-errors-light" action="php/contact-form.php" method="POST">
								<div class="newsletter-form-success alert alert-success d-none">
									<strong>Thanks</strong> for the Subscription.
								</div>
								<div class="newsletter-form-error alert alert-danger d-none">
									<strong>Ops!</strong> There was an error in Subscription.
									<span class="mail-error-message d-block"></span>
								</div>
								<div class="input-group">
									<input type="hidden" value="Email Subscription" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" placeholder="Subject" required>

									<div class="form-row">
										<div class="form-group col">

											<input class="form-control form-control-sm" data-msg-required="Please enter your email." placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="email" required>
										</div>
									</div>
									<span class="input-group-append">
										<button class="btn btn-light maxHeightNewsLetter" type="submit">Go!</button>
									</span>
								</div>
							</form>
						</div>
					</div>
					<div class="col-lg-3">
						<h4>Latest Tweets</h4>
						<div id="tweet" class="twitter" data-plugin-tweets data-plugin-options="{'username': 'CurwinBusiness', 'count': 2}">
							<p>Please wait...</p>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="contact-details">
							<h4>Contact Us</h4>
							<ul class="contact">
								<li><p><i class="fas fa-map-marker-alt"></i> <strong>Address:</strong>  204 Hampton Road, Quispamsis</p></li>
								<li><p><i class="fas fa-phone"></i> <strong>Phone:</strong> 506) 847-4485</p></li>
								<li><p><i class="far fa-envelope"></i> <strong>Email:</strong> <a href="mailto:info@curwinbusinesscentre.com">info@curwinbusinesscentre.com</a></p></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-2">
						<h4>Follow Us</h4>
						<ul class="social-icons">
							<li class="social-icons-facebook"><a href="http://www.facebook.com/curwinbusinesscentre" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
							<li class="social-icons-twitter"><a href="http://www.twitter.com/CurwinBusiness" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
							<li class="social-icons-linkedin"><a href="https://ca.linkedin.com/company/curwin-business-centre" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
								<br/>
							<div class="marginTop-5">
								<li class="social-icons-instagram"><a href="http://www.instagram.com/curwinbusinesscentre" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
								<li class="social-icons-youtube"><a href="https://youtube.com/channel/UCeJYZ8RZIkWAfk3IRvLtcgw" target="_blank" title="Youtube"><i class="fab fa-youtube"></i></a></li>
								<li class="social-icons-whatsapp"><a href="https://www.whatsapp.com" target="_blank" title="Whatsapp-(506)2614116"><i class="fab fa-whatsapp"></i></a></li>
							</div>
						</ul>
					</div>
				</div>
			</div>
			<div class="footer-copyright">
				<div class="container">
					<div class="row">
						<div class="col-lg-2">
							<a href="index.php" class="logo">
    							<b>Curwin Business Center</b>
							</a>
						</div>
						<div class="col-lg-6">
							<p>© Copyright 2018. All Rights Reserved.</p>
						</div>
						<div class="col-lg-4">
							<nav id="sub-menu">
								<ul>
									<li><a href="legal.php">Legal</a></li>
									<li><a href="contact.php">Contact</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
</div>

		<!-- Vendor -->
		<script src="vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="vendor/jquery-cookie/jquery-cookie.min.js"></script>
		<script src="vendor/popper/umd/popper.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/common/common.min.js"></script>
		<script src="vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
		<script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
		<script src="vendor/isotope/jquery.isotope.min.js"></script>
		<script src="vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="vendor/vide/vide.min.js"></script>
		<script src="vendor/vivus/vivus.min.js"></script>
		<!-- ANIMATED TEXT JS-->
		<script src="js/animated-text.js"></script>
		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>
		
		<!-- Current Page Vendor and Views -->
		<script src="vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

		<!-- Current Page Vendor and Views -->
		<script src="js/views/view.contact.js"></script>
		
		<!-- Theme Custom -->
		<script src="js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>

		<script src="js/examples/examples.lightboxes.js"></script>

		<script type="text/javascript">
			$('#newsletterForm').each(function(){
		$(this).validate({
			submitHandler: function(form) {

				var $form = $(form),
					$messageSuccess = $form.find('.newsletter-form-success'),
					$messageError = $form.find('.newsletter-form-error'),
					$submitButton = $(this.submitButton),
					$errorMessage = $form.find('.newsletter-error-message'),
					submitButtonText = $submitButton.val();

				$submitButton.val( $submitButton.data('loading-text') ? $submitButton.data('loading-text') : 'Loading...' ).attr('disabled', true);

				// Fields Data
				var formData = $form.serializeArray(),
					data = {};

				$(formData).each(function(index, obj){
				    data[obj.name] = obj.value;
				});

				// Google Recaptcha
				if( data["g-recaptcha-response"] != undefined ) {
					data["g-recaptcha-response"] = $form.find('#g-recaptcha-response').val();
				}

				// Ajax Submit
				$.ajax({
					type: 'POST',
					url: $form.attr('action'),
					data: data
				}).always(function(data, textStatus, jqXHR) {

					$errorMessage.empty().hide();

					if (data.response == 'success') {

						// Uncomment the code below to redirect for a thank you page
						// self.location = 'thank-you.html';

						$messageSuccess.removeClass('d-none');
						$messageError.addClass('d-none');

						// Reset Form
						$form.find('#newsletterForm')
							.val('')
							.blur()
							.parent()
							.removeClass('has-success')
							.removeClass('has-danger')
							.find('label.error')
							.remove();

						if (($messageSuccess.offset().top - 80) < $(window).scrollTop()) {
							$('html, body').animate({
								scrollTop: $messageSuccess.offset().top - 80
							}, 300);
						}

						$form.find('#newsletterForm').removeClass('error');

						$submitButton.val( submitButtonText ).attr('disabled', false);
						
						return;

					} else if (data.response == 'error' && typeof data.errorMessage !== 'undefined') {
						$errorMessage.html(data.errorMessage).show();
					} else {
						$errorMessage.html(data.responseText).show();
					}

					$messageError.removeClass('d-none');
					$messageSuccess.addClass('d-none');

					if (($messageError.offset().top - 80) < $(window).scrollTop()) {
						$('html, body').animate({
							scrollTop: $messageError.offset().top - 80
						}, 300);
					}

					$form.find('.has-success')
						.removeClass('has-success');
						
					$submitButton.val( submitButtonText ).attr('disabled', false);

				});
			}
		});
	});
			
		</script>

		<!--Start of Tawk.to Script-->
		<script type="text/javascript">
			var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
			(function(){
				var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
				s1.async=true;
				s1.src='https://embed.tawk.to/5b908370f31d0f771d847caf/default';
				s1.charset='UTF-8';
				s1.setAttribute('crossorigin','*');
				s0.parentNode.insertBefore(s1,s0);
			})();
		</script>
		<!--End of Tawk.to Script-->


		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->

	</body>
</html>
