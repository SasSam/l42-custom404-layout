<?php

class HomeController extends BaseController {

    protected $layout = 'layouts.master';

	public function index()
	{
        $this->shared["meta"]->title .=  'Home';

        $this->layout->content = View::make('main.index', array());
	}

	public function test()
	{
        $this->shared["meta"]->title .= 'Test';

        $this->layout->content = View::make('main.test', array());
	}

}
