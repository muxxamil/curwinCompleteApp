<?php
	$pageTitle = "Blog";
	$activeNav = "Blog";
	include('includes/header.php');

?>
					<!-- start: page -->
					<section class="content-with-menu content-with-menu-has-toolbar media-gallery">
						<div class="content-with-menu-container">
							<div class="inner-menu-toggle">
								<a href="#" class="inner-menu-expand" data-open="inner-menu">
									Show Bar <i class="fas fa-chevron-right"></i>
								</a>
							</div>

							<div class="inner-body mg-main">
							
								<div class="inner-toolbar clearfix">
									<ul>
										<li>
											<a href="#" id="mgSelectAll"><i class="fas fa-check-square mr-1"></i> <span data-all-text="Select All" data-none-text="Select None">Select All</span></a>
										</li>
										<li>
											<a class="modal-sizes" href="#deletePostModal">Delete</a>
										</li>
										<li class="right" data-sort-source data-sort-id="media-gallery">
											<ul class="nav nav-pills nav-pills-primary">
												<li class="nav-item">
													<label>Filter:</label>
												</li>
												<li class="nav-item active">
													<a class="nav-link" data-option-value="*" href="#all">All</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-option-value=".Document" href="#Document">Documents</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-option-value=".Image" href="#Image">Images</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-option-value=".Video" href="#Video">Videos</a>
												</li>
											</ul>
										</li>
									</ul>
								</div>
								<div id="postsContainer" class="row mg-files" data-sort-destination data-sort-id="media-gallery">
								</div>
							</div>
						</div>
					</section>
					<!-- end: page -->

					<div id="deletePostModal" class="modal-block modal-block-sm mfp-hide">
						<section class="card">
							<header class="card-header">
								<h2 class="card-title">Are you sure?</h2>
							</header>
							<div class="card-body">
								<div class="modal-wrapper">
									<div class="modal-text">
										<p class="mb-0">Are you sure that you want to delete this Post?</p>
									</div>
								</div>
							</div>
							<footer class="card-footer">
								<div class="row">
									<div class="col-md-12 text-right">
										<button id="deleteBlogPost" data-ids = "" onclick="deleteBlogPost()" class="btn btn-primary modal-confirm">Confirm</button>
										<button class="btn btn-default modal-dismiss">Cancel</button>
									</div>
								</div>
							</footer>
						</section>
						</div>
					</section>
			</div>

<?php
	$pageSpecificJS = '<script src="vendor/isotope/isotope.js"></script>
					   <script src="js/loadPostListing.js"></script>';

	$pageSpecificPostJS = '<script src="js/examples/examples.mediagallery.js"></script>
						   <script src="js/examples/examples.modals.js"></script>';
	include('includes/footer.php');
?>