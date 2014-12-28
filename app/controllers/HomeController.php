<?php

class HomeController extends BaseController {

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function showAbout()
	{
		return View::make('about');
    }

	public function showContact()
	{
		return View::make('contact');
	}

	public function showOther()
	{
		return View::make('other');
	}
}
