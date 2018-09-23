<?php

	include_once('../admin/config/defaults.php');
	include_once('../admin/config/api_caller.php');
	include_once('../admin/controllers/Posts.cls.php');

	$_POST['comment'] = $_POST['commentText'];
	unset($_POST['commentText']);
	$response = Posts::add_comment($_POST);
	echo json_encode($response);
?>