<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\contacts;

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