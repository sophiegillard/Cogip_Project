<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\home;

class HomeController extends Controller
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
        $data = [
            "name" => "Cogip",
            "invoices" => $invoices,
            "companies" => $companies,
            "contacts" => $contacts
        ];
        echo '<pre>';
        var_dump($data['contacts']);
        echo '</pre>';
        return $this->view('home', $data);
    }

}