<?php

	include_once('../admin/config/defaults.php');
	include_once('../admin/config/api_caller.php');
	include_once('../admin/controllers/Posts.cls.php');

	$post_tags 	= Posts::get_tags();
	$recent_posts 	= Posts::get_posts(["pageLimit" => 3, "page" => 0, "simpleResponse" => true]);
	$popular_posts 	= Posts::get_posts(["pageLimit" => 3, "page" => 0, "simpleResponse" => true]);

?>

<aside class="sidebar">
							
		<div class="input-group input-group-4">
			<input class="form-control" placeholder="Search..." id="searchStringTitle" type="text">
			<span class="input-group-append">
				<button onclick="return applyFilterOnResult('title', $('#searchStringTitle').val())" class="btn btn-primary btn-lg"><i class="fas fa-search"></i></button>
			</span>
		</div>
	<hr>

	<h4 class="heading-primary">Categories</h4>
	<ul class="nav nav-list flex-column mb-5">
<?php
		foreach ($post_tags['body']->rows as $key => $value) {
?>
			<li class="nav-item"><a class="nav-link" onclick="return applyFilterOnResult('tagIds', <?php echo $value->id; ?>)"><?php echo $value->title; ?></a></li>
<?php
		}
?>
	</ul>

	<div class="tabs mb-5">
		<ul class="nav nav-tabs">
			<li class="nav-item active"><a class="nav-link" href="#popularPosts" data-toggle="tab"><i class="fas fa-star"></i> Popular</a></li>
			<li class="nav-item"><a class="nav-link" href="#recentPosts" data-toggle="tab">Recent</a></li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="popularPosts">
				<ul class="simple-post-list">
<?php
					foreach ($popular_posts['body']->rows as $key => $value) {
?>
						<li>
							<div class="post-image">
								<div class="img-thumbnail d-block">
									<a href="blog-post.php">
										<img width="50px" height="50px" src="img/blog/<?php echo current($value->Attachments)->path; ?>" alt="">
									</a>
								</div>
							</div>
							<div class="post-info">
								<a href="blog-post.php"><?php echo substr($value->preDetail, 0, 20); ?> [...]</a>
								<div class="post-meta">
									 <?php echo date_format(date_create($value->createdAt), 'M d, Y'); ?>
								</div>
							</div>
						</li>
<?php
					}
?>
				</ul>
			</div>
			<div class="tab-pane" id="recentPosts">
				<ul class="simple-post-list">
<?php
					foreach ($recent_posts['body']->rows as $key => $value) {
?>
						<li>
							<div class="post-image">
								<div class="img-thumbnail d-block">
									<a href="blog-post.php">
										<img width="50px" height="50px" src="img/blog/<?php echo current($value->Attachments)->path; ?>" alt="">
									</a>
								</div>
							</div>
							<div class="post-info">
								<a href="blog-post.php"><?php echo substr($value->preDetail, 0, 20); ?> [...]</a>
								<div class="post-meta">
									 <?php echo date_format(date_create($value->createdAt), 'M d, Y'); ?>
								</div>
							</div>
						</li>
<?php
					}
?>
				</ul>
			</div>
		</div>
	</div>

	<hr>

	<h4 class="heading-primary">About Us</h4>
	<p>Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Nulla nunc dui, tristique in semper vel. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. </p>

</aside>