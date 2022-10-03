<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\contacts;

class DashboardInvoicesController extends Controller
{
    /*
    * return view
    */
    public function index()
    {   
        return $this->view('dashboardInvoices',["name" => "Cogip"]);
    }
}