<?php
class accounts
{	
	/*****************************Contracts*************************************/
	function add_contract($parameters_add_contract) 
	{
		global $API_KEY,$model_api_caller_file,$URL_PATH_API_PF;
		include_once($model_api_caller_file);
		$api = new ApiHandler( array('key'=> $API_KEY, 'api_url'=>$URL_PATH_API_PF,'rest'=>true));
		$request_array = array();
		$request_array['add_contract']['a'] = "add";
		$request_array['add_contract']['c'] = "contracts";
		$request_array['add_contract']['key'] = $API_KEY;
		$request_array['add_contract']['token'] = $_SESSION['api_token'];
		$request_array['add_contract']['parameters'] = $parameters_add_contract;
		//echo"<pre>"; print_r(json_encode($request_array)); echo "</pre>"; //exit();
		$response = $api->sendRequest($request_array);
		$response = $api->decodeResponse($response);
		//echo"<pre>"; print_r($response); echo "</pre>";
		return $response;
	}
	function edit_contract($parameters_edit_contract) 
	{
		global $API_KEY,$model_api_caller_file,$URL_PATH_API_PF;
		include_once($model_api_caller_file);
		$api = new ApiHandler( array('key'=> $API_KEY, 'api_url'=>$URL_PATH_API_PF,'rest'=>true));
		$request_array = array();
		$request_array['edit_contract']['a'] = "edit";
		$request_array['edit_contract']['c'] = "contracts";
		$request_array['edit_contract']['key'] = $API_KEY;
		$request_array['edit_contract']['token'] = $_SESSION['api_token'];
		$request_array['edit_contract']['parameters'] = $parameters_edit_contract;
		// echo"<pre>"; print_r(json_encode($request_array)); echo "</pre>"; exit();
		$response = $api->sendRequest($request_array);
		$response = $api->decodeResponse($response);
		//echo"<pre>"; print_r($response); echo "</pre>";
		return $response;
	}
	function get_contract_status($params_status)
	{
		global $API_KEY,$model_api_caller_file,$URL_PATH_API_PF;
		include_once($model_api_caller_file);
		$api = new ApiHandler( array('key'=> $API_KEY, 'api_url'=>$URL_PATH_API_PF,'rest'=>true));
		
		$request_array = array();
		$request_array['contracts_search']['a'] 	= "list";
		$request_array['contracts_search']['c'] 	= "contractstatus";
		$request_array['contracts_search']['key'] 	= $API_KEY;
		$request_array['contracts_search']['token'] = $_SESSION['api_token'];

		$request_array['contracts_search']['parameters'] = $params_status;
		//echo"<pre>"; print_r(json_encode($request_array)); echo "</pre>"; 
		$response = $api->sendRequest($request_array);
		$response = $api->decodeResponse($response);
		//echo"<pre>"; print_r($response); echo "</pre>"; exit();
		return $response['response'];
	}
	function get_contract_stage($params_status)
	{
		global $API_KEY,$model_api_caller_file,$URL_PATH_API_PF;
		include_once($model_api_caller_file);
		$api = new ApiHandler( array('key'=> $API_KEY, 'api_url'=>$URL_PATH_API_PF,'rest'=>true));
		
		$request_array = array();
		$request_array['contracts_search']['a'] 	= "list";
		$request_array['contracts_search']['c'] 	= "contractstages";
		$request_array['contracts_search']['key'] 	= $API_KEY;
		$request_array['contracts_search']['token'] = $_SESSION['api_token'];

		$request_array['contracts_search']['parameters'] = $params_status;
		//echo"<pre>"; print_r(json_encode($request_array)); echo "</pre>"; 
		$response = $api->sendRequest($request_array);
		$response = $api->decodeResponse($response);
		//echo"<pre>"; print_r($response); echo "</pre>"; exit();
		return $response['response'];
	}
	/*****************************Contracts*************************************/
	/*****************************Payment*************************************/
	function add_payment($parameters_add_payments)
	{
		global $API_KEY,$model_api_caller_file,$URL_PATH_API_PF;
		include_once($model_api_caller_file);
		$api = new ApiHandler( array('key'=> $API_KEY, 'api_url'=>$URL_PATH_API_PF,'rest'=>true));
		$request_array = array();
		$request_array['add_payment']['a'] = "add";
		$request_array['add_payment']['c'] = "payments";
		$request_array['add_payment']['key'] = $API_KEY;
		$request_array['add_payment']['token'] = $_SESSION['api_token'];
		$request_array['add_payment']['parameters'] = $parameters_add_payments;
		//echo"<pre>"; print_r(json_encode($request_array)); echo "</pre>"; //exit();
		$response = $api->sendRequest($request_array);
		$response = $api->decodeResponse($response);
		//echo"<pre>"; print_r($response); echo "</pre>";
		return $response;
	}
	function get_payment_status($params_status)
	{
		global $API_KEY,$model_api_caller_file,$URL_PATH_API_PF;
		include_once($model_api_caller_file);
		$api = new ApiHandler( array('key'=> $API_KEY, 'api_url'=>$URL_PATH_API_PF,'rest'=>true));
		
		$request_array = array();
		$request_array['contracts_search']['a'] 	= "list";
		$request_array['contracts_search']['c'] 	= "paymentstatus";
		$request_array['contracts_search']['key'] 	= $API_KEY;
		$request_array['contracts_search']['token'] = $_SESSION['api_token'];

		$request_array['contracts_search']['parameters'] = $params_status;
		//echo"<pre>"; print_r(json_encode($request_array)); echo "</pre>"; 
		$response = $api->sendRequest($request_array);
		$response = $api->decodeResponse($response);
		//echo"<pre>"; print_r($response); echo "</pre>"; exit();
		return $response['response'];
	}
	function get_payment_type($params_type)
	{
		global $API_KEY,$model_api_caller_file,$URL_PATH_API_PF;
		include_once($model_api_caller_file);
		$api = new ApiHandler( array('key'=> $API_KEY, 'api_url'=>$URL_PATH_API_PF,'rest'=>true));
		
		$request_array = array();
		$request_array['contracts_search']['a'] 	= "list";
		$request_array['contracts_search']['c'] 	= "paymenttypes";
		$request_array['contracts_search']['key'] 	= $API_KEY;
		$request_array['contracts_search']['token'] = $_SESSION['api_token'];

		$request_array['contracts_search']['parameters'] = $params_type;
		//echo"<pre>"; print_r(json_encode($request_array)); echo "</pre>"; 
		$response = $api->sendRequest($request_array);
		$response = $api->decodeResponse($response);
		//echo"<pre>"; print_r($response); echo "</pre>"; exit();
		return $response['response'];
	}
	function add_payment_distribution($parameters_add_payments_distribution)
	{
		global $API_KEY,$model_api_caller_file,$URL_PATH_API_PF;
		include_once($model_api_caller_file);
		$api = new ApiHandler( array('key'=> $API_KEY, 'api_url'=>$URL_PATH_API_PF,'rest'=>true));
		$request_array = array();
		$request_array['add_payment_distribution']['a'] = "add";
		$request_array['add_payment_distribution']['c'] = "paymentsdistribution";
		$request_array['add_payment_distribution']['key'] = $API_KEY;
		$request_array['add_payment_distribution']['token'] = $_SESSION['api_token'];
		$request_array['add_payment_distribution']['parameters']['bulk_payment'] = $parameters_add_payments_distribution;
		// echo"<pre>"; print_r(json_encode($request_array)); echo "</pre>"; exit();
		$response = $api->sendRequest($request_array);
		$response = $api->decodeResponse($response);
		return $response;
	}
	/*****************************Payment*************************************/

	function contracts_search($params)
	{
		global $API_KEY,$model_api_caller_file,$URL_PATH_API_PF;
		include_once($model_api_caller_file);
		$api = new ApiHandler( array('key'=> $API_KEY, 'api_url'=>$URL_PATH_API_PF,'rest'=>true));
		
		$request_array = array();
		$request_array['contracts_search']['a'] 	= "list";
		$request_array['contracts_search']['c'] 	= "contracts";
		$request_array['contracts_search']['key'] 	= $API_KEY;
		$request_array['contracts_search']['token'] = $_SESSION['api_token'];

		$request_array['contracts_search']['parameters'] = $params;
		//echo"<pre>"; print_r(json_encode($request_array)); echo "</pre>"; 
		$response = $api->sendRequest($request_array);
		$response = $api->decodeResponse($response);
		//echo"<pre>"; print_r($response); echo "</pre>"; exit();
		return $response['response'];
	}
	function add_paymentsdistribution($params)
	{
		global $API_KEY,$model_api_caller_file,$URL_PATH_API_PF;
		include_once($model_api_caller_file);
		$api = new ApiHandler( array('key'=> $API_KEY, 'api_url'=>$URL_PATH_API_PF,'rest'=>true));
		
		$request_array = array();
		$request_array['add_paymentsdistribution']['a'] 	= "add";
		$request_array['add_paymentsdistribution']['c'] 	= "paymentsdistribution";
		$request_array['add_paymentsdistribution']['key'] 	= $API_KEY;
		$request_array['add_paymentsdistribution']['token'] = $_SESSION['api_token'];

		$request_array['add_paymentsdistribution']['parameters']['bulk_payment'] = $params;
		//echo"<pre>"; print_r(json_encode($request_array)); echo "</pre>"; 
		$response = $api->sendRequest($request_array);
		$response = $api->decodeResponse($response);
		//echo"<pre>"; print_r($response); echo "</pre>"; //exit();
		return $response['response'];
	}

	function payments_search($params)
	{
		global $API_KEY,$model_api_caller_file,$URL_PATH_API_PF;
		include_once($model_api_caller_file);
		$api = new ApiHandler( array('key'=> $API_KEY, 'api_url'=>$URL_PATH_API_PF,'rest'=>true));
		
		$request_array = array();
		$request_array['search_payments']['a'] 	= "search";
		$request_array['search_payments']['c'] 	= "payments";
		$request_array['search_payments']['key'] 	= $API_KEY;
		$request_array['search_payments']['token'] = $_SESSION['api_token'];

		$request_array['search_payments']['parameters'] = $params;
		//echo"<pre>"; print_r(json_encode($request_array)); echo "</pre>"; 
		$response = $api->sendRequest($request_array);
		$response = $api->decodeResponse($response);
		
		return $response['response'];
	}

	function payments_list($params)
	{
		global $API_KEY,$model_api_caller_file,$URL_PATH_API_PF;
		include_once($model_api_caller_file);
		$api = new ApiHandler( array('key'=> $API_KEY, 'api_url'=>$URL_PATH_API_PF,'rest'=>true));
		
		$request_array = array();
		$request_array['search_payments']['a'] 	= "list";
		$request_array['search_payments']['c'] 	= "payments";
		$request_array['search_payments']['key'] = $API_KEY;
		$request_array['search_payments']['token'] = $_SESSION['api_token'];

		$request_array['search_payments']['parameters'] = $params;
		//echo"<pre>"; print_r(json_encode($request_array)); echo "</pre>"; 
		$response = $api->sendRequest($request_array);
		$response = $api->decodeResponse($response);
		
		return $response['response']['response'];
	}

	function get_payment_types($params){
		global $API_KEY,$model_api_caller_file,$URL_PATH_API_PF;
		include_once($model_api_caller_file);
		$api = new ApiHandler( array('key'=> $API_KEY, 'api_url'=>$URL_PATH_API_PF,'rest'=>true));
		
		$request_array = array();
		$request_array['contract_status']['a'] 	= "list";
		$request_array['contract_status']['c'] 	= "paymenttypes";
		$request_array['contract_status']['key'] 	= $API_KEY;
		$request_array['contract_status']['token'] = $_SESSION['api_token'];

		$request_array['contract_status']['parameters'] = $params;
		
		$response = $api->sendRequest($request_array);
		$response = $api->decodeResponse($response);
		
		return $response['response'];
	}

	function search_contracts($params)
	{
		global $API_KEY,$model_api_caller_file,$URL_PATH_API_PF;
		include_once($model_api_caller_file);
		$api = new ApiHandler( array('key'=> $API_KEY, 'api_url'=>$URL_PATH_API_PF,'rest'=>true));
		
		$request_array = array();
		$request_array['contracts_search']['a'] 	= "search";
		$request_array['contracts_search']['c'] 	= "contracts";
		$request_array['contracts_search']['key'] 	= $API_KEY;
		$request_array['contracts_search']['token'] = $_SESSION['api_token'];

		$request_array['contracts_search']['parameters'] = $params;
		//echo"<pre>"; print_r(json_encode($request_array)); echo "</pre>"; 
		$response = $api->sendRequest($request_array);
		$response = $api->decodeResponse($response);
		//echo"<pre>"; print_r($response); echo "</pre>"; exit();
		return $response['response'];
	}
	function get_deleted_contract_listing($params)
	{
		global $API_KEY,$model_api_caller_file,$URL_PATH_API_PF;
		include_once($model_api_caller_file);
		$api = new ApiHandler( array('key'=> $API_KEY, 'api_url'=>$URL_PATH_API_PF,'rest'=>true));
		
		$request_array = array();
		$request_array['deleted_contract_listing']['a'] 	= "list";
		$request_array['deleted_contract_listing']['c'] 	= "contractlistings";
		$request_array['deleted_contract_listing']['key'] 	= $API_KEY;
		$request_array['deleted_contract_listing']['token'] = $_SESSION['api_token'];

		$request_array['deleted_contract_listing']['parameters'] = $params;
		//echo"<pre>"; print_r(json_encode($request_array)); echo "</pre>"; 
		$response = $api->sendRequest($request_array);
		$response = $api->decodeResponse($response);
		//echo"<pre>"; print_r($response); echo "</pre>"; exit();
		return $response['response'];
	}

	function adjust_payment_distribution($parameters_adjust_payments_distribution)
	{
		global $API_KEY,$model_api_caller_file,$URL_PATH_API_PF;
		include_once($model_api_caller_file);
		$api = new ApiHandler( array('key'=> $API_KEY, 'api_url'=>$URL_PATH_API_PF,'rest'=>true));
		$request_array = array();
		$request_array['adjust_payment_distribution']['a'] = "adjustments";
		$request_array['adjust_payment_distribution']['c'] = "paymentsdistribution";
		$request_array['adjust_payment_distribution']['key'] = $API_KEY;
		$request_array['adjust_payment_distribution']['token'] = $_SESSION['api_token'];
		$request_array['adjust_payment_distribution']['parameters'] = $parameters_adjust_payments_distribution;
		// echo"<pre>"; print_r(json_encode($request_array)); echo "</pre>"; exit();
		$response = $api->sendRequest($request_array);
		$response = $api->decodeResponse($response);
		return $response;
	}

	function edit_payments($parameters_edit_payments)
	{
		global $API_KEY,$model_api_caller_file,$URL_PATH_API_PF;
		include_once($model_api_caller_file);
		$api = new ApiHandler( array('key'=> $API_KEY, 'api_url'=>$URL_PATH_API_PF,'rest'=>true));
		$request_array = array();
		$request_array['edit_payments']['a'] = "edit";
		$request_array['edit_payments']['c'] = "payments";
		$request_array['edit_payments']['key'] = $API_KEY;
		$request_array['edit_payments']['token'] = $_SESSION['api_token'];
		$request_array['edit_payments']['parameters'] = $parameters_edit_payments;
		// echo"<pre>"; print_r(json_encode($request_array)); echo "</pre>"; exit();
		$response = $api->sendRequest($request_array);
		$response = $api->decodeResponse($response);
		return $response;
	}

	function edit_payments_distributions($parameters_edit_payment_dist)
	{
		global $API_KEY,$model_api_caller_file,$URL_PATH_API_PF;
		include_once($model_api_caller_file);
		$api = new ApiHandler( array('key'=> $API_KEY, 'api_url'=>$URL_PATH_API_PF,'rest'=>true));
		$request_array = array();
		$request_array['edit_payments']['a'] = "edit";
		$request_array['edit_payments']['c'] = "paymentsdistribution";
		$request_array['edit_payments']['key'] = $API_KEY;
		$request_array['edit_payments']['token'] = $_SESSION['api_token'];
		$request_array['edit_payments']['parameters'] = $parameters_edit_payment_dist;
		// echo"<pre>"; print_r(json_encode($request_array)); echo "</pre>"; exit();
		$response = $api->sendRequest($request_array);
		$response = $api->decodeResponse($response);
		return $response;
	}

	function edit_SINGLE_payments_distributions($parameters_edit_payment_dist)
	{
		global $API_KEY,$model_api_caller_file,$URL_PATH_API_PF;
		include_once($model_api_caller_file);
		$api = new ApiHandler( array('key'=> $API_KEY, 'api_url'=>$URL_PATH_API_PF,'rest'=>true));
		$request_array = array();
		$request_array['edit_payments']['a'] = "edit";
		$request_array['edit_payments']['c'] = "paymentsdistribution";
		$request_array['edit_payments']['key'] = $API_KEY;
		$request_array['edit_payments']['token'] = $_SESSION['api_token'];
		$request_array['edit_payments']['parameters'] = $parameters_edit_payment_dist;
		// echo"<pre>"; print_r(json_encode($request_array)); echo "</pre>"; exit();
		$response = $api->sendRequest($request_array);
		$response = $api->decodeResponse($response);
		return $response;
	}

	function get_payment_distribution($parameters_get_payments_distribution)
	{
		global $API_KEY,$model_api_caller_file,$URL_PATH_API_PF;
		include_once($model_api_caller_file);
		$api = new ApiHandler( array('key'=> $API_KEY, 'api_url'=>$URL_PATH_API_PF,'rest'=>true));
		$request_array = array();
		$request_array['get_payment_distribution']['a'] = "list";
		$request_array['get_payment_distribution']['c'] = "paymentsdistribution";
		$request_array['get_payment_distribution']['key'] = $API_KEY;
		$request_array['get_payment_distribution']['token'] = $_SESSION['api_token'];
		$request_array['get_payment_distribution']['parameters'] = $parameters_get_payments_distribution;
		// echo"<pre>"; print_r(json_encode($request_array)); echo "</pre>"; exit();
		$response = $api->sendRequest($request_array);
		$response = $api->decodeResponse($response);
		return $response;
	}

	function get_payment_info($parameters_get_payments)
	{
		global $API_KEY,$model_api_caller_file,$URL_PATH_API_PF;
		include_once($model_api_caller_file);
		$api = new ApiHandler( array('key'=> $API_KEY, 'api_url'=>$URL_PATH_API_PF,'rest'=>true));
		$request_array = array();
		$request_array['get_payment_distribution']['a'] = "search";
		$request_array['get_payment_distribution']['c'] = "payments";
		$request_array['get_payment_distribution']['key'] = $API_KEY;
		$request_array['get_payment_distribution']['token'] = $_SESSION['api_token'];
		$request_array['get_payment_distribution']['parameters'] = $parameters_get_payments;
		// echo"<pre>"; print_r(json_encode($request_array)); echo "</pre>"; exit();
		$response = $api->sendRequest($request_array);
		$response = $api->decodeResponse($response);
		return $response;
	}
	/**********Check Lead Against Project********/
	function check_lead_against_project($param)
	{
		global $API_KEY,$model_api_caller_file,$URL_PATH_API_PF;
		include_once($model_api_caller_file);
		$api = new ApiHandler( array('key'=> $API_KEY, 'api_url'=>$URL_PATH_API_PF,'rest'=>true));
		$request_array = array();
		$request_array['lead_against_project']['a'] = "list";
		$request_array['lead_against_project']['c'] = "internalinquiries";
		$request_array['lead_against_project']['key'] = $API_KEY;
		$request_array['lead_against_project']['token'] = $_SESSION['api_token'];
		$request_array['lead_against_project']['parameters'] = $param;
		// echo"<pre>"; print_r(json_encode($request_array)); echo "</pre>"; exit();
		$response = $api->sendRequest($request_array);
		$response = $api->decodeResponse($response);
		return $response;
	}
	/**********Check Lead Against Project********/
	
	/**********Check Lead Against Project********/
	function get_all_payment_modes($param)
	{
		global $API_KEY,$model_api_caller_file,$URL_PATH_API_PF,$cache_time;
		include_once($model_api_caller_file);
		$api = new ApiHandler( array('key'=> $API_KEY, 'api_url'=>$URL_PATH_API_PF,'rest'=>true));
		$request_array = array();
		$request_array['get_payment_mode']['a'] = "list";
		$request_array['get_payment_mode']['c'] = "paymentmode";
		$request_array['get_payment_mode']['key'] = $API_KEY;
		$request_array['get_payment_mode']['token'] = $_SESSION['api_token'];
		$request_array['get_payment_mode']['parameters'] = $parameters_get_payments;
		// echo"<pre>"; print_r(json_encode($request_array)); echo "</pre>"; exit();
		
		// $response = $api->sendRequest($request_array);
		// $response = $api->decodeResponse($response);

		$cache_file = "get_all_payment_modes";
		
		if(!ImzDataCache::has($cache_file,$cache_time)){
			$response = $api->sendRequest($request_array);
			$response = $api->decodeResponse($response);
			// pre($response);
			$data = $response;
			if(!empty($data))
				ImzDataCache::put($cache_file,$data);
		} else {
			$data = ImzDataCache::get($cache_file);
		}

		return $data;
	}
	/**********Check Lead Against Project********/	

	/**********Get All Contract Stages********/
	function get_all_contract_stages($param)
	{
		global $API_KEY,$model_api_caller_file,$URL_PATH_API_PF;
		include_once($model_api_caller_file);
		$api = new ApiHandler( array('key'=> $API_KEY, 'api_url'=>$URL_PATH_API_PF,'rest'=>true));
		$request_array = array();
		$request_array['get_contract_stages']['a'] = "list";
		$request_array['get_contract_stages']['c'] = "contractstages";
		$request_array['get_contract_stages']['key'] = $API_KEY;
		$request_array['get_contract_stages']['token'] = $_SESSION['api_token'];
		$request_array['get_contract_stages']['parameters'] = $param;
		// echo"<pre>"; print_r(json_encode($request_array)); echo "</pre>"; exit();
		$response = $api->sendRequest($request_array);
		$response = $api->decodeResponse($response);
		return $response;
	}
	/**********Get All Contract Stages********/

	/**********Update Contract Listings********/
	function update_contract_listing($param)
	{
		global $API_KEY,$model_api_caller_file,$URL_PATH_API_PF;
		include_once($model_api_caller_file);
		$api = new ApiHandler( array('key'=> $API_KEY, 'api_url'=>$URL_PATH_API_PF,'rest'=>true));
		$request_array = array();
		$request_array['update_contract_listing']['a'] = "edit";
		$request_array['update_contract_listing']['c'] = "contractlistings";
		$request_array['update_contract_listing']['key'] = $API_KEY;
		$request_array['update_contract_listing']['token'] = $_SESSION['api_token'];
		$request_array['update_contract_listing']['parameters'] = $param;
		// echo"<pre>"; print_r(json_encode($request_array)); echo "</pre>"; exit();
		$response = $api->sendRequest($request_array);
		$response = $api->decodeResponse($response);
		return $response;
	}
	/**********Update Contract Listings********/

	/**********Update Listings********/
	function update_listings($param)
	{
		global $API_KEY,$model_api_caller_file,$URL_PATH_API_PF;
		include_once($model_api_caller_file);
		$api = new ApiHandler( array('key'=> $API_KEY, 'api_url'=>$URL_PATH_API_PF,'rest'=>true));
		$request_array = array();
		$request_array['update_listing']['a'] = "edit";
		$request_array['update_listing']['c'] = "listings";
		$request_array['update_listing']['key'] = $API_KEY;
		$request_array['update_listing']['token'] = $_SESSION['api_token'];
		$request_array['update_listing']['parameters'] = $param;
		// echo"<pre>"; print_r(json_encode($request_array)); echo "</pre>"; exit();
		$response = $api->sendRequest($request_array);
		$response = $api->decodeResponse($response);
		return $response;
	}
	/**********Update Contract Listings********/
}
?>
