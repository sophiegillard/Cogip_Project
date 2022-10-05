<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\companies;
use App\Models\contacts;

class DashboardContactController extends Controller
{
    /*
    * return view
    */
    public function index()
    {
        $companies = new companies();
        $company = $companies->getAllCompanies();

        $data = [
            'title' => "Contacts",
            'company' => $company
        ];
        return $this->view('dashboardContact', $data);
    }

    public function addContact($name, $phone, $companyId, $email)
    {
        (new contacts)->createContact($name, $phone, $companyId, $email);
    }
}