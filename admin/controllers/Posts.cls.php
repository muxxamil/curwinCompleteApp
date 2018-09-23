<?php

class Posts
{	
	function get_posts($params = []) 
	{
		global $API_URL;
		$response = CallAPI('GET', 'blogPosts', '', $params);
		return $response;
	}

	function get_tags($params = []) 
	{
		global $API_URL;
		$response = CallAPI('GET', 'tags', '', $params);
		return $response;
	}

	function add_post($params) 
	{
		global $API_URL;
		$response = CallAPI('POST', 'blogPosts', '', $params);
		return $response;
	}

	function add_comment($params) 
	{
		global $API_URL;
		$response = CallAPI('POST', 'comments', '', $params);
		return $response;
	}
}

?>