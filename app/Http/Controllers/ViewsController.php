<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsController extends Controller
{
	/**
	 * Return Welcome view
	 * @param  Request $request
	 * @return View
	 */
	public function welcome(Request $request)
	{
		return view('welcome');
	}
}
