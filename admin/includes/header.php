<?php

include_once('config/defaults.php');

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if(empty($_SESSION['ApiToken'])) {
	header('Location: ../login.php');
}

if(!hasAccess($activeNav, $_SESSION['privileges'])) {
	header('Location: '. getAcessibleNav($_SESSION['privileges']));
}

?>

<!doctype html>
<html class="sidebar-left-big-icons">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title><?php echo $pageTitle; ?> - Curwin Business Centre</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="vendor/animate/animate.css">

		<link rel="stylesheet" href="vendor/font-awesome/css/fontawesome-all.min.css" />
		<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />
		<link rel="stylesheet" href="vendor/pnotify/pnotify.custom.css" />

<?php
	if(!empty($pageSpecificCSS)) {
		echo $pageSpecificCSS;
	}
?>
		<!-- Theme CSS -->
		<link rel="stylesheet" href="css/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="css/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="css/custom.css">

		<!-- Specific Page Vendor CSS -->

		<!-- Head Libs -->
		<script src="vendor/modernizr/modernizr.js"></script>

	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<a href="../2.1.1" class="logo">
						<img src="img/logo.png" width="75" height="35" alt="Porto Admin" />
					</a>
					<div class="d-md-none toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fas fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
			
				<!-- start: search & user box -->
				<div class="header-right">
			
					<span class="separator"></span>
			
					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								<img src="img/!logged-user.jpg" alt="Joseph Doe" class="rounded-circle" data-lock-picture="img/!logged-user.jpg" />
							</figure>
							<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
								<span class="name"><?php echo $_SESSION['userInfo']->firstName; ?></span>
								<span class="role">Designation: <?php echo $_SESSION['userInfo']->UserDesignation->title; ?></span>
							</div>
			
							<i class="fa custom-caret"></i>
						</a>
			
						<div class="dropdown-menu">
							<ul class="list-unstyled mb-2">
								<li class="divider"></li>
								<!-- <li>
									<a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fas fa-user"></i> My Profile</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fas fa-lock"></i> Lock Screen</a>
								</li> -->
								<li>
									<a id="logout" role="menuitem" tabindex="-1"><i class="fas fa-power-off"></i> Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">
				
				    <div class="sidebar-header">
				        <div class="sidebar-title">
				            Navigation
				        </div>
				        <div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
				            <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
				        </div>
				    </div>
				
				    <div class="nano">
				        <div class="nano-content">
				            <nav id="menu" class="nav-main" role="navigation">
				            
				                <ul class="nav nav-main">
<?php
									if(hasAccess('Dashboard', $_SESSION['privileges'])) {
?>
										<li class="<?php echo ($activeNav == 'Dashboard') ? 'nav-active' : ''; ?>">
					                        <a class="nav-link" href="dashboard">
					                            <i class="fas fa-home" aria-hidden="true"></i>
					                            <span>Dashboard</span>
					                        </a>                        
					                    </li>
<?php
									}
?>
<?php
									if(hasAccess('Calendar', $_SESSION['privileges'])) {
?>
					                    <li class="<?php echo ($activeNav == 'Calendar') ? 'nav-active' : ''; ?>">
					                        <a class="nav-link" href="calendar.php">
					                            <i class="fas fa-calendar-alt" aria-hidden="true"></i>
					                            <span>Calendar</span>
					                        </a>                        
					                    </li>
<?php
									}
?>
<?php
									if(hasAccess('User', $_SESSION['privileges'])) {
?>
					                    <li class="nav-parent <?php echo ($activeNav == 'User') ? 'nav-active' : ''; ?>">
					                        <a class="nav-link" href="usersList">
					                            <i class="fas fa-users" aria-hidden="true"></i>
					                            <span>Users</span>
					                        </a>
					                        <ul class="nav nav-children">
					                            <li>
					                                <a class="nav-link" href="usersList">
					                                    Users List
					                                </a>
					                            </li>
					                            <li>
					                                <a class="nav-link" href="addUser">
					                                    Add new User
					                                </a>
					                            </li>
					                        </ul>
					                    </li>
<?php
									}
?>
<?php
									if(hasAccess('Blog', $_SESSION['privileges'])) {
?>
					                    <li class="nav-parent <?php echo ($activeNav == 'Blog') ? 'nav-active' : ''; ?>">
					                        <a class="nav-link" href="postsList">
					                            <i class="fab fa-blogger" aria-hidden="true"></i>
					                            <span>Blog</span>
					                        </a>
					                        <ul class="nav nav-children">
					                            <li>
					                                <a class="nav-link" href="postsList">
					                                    Posts List
					                                </a>
					                            </li>
					                            <li>
					                                <a class="nav-link" href="addPost">
					                                    Add new Post
					                                </a>
					                            </li>
					                        </ul>
					                    </li>
<?php
									}
?>
				                    <li>
				                        <a class="nav-link" href="http://curwinbusinesscentre.com" target="blank">
				                            <i class="fas fa-external-link-alt" aria-hidden="true"></i>
				                            <span>Front-Site</span>
				                        </a>                        
				                    </li>
				
				                </ul>
				            </nav>
				
				            <hr class="separator" />
				        </div>
				
				        <script>
				            // Maintain Scroll Position
				            if (typeof localStorage !== 'undefined') {
				                if (localStorage.getItem('sidebar-left-position') !== null) {
				                    var initialPosition = localStorage.getItem('sidebar-left-position'),
				                        sidebarLeft = document.querySelector('#sidebar-left .nano-content');
				                    
				                    sidebarLeft.scrollTop = initialPosition;
				                }
				            }
				        </script>
				        
				
				    </div>
				
				</aside>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Left Sidebar Big Icons</h2>
					
						<div class="right-wrapper text-right">
							<ol class="breadcrumbs">
								<li>
									<a href="dashboard">
										<i class="fas fa-home"></i>
									</a>
								</li>
								<li><span>Layouts</span></li>
								<li><span>Left Sidebar Big Icons</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
						</div>
					</header>