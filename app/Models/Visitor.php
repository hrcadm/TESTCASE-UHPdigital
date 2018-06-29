<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    public $timestamps = false;

    protected $fillable = [ 'ip', 'os', 'device', 'browser', 'country', 'zipcode' ,'city', 'time_on_page', 'last_visit', 'is_bot', 'visits', 'session_start', 'session_end', 'flag', 'lang' ];

    public function location()
    {
    	return $this->zipcode.' '.$this->city.', '.$this->country;
    }

    public function last_visit()
    {
    	return \Carbon\Carbon::parse($this->last_visit)->diffForHumans();
    }
}