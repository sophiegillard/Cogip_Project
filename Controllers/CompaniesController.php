<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\companies;

class CompaniesController extends Controller
{
    /*
    * return view
    */
    public function index()
    {
        $companies = new companies();
        $companies = $companies->getAllCompanies();
        $data = [
            'title' => "Companies",
            'companies' => $companies
        ];
        return $this->view('companies',$data);
    }
}