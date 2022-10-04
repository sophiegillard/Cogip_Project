<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\contacts;

class DashboardCompaniesController extends Controller
{
    /*
    * return view
    */
    public function index()
    {   
        return $this->view('dashboardCompanies',["name" => "Cogip"]);
    }
}