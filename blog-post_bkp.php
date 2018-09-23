<?php
	$pageTitle = 'Home - Curwin Business Center';
	include('includes/header.php');
?>
<input type="hidden" id="postId" value="<?php echo $_GET['id']?>">

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
								<h1>Blog Post</h1>
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

						<div class="col-lg-3">
							<aside class="sidebar">
							
								<form>
									<div class="input-group input-group-4">
										<input class="form-control" placeholder="Search..." name="s" id="s" type="text">
										<span class="input-group-append">
											<button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-search"></i></button>
										</span>
									</div>
								</form>
							
								<hr>
							
								<h4 class="heading-primary">Categories</h4>
								<ul class="nav nav-list flex-column mb-5">
									<li class="nav-item"><a class="nav-link" href="#">Design (2)</a></li>
									<li class="nav-item">
										<a class="nav-link active" href="#">Photos (4)</a>
										<ul>
											<li class="nav-item"><a class="nav-link" href="#">Animals</a></li>
											<li class="nav-item"><a class="nav-link active" href="#">Business</a></li>
											<li class="nav-item"><a class="nav-link" href="#">Sports</a></li>
											<li class="nav-item"><a class="nav-link" href="#">People</a></li>
										</ul>
									</li>
									<li class="nav-item"><a class="nav-link" href="#">Videos (3)</a></li>
									<li class="nav-item"><a class="nav-link" href="#">Lifestyle (2)</a></li>
									<li class="nav-item"><a class="nav-link" href="#">Technology (1)</a></li>
								</ul>
							
								<div class="tabs mb-5">
									<ul class="nav nav-tabs">
										<li class="nav-item active"><a class="nav-link" href="#popularPosts" data-toggle="tab"><i class="fas fa-star"></i> Popular</a></li>
										<li class="nav-item"><a class="nav-link" href="#recentPosts" data-toggle="tab">Recent</a></li>
									</ul>
									<div class="tab-content">
										<div class="tab-pane active" id="popularPosts">
											<ul class="simple-post-list">
												<li>
													<div class="post-image">
														<div class="img-thumbnail d-block">
															<a href="blog-post.php">
																<img src="img/blog/blog-thumb-1.jpg" alt="">
															</a>
														</div>
													</div>
													<div class="post-info">
														<a href="blog-post.php">Nullam Vitae Nibh Un Odiosters</a>
														<div class="post-meta">
															 Jan 10, 2017
														</div>
													</div>
												</li>
												<li>
													<div class="post-image">
														<div class="img-thumbnail d-block">
															<a href="blog-post.php">
																<img src="img/blog/blog-thumb-2.jpg" alt="">
															</a>
														</div>
													</div>
													<div class="post-info">
														<a href="blog-post.php">Vitae Nibh Un Odiosters</a>
														<div class="post-meta">
															 Jan 10, 2017
														</div>
													</div>
												</li>
												<li>
													<div class="post-image">
														<div class="img-thumbnail d-block">
															<a href="blog-post.php">
																<img src="img/blog/blog-thumb-3.jpg" alt="">
															</a>
														</div>
													</div>
													<div class="post-info">
														<a href="blog-post.php">Odiosters Nullam Vitae</a>
														<div class="post-meta">
															 Jan 10, 2017
														</div>
													</div>
												</li>
											</ul>
										</div>
										<div class="tab-pane" id="recentPosts">
											<ul class="simple-post-list">
												<li>
													<div class="post-image">
														<div class="img-thumbnail d-block">
															<a href="blog-post.php">
																<img src="img/blog/blog-thumb-2.jpg" alt="">
															</a>
														</div>
													</div>
													<div class="post-info">
														<a href="blog-post.php">Vitae Nibh Un Odiosters</a>
														<div class="post-meta">
															 Jan 10, 2017
														</div>
													</div>
												</li>
												<li>
													<div class="post-image">
														<div class="img-thumbnail d-block">
															<a href="blog-post.php">
																<img src="img/blog/blog-thumb-3.jpg" alt="">
															</a>
														</div>
													</div>
													<div class="post-info">
														<a href="blog-post.php">Odiosters Nullam Vitae</a>
														<div class="post-meta">
															 Jan 10, 2017
														</div>
													</div>
												</li>
												<li>
													<div class="post-image">
														<div class="img-thumbnail d-block">
															<a href="blog-post.php">
																<img src="img/blog/blog-thumb-1.jpg" alt="">
															</a>
														</div>
													</div>
													<div class="post-info">
														<a href="blog-post.php">Nullam Vitae Nibh Un Odiosters</a>
														<div class="post-meta">
															 Jan 10, 2017
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							
								<hr>
							
								<h4 class="heading-primary">About Us</h4>
								<p>Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Nulla nunc dui, tristique in semper vel. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. </p>
							
							</aside>
						</div>
					</div>

				</div>

			</div>
<div class="modal fade" id="addCommentModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog text-left" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Add Comment</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					
					<form id="add-comment-form" class="form-style-2" method="POST">
						<input type="hidden" class="form-control" value="" id="commentAgainstType" name="againstType">
						<input type="hidden" class="form-control" value="" id="commentAgainstId" name="againstId">
						<div id="addCommentSuccess" style="display: none" class="add-comment-form-success alert alert-success">
							<strong>Thank You!</strong> Your Comment has been added in Pending state, Once the Admin will approve, it will be shown on the site.
						</div>
						<div id="addCommentErr" style="display: none" class="add-comment-form-error alert alert-danger">
							<strong>Error!</strong> Please write your comment.
						</div>
						<div id="addCommentWrong" style="display: none" class="add-comment-form-error alert alert-danger">
							<strong>Oops!</strong> Something went wrong, Please try again.
						</div>
						<div class="form-group">
							<label for="message-text" class="form-control-label">Your Comment:</label>
							<textarea class="form-control" rows="7" id="commentText" name="commentText"></textarea>
						</div>
						<div class="form-row mt-2">
							<div class="col">
								<button class="btn btn-dark" type = "submit">Submit!</button>
							</div>
						</div>
					</form>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
<script src="js/singlePost.js"></script>
<script type="text/javascript">

		function addCommentModal(identifier) {
			var againstType = $(identifier).data('againsttype');
			var againstId = $(identifier).data('againstid');
		     $("#commentAgainstType").val( againstType );
		     $("#commentAgainstId").val( againstId );
		};
		
		$("#add-comment-form").bind('submit',(function(e) {
		    e.preventDefault();
		    $.ajax({
		        url: 'php/addComment.php',
		        type: "POST",
		        data:  new FormData(this),
		        contentType: false,
		        cache: false,
		        processData: false,
		        success: function(data) {
		        	data = JSON.parse(data);
		            if(data && data.status == 400) {
		            	$("#addCommentErr").show();
		            	$("#addCommentSuccess").hide();
		            	$("#addCommentWrong").hide();
		            } else if(data && data.status == 200) {
		            	$("#addCommentSuccess").show();
		            	$("#addCommentErr").hide();
		            	$("#addCommentWrong").hide();
		            } else {
		            	$("#addCommentWrong").show();
		            	$("#addCommentSuccess").hide();
		            	$("#addCommentErr").hide();
		            }
		        }
		    });
		}));
	</script>
<?php
	include('includes/footer.php');
?>