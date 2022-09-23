<?php

namespace App\Controllers;

use App\Core\Controller;

class DashboardController extends Controller
{
    /*
    * return view
    */
    public function index()
    {
        return $this->view('dashboard',["name" => "Cogip"]);
    }
}