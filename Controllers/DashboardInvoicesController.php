<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\companies;
use App\Models\invoices;



class DashboardInvoicesController extends Controller
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
        return $this->view('dashboardInvoices', $data);

    }

    public function addInvoices($ref, $company, $dueDate)
    {
        (new invoices)->createInvoices($ref, $company, $dueDate);
    }
}