<?php

namespace App\Geo;

class GeoData
{
	/**
	 *  Get data from Geoservice
	 *
	 * @param  string $ip
	 * @return var $api_result
	 */
	public function geoService($ip)
    {
    	// set IP address and API access key
		$access_key = ENV('GEOLOCATION_API_KEY');

		// Initialize CURL:
		$ch = curl_init('http://api.ipstack.com/'.$ip.'?access_key='.$access_key.'');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		// Store the data:
		$json = curl_exec($ch);
		curl_close($ch);

		// Decode JSON response:
		$api_result = json_decode($json, true);

		return $api_result;
    }
}