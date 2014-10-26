<?php

class BaseController extends Controller {

	protected $shared;

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	public function __construct()
    {

        $this->beforeFilter(function() {
            $meta = (object) array(
                'title' => ''
            );
            $meta = clone $meta;

        	$share = array(
        		'meta' => $meta
        	);

            $this->shared = $share;

            View::share('shared', $share);
        });
	}

	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

}
