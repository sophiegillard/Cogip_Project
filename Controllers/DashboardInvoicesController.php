<?php

namespace App\Controllers;

use App\Core\Controller;

class DashboardInvoicesController extends Controller
{
    /*
    * return view
    */
    public function index()
    {
        return $this->view('dashboard-invoices',["name" => "Cogip"]);
    }
}