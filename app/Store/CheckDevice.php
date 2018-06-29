<?php

namespace App\Store;

use Browser;

class CheckDevice
{
	 /**
     * Check from which device the visitor is coming
     *
     * @return var $device
     */
    public function check()
    {
    	switch (Browser::detect()) {
    		case Browser::isDesktop():
    			$device = 'PC';
    			break;

    		case Browser::isMobile():
    			$device = 'Mobile';
    			break;

    		case Browser::isTablet():
    			$device = 'Tablet';
    			break;

    		default:
    			$device = 'Unknown';
    			break;
    	}

    	return $device;
    }
}