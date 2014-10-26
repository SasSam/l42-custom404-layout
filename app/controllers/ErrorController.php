<?php

class ErrorController extends BaseController {

    protected $layout = 'layouts.master';

    public function missing()
    {
        $this->shared["meta"]->title .=  '404';

        $this->layout->content = View::make('errors.missing', array());
    }

}
