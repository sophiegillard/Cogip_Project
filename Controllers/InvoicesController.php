<?php

namespace App\Controllers;

use App\Core\Controller;

class InvoicesController extends Controller
{
    /*
    * return view
    */
    public function index()
    {
        return $this->view('invoices',["name" => "Cogip"]);
    }
}