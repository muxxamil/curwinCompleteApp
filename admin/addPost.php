<?php

	$pageTitle = "Blog";
	$activeNav = "Blog";
	$pageSpecificCSS = '<link rel="stylesheet" href="vendor/select2/css/select2.css" />
						<link rel="stylesheet" href="vendor/select2-bootstrap-theme/select2-bootstrap.min.css" />
						<link rel="stylesheet" href="vendor/dropzone/basic.css" />
						<link rel="stylesheet" href="vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
						<link rel="stylesheet" href="vendor/dropzone/dropzone.css" />';
	include('includes/header.php');
	include_once('config/defaults.php');
	include_once('config/api_caller.php');
	include_once('controllers/Posts.cls.php');

	$tags 	= Posts::get_tags();
	$tags  = $tags['body']->rows;
?>

	<div class="row">
							<div class="col">
								<section class="card">
									<header class="card-header">
										<div class="card-actions">
											<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
											<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
										</div>
						
										<h2 class="card-title">Add Post</h2>
									</header>
									<div class="card-body">
										<form id = "add-edit-post" class="add-edit-post form-horizontal form-bordered" action = "controllers/ajax/add_post.php" method="post">
											<input type="hidden" class="input-custom input-full" name="base64Image" id="base64Image">
											<div id="add-edit-post-error" class="alert alert-danger d-none">
												<ul class="mb-0">
													<li>Unable to Add Post.</li>
												</ul>
											</div>
											<div id="add-edit-post-success" class="alert alert-success d-none">
												Post has been Added Successfully.
											</div>

												<div class="row input-group image-preview">
													<label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Image: </label>
													<div class="col-lg-6">
										                <input type="text" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
										                <span class="input-group-btn">
										                    <!-- image-preview-clear button -->
										                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
										                        <span class="glyphicon glyphicon-remove"></span> Clear
										                    </button>
										                    <!-- image-preview-input -->
										                    <div class="btn btn-default image-preview-input">
										                        <span class="glyphicon glyphicon-folder-open"></span>
										                        <span class="image-preview-input-title">Browse</span>
										                        <input type="file" accept="image/png, image/jpeg, image/gif" name="uploaded_image" id="uploaded_image"/> <!-- rename it -->
										                    </div>
										                </span>
										            </div>
									            </div>												

												<div class="form-group row">
													<label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Title: </label>
													<div class="col-lg-6">
														<input type="text" name = "title" class="form-control" id="title" value="" required>
													</div>
												</div>

												<div class="form-group row">
													<label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Pre Description: </label>
													<div class="col-lg-6">
														<textarea name = 'preDetail' class="form-control" id="preDetail" rows = '8'></textarea>
													</div>
												</div>

												<div class="form-group row">
													<label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Video URL: </label>
													<div class="col-lg-6">
														<input type="text" name = "videoUrl" class="form-control" id="videoUrl" value="">
													</div>
												</div>

												<div class="form-group row">
													<label class="col-lg-3 control-label text-lg-right pt-2" for="inputDefault">Post Description: </label>
													<div class="col-lg-6">
														<textarea name = 'postDetail' class="form-control" id="postDetail" rows = '8'></textarea>
													</div>
												</div>

												<div class="form-group row">
													<label class="col-lg-3 control-label text-lg-right pt-2">Tags</label>
													<div class="col-lg-6">
														<select multiple data-plugin-selectTwo name = "tagIds" class="form-control populate" required>
<?php
															foreach ($tags as $key => $value) {
?>
																<option value="<?php echo $value->id;?>"><?php echo $value->title; ?></option>
<?php
															}
?>
														</select>
													</div>
												</div>

												<!-- <div class="form-group row">
													<label class="col-lg-3 control-label text-lg-right pt-2 col-lg-3">Active: </label>
													<div class="col-lg-9">
														<div class="switch switch-sm switch-success">
															<input type="checkbox" name="active" data-plugin-ios-switch="" style="display: none;">
														</div>
													</div>
												</div> -->

											<footer class="card-footer">
												<div class="row justify-content-end">
													<div class="col-sm-9">
														<button type="submit" class="btn btn-primary">Submit</button>
													</div>
												</div>
											</footer>
										</form>
									</div>
								</section>
							</div>
						</div>
				</section>
			</div>

<?php
	$pageSpecificJS = '<script src="vendor/ios7-switch/ios7-switch.js"></script>
					   <script src="vendor/jquery-validation/jquery.validate.js"></script>
					   <script src="vendor/select2/js/select2.js"></script>
					   <script src="vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
					   <script src="js/forms/add-post.js"></script>
					   <script src="js/examples/examples.validation.js"></script>
					   ';

	$pageSpecificPostJS = '<script src="js/examples/examples.advanced.form.js"></script>';
	include('includes/footer.php');
?>