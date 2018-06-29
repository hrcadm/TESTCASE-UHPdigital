<?php

namespace App\Store;

use App\Geo\GeoData;
use App\HandleSession;
use App\Models\Visitor;
use App\Store\CheckDevice;
use Browser;
use Illuminate\Contracts\Session\Session;

class StoreVisitor
{
	public function __construct(GeoData $geoData, CheckDevice $checkDevice)
	{
		$this->geoData = $geoData;
		$this->checkDevice = $checkDevice;
		$this->ip = $_SERVER['REMOTE_ADDR'];
	}

	/**
	 * Store Visitor Data
	 * @param var $data
	 */
	public function setVisitorData($data)
    {
    	$visitorData = $this->geoData->geoService('89.164.57.230');

    	$start = \Session::get('start');

		$visitor = Visitor::where('ip', $this->ip)->first();

		if(is_null($visitor))
		{
			$visitor = new Visitor();

	    	$visitor->ip = $data->server('REMOTE_ADDR');
	    	$visitor->browser = Browser::browserName();
	    	$visitor->os = Browser::platformName();
	    	$visitor->device = $this->checkDevice->check();
	    	$visitor->country = $visitorData['country_name'];
	    	$visitor->zipcode = $visitorData['zip'];
	    	$visitor->visits = 1;
	    	$visitor->city = $visitorData['city'];
	    	$visitor->is_bot = Browser::isBot();
	    	$visitor->session_start = $start;
	    	$visitor->last_visit = \Carbon\Carbon::now();
	    	$visitor->flag = $visitorData['location']['country_flag'];
	    	$visitor->lang = $visitorData['location']['languages'][0]['name'].' ['.strtoupper($visitorData['location']['languages'][0]['code']).']';

	    	$visitor->save();

			return true;
		}

		$visitor->session_start = $start;
		$visitor->last_visit = new \DateTime();
		$visitor->visits++;

		$visitor->save();

    	return false;
    }
}