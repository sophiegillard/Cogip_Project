<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\invoices;

class InvoicesController extends Controller
{
    /*
    * return view
    */
    public function index()
    {
        $invoices = new invoices();
        $invoice = $invoices->getAllInvoices();
        $data = [
            'title' => "Companies",
            'invoices' => $invoice
        ];
        return $this->view('invoices',$data);
    }
}