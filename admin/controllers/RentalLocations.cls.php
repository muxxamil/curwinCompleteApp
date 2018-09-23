<?php

class RentalLocations
{	
	function get_rental_locations($params = []) 
	{
		global $API_URL;
		$response = CallAPI('GET', 'rentalLocations', '', $params);
		return $response;
	}

	function get_bookings($params) 
	{
		global $API_URL;
		$response = CallAPI('GET', 'rentalLocations', "$params[id]/bookings", $params);
		return $response;
	}

	function get_future_bookings($params) 
	{
		global $API_URL;
		$response = CallAPI('GET', 'rentalLocations', "$params[id]/futureBookings", $params);
		return $response;
	}

	function get_past_bookings($params) 
	{
		global $API_URL;
		$response = CallAPI('GET', 'rentalLocations', "$params[id]/pastBookings", $params);
		return $response;
	}

	function book_location($params) 
	{
		global $API_URL;
		$response = CallAPI('POST', 'rentalLocations', "$params[rentalLocationId]/book", $params);
		return $response;
	}

	function get_booking_list($params) 
	{
		global $API_URL;
		$response = CallAPI('GET', 'locationBookings', "", $params);
		return $response;
	}
}

?>