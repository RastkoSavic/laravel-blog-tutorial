<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function getHome()
	{
		return view('pages.home');
	}

	public function getAbout()
	{
		return view('pages.about');
	}

	public function getServices()
	{
		return view('pages.services');
	}
}
