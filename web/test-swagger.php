<?php
class dinetime_request {
	public function __construct($verb, $siteUID ){

	}
}
	include "dinetime_authv2.php";
  include "SiteApi.php"

	$access_key = "5BC72728CE9F06B43EFD2001CF1AC79C";
	$secret_key = "ACE6CEE0AA1F35B875E6BFE1D82B80BBBB73BF2A1CFD974087AF189B4A40D6EC";
	$companyUID = "acf6dace-b158-11e4-bd1d-22000b510bd7";
	$siteUID = "d00a32aa-adeb-4725-8bac-0cf447755517";

	$a = new dinetime_authv2($access_key, $secret_key);

	//$verb = "GET";
	//$timestamp = "2015-01-01T12:00:00+00:00";
	//$request = curl_init("http://domain/method?param=2015-01-01T02:00:00.000-04:00");

	//$request = curl_init('http://test/asdf?q=one&x=two&four&b=five&param=2015-01-01T02:00:00.000-04:00');

	$verb = "GET";
	$timestamp = null;
	//$request = curl_init("http://54.243.114.193:5252/Company/" . "0b78f1e1-3445-11e4-a9c9-22000a7190df" . "/Sites/");

	// $request = curl_init("https://api.dinetime.com/site/" . $siteUID . "/visits");

	// $request = curl_init("https://api.dinetime.com/site/" . $siteUID);
	// $request = curl_init("https://api.dinetime.com/site/" . $siteUID . "/webahead/status?PartySize=2");

	$request = curl_init("https://api.dinetime.com/company/" . $companyUID  . "/sites/");

	// $request = curl_init("https://api.dinetime.com/company/" . $companyUID  . "/GuestBook");

	// $request = curl_init("78b4628a-76c8-456f-8234-278c7076be66")
	//availability?date=2016-05-20T00:00:00.000%2B00:00&size=4");

	//$request = curl_init("http://54.243.114.193:5252/Site/" . "86d59d7d-1cd5-11e4-a3b3-22000b060c92" . "/Tables/History?startTime=2015-01-29T08:00:10.479-00:00&endTime=2016-01-01");

	// $a->sign_curl_request($request, $verb, $timestamp);
  //
	// curl_setopt_array($request, array(
	// 	CURLOPT_RETURNTRANSFER => true,
	// 	CURLOPT_MAXREDIRS => 10,
	// 	CURLOPT_TIMEOUT => 30,
	// 	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1
	// ));
  //
	// if (($response = curl_exec($request)) === FALSE) {
  //
	// 	$err = curl_error($request);
	// 	print "Error: $err\n";
  //
	// } else {
	// 	print "Response: ";
	// 	print_r($response);
	// 	print "\n";
	// }
  //
	// exit;

	echo $_SERVER['REQUEST_METHOD']

?>
