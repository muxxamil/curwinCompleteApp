<?php

// $API_URL = 'localhost:3002';
$API_URL = '162.255.85.99:3001';
$IMAGE_PREFIX = 'http://www.curwinbusinesscentre.com/img/landing/';

$DEFINITION_PRIVILEGES = array(
	"Dashboard" => "CSD",
	"User" 		=> "CMU",
	"Blog" 		=> "CMB",
	"Calendar" 	=> "CMS"
);

$PAGES_LINK = array(
	"Dashboard" => "dashboard",
	"User" 		=> "usersList",
	"Blog" 		=> "postsList",
	"Calendar" 	=> "calendar",
	"Login"		=> "index"
);

error_reporting(0);

function hasAccess($page, $privArr) {
	global $DEFINITION_PRIVILEGES;
	return in_array($DEFINITION_PRIVILEGES[$page], $privArr);
}

function getAcessibleNav($privArr) {
	global $DEFINITION_PRIVILEGES, $PAGES_LINK;
	foreach ($DEFINITION_PRIVILEGES as $key => $value) {
		if(in_array($value, $privArr)) {
			return $PAGES_LINK[$key];
		}
	}
	return $PAGES_LINK['Login'];
}

?>
