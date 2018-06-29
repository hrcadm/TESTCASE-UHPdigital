<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;

class AdminController extends Controller
{
	/**
	 *  List Visitors on frontend
	 *
	 * @return Collection
	 */
    public function index()
    {
    	$visitors = Visitor::all();

    	return view('home', compact('visitors'));
    }
	/**
	 * Show visitor details
	 *
	 * @param  int $id
	 * @return View
	 */
    public function show($id)
    {
    	$visitor = Visitor::findOrFail($id);

    	return view('show', compact('visitor'));
    }
}