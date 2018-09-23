<?php
	include_once('../../config/defaults.php');
	include_once('../../config/api_caller.php');
	include_once('../RentalLocations.cls.php');

	$_POST['from'] 	= date_format(date_create($_POST['bookingForDate'] . " " . $_POST['timeFrom']), 'Y-m-d H:i:s');
	$_POST['to'] 	= date_format(date_create($_POST['bookingForDate'] . " " . $_POST['timeTo']), 'Y-m-d H:i:s');

	echo json_encode(RentalLocations::book_location($_POST));
?>