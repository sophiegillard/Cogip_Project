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
        $companies = (new companies())->getAllCompanies();
        $invoices = (new invoices())->getAllInvoices();

        $data = [
            'title' => "Contacts",
            'company' => $companies,
            'invoices' => $invoices
        ];

        return $this->view('dashboardInvoices', $data);

    }

    public function addInvoices($ref, $company, $dueDate)
    {
        (new invoices)->createInvoices($ref, $company, $dueDate);
    }
}