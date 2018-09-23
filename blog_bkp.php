<?php
	$pageTitle = 'Blog - Curwin Business Center';
	include('includes/header.php');
	include_once('admin/config/defaults.php');
	include_once('admin/config/api_caller.php');
	include_once('admin/controllers/Posts.cls.php');

	$post_list 	= Posts::get_posts();
?>

<div role="main" class="main">

				<section class="page-header">
					<div class="container">
						<div class="row">
							<div class="col">
								<ul class="breadcrumb">
									<li><a href="#">Home</a></li>
									<li class="active">Blog</li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col">
								<h1>Large Image</h1>
							</div>
						</div>
					</div>
				</section>

				<div class="container">

					<div class="row">
						<div class="col-lg-9">
							<div id="postsContainer" class="blog-posts">

							</div>
						</div>

						<div id = "blog-left-aside" class="col-lg-3">
							
						</div>
					</div>
				</div>

			</div>

<script src="js/posts.js"></script>

<?php
	include('includes/footer.php');
?>