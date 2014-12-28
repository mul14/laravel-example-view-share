<?php

class BaseController extends Controller {

    public function __construct()
    {
        $menu = [
            'Home' => '/',
            'About' => '/about',
            'Contact' => '/contact',
            'Other' => '/other',
        ];
        
        View::share('menu', $menu);
    }

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

}
