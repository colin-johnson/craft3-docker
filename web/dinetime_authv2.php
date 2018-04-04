<?php

class dinetime_authv2 {

	protected $_dinetime_signature_version = "dinetime-sv2-hmac-sha1";
	protected $_access_key = '';
	protected $_secret_key = '';

	public function __construct($access_key, $secret_key) {
		$this->_access_key = $access_key;
		$this->_secret_key = $secret_key;
	}
	
	public function parse_params($str) {
		$arr = array();

		# split on outer delimiter
		$pairs = explode('&', $str);

		# loop through each pair
		foreach ($pairs as $i) {
			# split into name and value
			# and save flat on the main array
			$arr[] = explode('=', $i, 2);
		}
		
		sort($arr);

		return $arr;
	}
	
	public function encode_and_combine_params($params) {
		$output = "";
		
		$imploded = array();
		foreach($params as $p) {
			$temp = array();
			$temp[$p[0]] = $p[1];
			$imploded[] = http_build_query($temp); // this does the encoding
		}
		$output = implode("&", $imploded);
		return $output;
	}
	
	public function calculate_signature($uri, $verb, $timestamp, $payload) {
		
		// canonical uri
		$uri_path = parse_url($uri, PHP_URL_PATH);
		$canonical_uri = urlencode($uri_path);

		// sorted parameters
		$params_string = '';

		$uri_query = parse_url($uri, PHP_URL_QUERY);
		if($uri_query) {
			$params = $this->parse_params($uri_query);
			$params_string = $this->encode_and_combine_params($params);
		}

		if(!$payload) {
			$payload = "";
		}

		$canonical_request = strtoupper($verb) . '&' . $canonical_uri . '&' . $params_string . '&' . hash("sha256", $payload);

		$string_to_sign = "HMAC-SHA1&" . $timestamp . '&' . $this->_access_key . '&' . hash("sha256", $canonical_request);

		$signature = hash_hmac("sha1", $string_to_sign, $this->_secret_key);

		return $signature;
	}

	public function sign_curl_request($request, $verb = null, $timestamp = null) {

		if (null == $timestamp) {
			$timestamp = gmdate('c');
		}

		if (null == $verb) {
			$verb = "GET";
		}

		$uri = curl_getinfo($request, CURLINFO_EFFECTIVE_URL); 
		$payload = ""; // no way to get post body from curl_request ?
		$signature = $this->calculate_signature($uri, $verb, $timestamp, $payload);

		$auth = $this->_dinetime_signature_version . ' Algorithm=SHA256&Credentials=' . $this->_access_key . '&Signature=' . $signature;


		curl_setopt($request, CURLOPT_CUSTOMREQUEST, $verb);
		curl_setopt($request,
			CURLOPT_HTTPHEADER,
			array("Authorization: $auth",
				"x-dinetime-timestamp: $timestamp",
				"x-dinetime-signature-version: $this->_dinetime_signature_version"));

		return $signature;
	}
}

?>
