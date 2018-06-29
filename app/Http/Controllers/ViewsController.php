<?php

namespace App\Http\Controllers;

use App\Store\StoreVisitor;
use Illuminate\Http\Request;

class ViewsController extends Controller
{
	public function __construct(StoreVisitor $storeVisitor)
	{
		$this->storeVisitor = $storeVisitor;
	}

	/**
	 * Return Welcome view
	 * @param  Request $request
	 * @return View
	 */
	public function welcome(Request $request)
	{
		$data = $request;
		$this->storeVisitor->setVisitorData($data);

		return view('welcome');
	}
}
