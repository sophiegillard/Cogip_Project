<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\companies;
use App\Models\contacts;

class DashboardCompaniesController extends Controller
{
    /*
    * return view
    */
    public function index()
    {
        $companies = new companies();
        $types = $companies->getAllTypeOfCompany();
        $data = [
            'title' => "Companies",
            'types' => $types
        ];
        return $this->view('dashboardCompanies', $data);
    }

    public function addCompany($name, $country, $tva, $type)
    {
        (new companies)->createCompany($name, $country, $tva, $type);
    }
}