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
        $companies = (new companies())->getAllCompanies();
        $contacts = (new contacts())->getAllContacts();


        $data = [
            'title' => "Contacts",
            'company' => $companies,
            'contacts' => $contacts
        ];
        var_dump($data);
        return $this->view('dashboardContact', $data);
    }

    public function addContact($name, $phone, $companyId, $email)
    {
        (new contacts)->createContact($name, $phone, $companyId, $email);
    }
}