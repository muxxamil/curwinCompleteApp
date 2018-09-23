<?php

include_once('../../config/defaults.php');
include_once('../../config/api_caller.php');
include_once('../Posts.cls.php');

if(!empty($_POST['base64Image'])) {
	list($uploadedFileName, $imageUploadingSuccess) = uploadBase64Image($_POST['base64Image']);
	if($imageUploadingSuccess === false) {
		echo json_encode(array("status" => 400, "body" => array("error" => array("Image Uploading Failed."))));
		die();
	}
	$_POST['uploadedImageName'] = $uploadedFileName;
	unset($_POST['base64Image']);
}

if(!empty($_POST['videoUrl'])) {
	$matches = array();
	preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $_POST['videoUrl'], $matches);
	$_POST['videoUrl'] = "https://www.youtube.com/embed/";
	$videoSuccess = false;

	if(!empty($matches) && !empty($matches[1])) {
		$videoSuccess = true;
		if(strlen($matches[1]) == 11)
		{
			$_POST['videoUrl'] .= $matches[1];
		} else {
			$_POST['videoUrl'] .= substr($matches[1] ,0 ,10);		
		}
	}
}

echo json_encode(Posts::add_post($_POST));

function uploadBase64Image($base64Str) {
	if (preg_match('/^data:image\/(\w+);base64,/', $base64Str, $type)) {
	    $base64Str = substr($base64Str, strpos($base64Str, ',') + 1);
	    $type = strtolower($type[1]); // jpg, png, gif

	    if (!in_array($type, [ 'jpg', 'jpeg', 'gif', 'png' ])) {
			echo json_encode(array("status" => 400, "body" => array("error" => array("This type of image is not allowed."))));
	        die();
	    }

	    $base64Str = base64_decode($base64Str);

	    if ($base64Str === false) {
			echo json_encode(array("status" => 400, "body" => array("error" => array("File uploading failed."))));
	        die();
	    }

	    // Check file size
		if (strlen($base64Str) > 20000000) {
			echo json_encode(array("status" => 400, "body" => array("error" => array("File is too large."))));
			die();
		}

	} else {
		echo json_encode(array("status" => 400, "body" => array("error" => array("File is not an image."))));
	    die();
	}

	$uploadedFileName = uniqid() . "." . $type;
	return array($uploadedFileName, file_put_contents("../../../img/blog/" . $uploadedFileName, $base64Str));
}

?>