<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsController extends Controller
{
	/**
	 * Return Welcome view
	 * @param  Request $request
	 * @return
	 */
	public function welcome()
	{
		return view('welcome');
	}

	/**
	 * Return dummy "aaa" view
	 * @param  Request $request
	 * @return
	 */
    public function aaa(Request $request)
    {

    }

    /**
	 * Return dummy "bbb" view
	 * @param  Request $request
	 * @return
	 */
    public function bbb(Request $request)
    {

    }

    /**
	 * Return dummy "ccc" view
	 * @param  Request $request
	 * @return
	 */
    public function ccc(Request $request)
    {

    }

    /**
	 * Return dummy "ddd" view
	 * @param  Request $request
	 * @return
	 */
    public function ddd(Request $request)
    {

    }

    /**
	 * Return dummy "eee" view
	 * @param  Request $request
	 * @return
	 */
    public function eee(Request $request)
    {

    }
}
