<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="zxx">
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php echo $pageTitle; ?></title>

		<meta name="description" content="We are a local establishment designed to help the small business owner branch out. We provide professional business services and connect you with top-notch specialists to make sure your business runs smoothly.">
		<meta name="keywords" content="Curwin, business centre, websites, business cards, office, office space, Curwin business centre, mailbox, business services, video conference, small business, social media">
		<meta name="author" content="Tara Curwin, Muzamil Ejaz">

		<meta property="og:title" content="Curwin Business Center"/>
		<meta property="og:image" content="http://www.curwinbusinesscentre.com/img/logo_curwin_header.png"/>
		<meta property="og:site_name" content="Curwin Business Center"/>
		<meta property="og:description" content="We are building a great new website! However, we are currently under construction.. Stay tuned and stay in touch with our facebook."/>

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,600,700,900%7COpen+Sans:300,400,600,700,800" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/font-awesome/css/fontawesome-all.min.css">
		<link rel="stylesheet" href="vendor/animate/animate.min.css">
		<link rel="stylesheet" href="vendor/linear-icons/css/linear-icons.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="css/theme.css">
		<link rel="stylesheet" href="css/theme-elements.css">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="vendor/rs-plugin/css/settings.css">
		<link rel="stylesheet" href="vendor/rs-plugin/css/layers.css">
		<link rel="stylesheet" href="vendor/rs-plugin/css/navigation.css">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="css/skins/default.css"> 

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="css/custom.css">

		<!-- Head Libs -->
		<script src="vendor/modernizr/modernizr.min.js"></script>
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/jquery.validation/jquery.validation.min.js"></script>

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-125390769-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-125390769-1');
		</script>

	</head>
	<body>
		<div class="body">
			<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 70}">
				<div class="header-body">
					<div class="header-container">
						<div class="header-row">
							<div class="header-column justify-content-start">
								<div class="header-logo px-3">
									<a href="index.php">
										<img src="img/logo_curwin_header.png" width="130" height="40" alt="" />
									</a>
								</div>
							</div>
							<div class="header-column justify-content-center">
								<div class="header-nav justify-content-lg-center">
									<div class="header-nav-main header-nav-main-dark header-nav-main-effect-1 header-nav-main-sub-effect-1">
										<nav class="collapse">
											<ul class="nav flex-column flex-lg-row" id="mainNav">
												<li class="dropdown dropdown-mega">
													<a class="dropdown-item dropdown-toggle <?php echo ($page == 'home') ? 'active' : ''; ?>" href="index.php">
														Home
													</a>
												</li>
												<li class="dropdown dropdown-mega dropdown-mega-style-2">
													<a class="dropdown-item dropdown-toggle <?php echo ($page == 'services') ? 'active' : ''; ?>" href="services.php">
														Services
													</a>
												</li>
												<li class="dropdown">
													<a class="dropdown-item dropdown-toggle <?php echo ($page == 'aboutUs') ? 'active' : ''; ?>" href="about-us.php">
														About
													</a>
												</li>
												
												<li class="dropdown dropdown-mega dropdown-mega-style-2">
													<a class="dropdown-item dropdown-toggle <?php echo ($page == 'careers') ? 'active' : ''; ?>" href="careers.php">
														Careers
													</a>
												</li>
												<li class="dropdown dropdown-mega dropdown-mega-style-2">
													<a class="dropdown-item dropdown-toggle <?php echo ($page == 'blog') ? 'active' : ''; ?>" href="blog.php">
														Blog
													</a>
												</li>
												<li class="dropdown">
													<a class="dropdown-item dropdown-toggle <?php echo ($page == 'shop') ? 'active' : ''; ?>" href="shop.php">
														Shop
													</a>
												</li>
												<li class="dropdown">
													<a class="dropdown-item dropdown-toggle <?php echo ($page == 'contact') ? 'active' : ''; ?>" href="contact.php">
														Contact
													</a>
												</li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-button d-none d-sm-flex mx-3">
									<a href="login.php" class="btn btn-outline btn-rounded btn-primary btn-4 btn-icon-effect-1" target="_blank">
										<span class="wrap">
											<span>Login</span>
											<i class="fas fa-user"></i>
										</span>
									</a>
								</div>
								<button class="header-btn-collapse-nav mx-3" data-toggle="collapse" data-target=".header-nav-main nav">
									<span class="hamburguer">
										<span></span>
										<span></span>
										<span></span>
									</span>
									<span class="close">
										<span></span>
										<span></span>
									</span>
								</button>
							</div>
						</div>
					</div>
				</div>
			</header>
			<!-- <div role="main" class="main"> -->