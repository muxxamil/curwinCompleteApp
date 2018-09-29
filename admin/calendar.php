<?php

	include_once('config/defaults.php');
	include_once('config/api_caller.php');
	include_once('controllers/RentalLocations.cls.php');

	$rental_locations = RentalLocations::get_rental_locations();

	$rental_locations = (!empty($rental_locations['body']) && !empty($rental_locations['body']->rows)) ? $rental_locations['body']->rows : [];

	$pageTitle = "Calendar";
	$activeNav = "Calendar";
	$pageSpecificCSS = '<link rel="stylesheet" href="vendor/jquery-ui/jquery-ui.css" />
		<link rel="stylesheet" href="vendor/jquery-ui/jquery-ui.theme.css" />
		<link rel="stylesheet" href="vendor/fullcalendar/fullcalendar.css" />
		<link rel="stylesheet" href="vendor/fullcalendar/fullcalendar.print.css" media="print" />
		<link rel="stylesheet" href="vendor/bootstrap-timepicker/css/bootstrap-timepicker.css" />';
	include('includes/header.php');


?>

					<div class="row" id="availableQuota">
						
					</div>

					<!-- start: page -->
					<section class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-lg-12">
									<div id="calendar" style="overflow: auto;"></div>
								</div>
							</div>
						</div>
					</section>

					<!-- end: page -->

					<div id="rentalLocationBookingModal" class="modal-block modal-block-lg mfp-hide">
						<section class="card">
							<header class="card-header">
								<h2 class="card-title"></h2>
							</header>
							<div class="card-body">
								<form class="booking-schedule-form" action = "controllers/ajax/book_location.php" method="post">
									<input type="hidden" name="bookingForDate" id="bookingForDate" value=""/>
									<div class="form-row">
										<div class="form-group col-md-12">
											<label for="inputState">Rental Location</label>
											<select id="officeLocationDropdown" name = "rentalLocationId" class="form-control" required>
												<option value="">Please choose Rental Location</option>
<?php
												foreach ($rental_locations as $key => $value) {
?>
													<option value="<?php echo $value->id; ?>"><?php echo $value->title; ?></option>
<?php											}
?>											</select>
										</div>
										<div id="bookedSlots" class="form-group col-md-6 mb-5">
											
										</div>
										<div id="staffedHours" class="form-group col-md-6 mb-5">
											
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col-md-6">
											<label for="inputState">Time From</label>
											<div class="input-group">
												<span class="input-group-prepend">
													<span class="input-group-text">
														<i class="far fa-clock"></i>
													</span>
												</span>
												<input type="text" name="timeFrom" data-plugin-timepicker class="form-control" data-plugin-options='{ "minuteStep": 1 }' required>
											</div>
										</div>
										<div class="form-group col-md-6">
											<label for="inputState">Time To</label>
											<div class="input-group">
												<span class="input-group-prepend">
													<span class="input-group-text">
														<i class="far fa-clock"></i>
													</span>
												</span>
												<input type="text" name="timeTo" data-plugin-timepicker class="form-control" data-plugin-options='{ "minuteStep": 1 }' required>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12 text-right">
											<button type="submit" class="btn btn-primary modal-confirm">Confirm</button>
										</div>
									</div>
								</form>
							</div>
						</section>
					</div>
				</section>
			</div>

<?php

$pageSpecificJS = '<script src="vendor/jquery-ui/jquery-ui.js"></script>
					<script src="vendor/jqueryui-touch-punch/jqueryui-touch-punch.js"></script>
					<script src="vendor/moment/moment.js"></script>
					<script src="vendor/moment/moment-timezone.js"></script>
					<script src="vendor/fullcalendar/fullcalendar.js"></script>
					<script src="vendor/jquery-validation/jquery.validate.js"></script>
					<script src="js/examples/examples.validation.js"></script>
					<script src="js/rentalLocationBooking.js"></script>
					<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.js"></script>';

$pageSpecificPostJS = '<script src="js/examples/examples.calendar.js"></script>';

include_once('includes/footer.php');

?>