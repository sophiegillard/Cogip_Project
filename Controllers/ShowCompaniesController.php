<?php

namespace App\Controllers;

use App\Core\Controller;

class ShowCompaniesController extends Controller
{
    /*
    * return view
    */
    public function index()
    {
        return $this->view('showCompanies',["name" => "Cogip"]);
    }
}