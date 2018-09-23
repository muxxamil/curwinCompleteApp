<?php

	include_once('../../config/defaults.php');
	include_once('../../config/api_caller.php');
	include_once('../User.cls.php');

	if(empty($_POST['ids'])) {
		echo json_encode(['status' => 400]);
		return;
	}
	
	$_POST['ids'] = explode(",", $_POST['ids']);
	$response = CallAPI('DELETE', 'blogPosts', "", $_POST, true);
	echo json_encode($response);

?>