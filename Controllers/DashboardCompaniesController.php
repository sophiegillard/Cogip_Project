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
        $companies = (new companies())->getAllCompanies();
        $types = (new companies())->getAllTypeOfCompany();
        $data = [
            'title' => "Companies",
            'types' => $types,
            'companies' => $companies
        ];


        return $this->view('dashboardCompanies', $data);
    }

    public function addCompany($name, $country, $tva, $type)
    {
        (new companies)->createCompany($name, $country, $tva, $type);
    }

    public function deleteCompany($id)
    {
        (new companies)->deleteCompany($id);
    }

    public function updateCompany($name, $country, $tva, $type, $id)
    {
        (new companies())->updateCompany($name, $country, $tva, $type, $id);
    }
}