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
	protected $geoData;
	protected $checkDevice;
	protected $ip;

	public function __construct()
	{
		$this->geoData = new GeoData;
		$this->checkDevice = new CheckDevice;
		$this->ip = $_SERVER['REMOTE_ADDR'];
	}

	/**
	 * Store Visitor Data
	 */
	public function setVisitorData()
    {
    	$visitorData = $this->geoData->geoService($this->ip);

    	$start = \Session::get('start');

		$visitor = Visitor::where('ip', $this->ip)->first();

		if(!$visitor)
		{
			$visitor = new Visitor();

			$visitor->ip = $this->ip;
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
		}

		$visitor->last_visit = \Carbon\Carbon::now();
    	$visitor->visits++;
		$visitor->save();

		return true;
    }
}