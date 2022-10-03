<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\companies;

class ShowCompaniesController extends Controller
{
    /*
    * return view
    */
    public function index()
    {
        $companies = new companies();
        $company = $companies->getCompany($_GET['id']);
        $data = [
            'title' => $company[0]->name,
            'companies' => $company
        ];
        var_dump($data);
        return $this->view('showCompanies', $data);
    }
}