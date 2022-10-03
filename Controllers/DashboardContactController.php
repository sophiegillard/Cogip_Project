<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\contacts;

class DashboardContactController extends Controller
{
    /*
    * return view
    */
    public function index()
    {   
        return $this->view('dashboardContact',["name" => "Cogip"]);
    }
}