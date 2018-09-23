<?php

	include_once('../../config/defaults.php');
	include_once('../../config/api_caller.php');
	include_once('../User.cls.php');

	$is_active = false;

	if(!empty($_POST['active']) && $_POST['active'] == 'on') {
		$is_active = true;
	}

	$_POST['active'] = $is_active;
	$response = CallAPI('POST', 'users', "", $_POST, true);
	echo json_encode($response);

?>