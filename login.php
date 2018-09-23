<?php
	$pageTitle = 'Login - Curwin Business Center';
	include('includes/header.php');
?>
	<section class="page-header parallax page-header-text-light overlay overlay-show overlay-op-2 mb-0 appear-animation" data-appear-animation="fadeIn" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="img/pages/login/login_header.jpg">
		<div class="container py-5">
			<div class="row justify-content-center">
				<div class="col-md-8 col-lg-6">
					<p class="text-color-light-2 text-2 mb-0 appear-animation visibility_hidden" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">Phasellus blandit massa enim. Nullam id varius nunc. Lorem ipsum dolor sit amet, consectetur adipiscing...</p>
				</div>
			</div>
		</div>
	</section>
	<section class="section section-content-pull-top-2 pull-top-level-3 z-index-1 py-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" style="animation-delay: 400ms;">
		<div class="container pb-0">
			<div class="row text-center mb-3">
				<div class="col">
					<div class="overflow-hidden">
						<span class="d-block top-sub-title text-color-primary appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="600" style="animation-delay: 600ms;">CURWIN BUSINESS CENTRE</span>
					</div>
					<div class="overflow-hidden mb-2">
						<h2 class="font-weight-bold mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="800" style="animation-delay: 800ms;">LOGIN TO A TEAM OF CREATIVE PROBLEM SOLVERS</h2>
					</div>
					<div class="overflow-hidden mb-5">
						<p class="lead mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="1000" style="animation-delay: 1000ms;">We help clients solve business problems by fusing creativity, innovation, strategy, and craft.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter">
					<div class="bg-primary rounded p-5">
						<span class="top-sub-title text-color-light-2">ALREADY A MEMBER?</span>
						<h2 class="text-color-light font-weight-bold text-4 mb-4">Sign In</h2>

						<!-- <form id="frmSignIn" method="post"> -->
							<div class="singin-form-error alert alert-danger" style="display: none">
								<strong>Error!</strong> Wrong Email or password.
								<span class="mail-error-message d-block"></span>
							</div>
							<div class="form-row">
								<div class="form-group col mb-2">
									<label class="text-color-light-2" for="frmSignInEmail">EMAIL / USERNAME</label>
									<input type="email" value="" maxlength="100" class="form-control bg-light rounded border-0 text-1" name="email" id="frmSignInEmail" required>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col">
									<label class="text-color-light-2" for="frmSignInPassword">PASSWORD</label>
									<input type="password" value="" class="form-control bg-light rounded border-0 text-1" name="password" id="frmSignInPassword" required>
								</div>
							</div>
							<div class="form-row mb-3">
								<div class="form-group col">
									<div class="form-check checkbox-custom checkbox-custom-transparent checkbox-default">
							        	<input class="form-check-input" type="checkbox" id="frmSignInRemember">
						        		<label class="form-check-label text-color-light-2" for="frmSignInRemember">
						          			Remember me
						        		</label>
							      	</div>
							    </div>
						      	<div class="form-group col text-right">
						      		<a href="#" class="forgot-pw text-color-light-2 d-block">Forgot password?</a>
						      	</div>
							</div>
							<div class="row align-items-center">
								<div class="col text-right">
									<button id="signIn" class="btn btn-dark btn-rounded btn-v-3 btn-h-3 font-weight-bold">SIGN IN</button>
								</div>
							</div>
					</div>
				</div>
				<div class="col-lg-6 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
					<div class="border rounded h-100 p-5">
						<span class="top-sub-title text-color-primary">DON'T HAVE AN ACCOUNT?</span>
						<h2 class="font-weight-bold text-4 mb-4">Register Now!</h2>

						<form action="secretCode.php" id="frmRegister" method="post">
							<div class="form-row">
								<div class="form-group col mb-2">
									<label for="frmRegisterEmail">EMAIL / USERNAME</label>
									<input type="email" value="" maxlength="100" class="form-control bg-light-5 rounded border-0 text-1" name="email" id="frmRegisterEmail" required>
								</div>
							</div>
							<div class="form-row mb-5">
								<div class="form-group col-lg-6">
									<label for="frmRegisterPassword">PASSWORD</label>
									<input type="password" value="" class="form-control bg-light-5 rounded border-0 text-1" name="password" id="frmRegisterPassword" required>
								</div>
								<div class="form-group col-lg-6">
									<label for="frmRegisterPassword2">RE-ENTER PASSWORD</label>
									<input type="password" value="" class="form-control bg-light-5 rounded border-0 text-1" name="password2" id="frmRegisterPassword2" required>
								</div>
							</div>
							<div class="row align-items-center">
								<div class="col text-right">
									<button type="submit" class="btn btn-primary btn-rounded btn-v-3 btn-h-3 font-weight-bold">REGISTER NOW</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script type="text/javascript">
		$('#signIn').click(function(){
			$('.singin-form-error').show();
		});
	</script>

<?php
	include('includes/footer.php');
?>