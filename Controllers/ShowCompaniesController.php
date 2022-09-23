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
        // $home = new home();
        // $companies = $home->getCompanies();
        // $data = [
        //     'companies' => $companies
        // ];
        return $this->view('showCompanies',["name" => "Cogip"]);
    }
}