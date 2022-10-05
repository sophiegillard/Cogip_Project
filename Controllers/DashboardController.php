<?php

namespace App\Controllers;

use App\Core\Controller;

use App\Models\companies;
use App\Models\contacts;
use App\Models\home;
use App\Models\invoices;


class DashboardController extends Controller
{
    /*
    * return view
    */
    public function index()
    {
        $home = new home();
        $invoices = $home->getInvoices();
        $companies = $home->getCompanies();
        $contacts = $home->getContacts();
        $number = array(
            "invoices"=> $this->getInvoicesNumber(),
            "companies"=> $this->getCompaniesNumber(),
            "contacts"=> $this->getContactsNumber()
        );

        $data = [
            "name" => "Dashboard",
            "invoices" => $invoices,
            "companies" => $companies,
            "contacts" => $contacts,
            "number" => $number
        ];


        return $this->view('dashboard', $data);
    }

    function getInvoicesNumber(): string
    {
        $invoices = new invoices();
        $data = $invoices->getAllInvoices();
        return strval(sizeof($data));
    }

    function getCompaniesNumber(): string
    {
        $companies = new companies();
        $data = $companies->getAllCompanies();
        return strval(sizeof($data));
    }
    function getContactsNumber(): string
    {
        $contacts = new contacts();
        $data = $contacts->getAllContacts();
        return strval(sizeof($data));
    }
}