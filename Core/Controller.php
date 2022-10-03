<?php

namespace App\Core;

class Controller
{
    /*
    * @var $view, $data
    * return view
    */
    public function view($view, $data = [])
    {
       new render($view, $data);
    }
}