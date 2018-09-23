<?php
	$pageTitle = "User";
	$activeNav = "User";
	$pageSpecificCSS = '<link rel="stylesheet" href="vendor/select2/css/select2.css" />
					<link rel="stylesheet" href="vendor/select2-bootstrap-theme/select2-bootstrap.min.css" />
					<link rel="stylesheet" href="vendor/datatables/media/css/dataTables.bootstrap4.css" />';
	include('includes/header.php');
	include_once('config/defaults.php');
	include_once('config/api_caller.php');
	include_once('controllers/Users.cls.php');

	$user_list 	= Users::get_users();

?>
					<!-- start: page -->
						<div class="row">
							<div class="col">
								<section class="card">
									<header class="card-header">
										<div class="card-actions">
											<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
											<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
										</div>
						
										<h2 class="card-title">Users List</h2>
									</header>
									<div class="card-body">
										<table class="table table-bordered table-striped mb-0" id="datatable-tabletools">
											<thead>
												<tr>
													<th>ID</th>
													<th>Name</th>
													<th>Email</th>
													<th>Designation</th>
													<th>Actions</th>
												</tr>
											</thead>
											<tbody>
<?php

											foreach ($user_list['body']->rows as $key => $value) {
?>
												<tr>
													<td><?php echo $value->id; ?></td>
													<td><?php echo $value->name; ?></td>
													<td><?php echo $value->email; ?></td>
													<td><?php echo $value->UserDesignation->title; ?></td>
													<td class="actions">
														<a href="user.php?id=<?php echo $value->id; ?>" target = "blank" class="on-default"><i class="fas fa-pencil-alt"></i></a>
														<a href="#" class="on-default"><i class="far fa-trash-alt"></i></a>
													</td>
												</tr>
<?php
											}

?>
												
											</tbody>
										</table>
									</div>
								</section>
							</div>
						</div>
					<!-- end: page -->
				</section>
			</div>

<?php
	$pageSpecificJS = '<script src="vendor/select2/js/select2.js"></script>
		<script src="vendor/datatables/media/js/jquery.dataTables.min.js"></script>
		<script src="vendor/datatables/media/js/dataTables.bootstrap4.min.js"></script>
		<script src="vendor/datatables/extras/TableTools/Buttons-1.4.2/js/dataTables.buttons.min.js"></script>
		<script src="vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.bootstrap4.min.js"></script>
		<script src="vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.html5.min.js"></script>
		<script src="vendor/datatables/extras/TableTools/Buttons-1.4.2/js/buttons.print.min.js"></script>
		<script src="vendor/datatables/extras/TableTools/JSZip-2.5.0/jszip.min.js"></script>
		<script src="vendor/datatables/extras/TableTools/pdfmake-0.1.32/pdfmake.min.js"></script>
		<script src="vendor/datatables/extras/TableTools/pdfmake-0.1.32/vfs_fonts.js"></script>
		<script src="js/examples/examples.datatables.tabletools.js"></script>';
	include('includes/footer.php');
?>