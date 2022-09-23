<?php

namespace App\Controllers;

use App\Core\Controller;

class ShowContactController extends Controller
{
    /*
    * return view
    */
    public function index()
    {
        return $this->view('showContact',["name" => "Cogip"]);
    }
}