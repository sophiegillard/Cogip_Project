<?php

namespace App\Controllers;

use App\Core\Controller;

class CompaniesController extends Controller
{
    /*
    * return view
    */
    public function index()
    {
        return $this->view('companies',["name" => "Cogip"]);
    }
}