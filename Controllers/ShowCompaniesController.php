<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\companies;
use App\Models\invoices;

class ShowCompaniesController extends Controller
{
    /*
    * return view
    */
    public function index()
    {
        $companies = new companies();
        $invoices = new invoices();
        if (isset($_GET['id'])) {
            $id = filter_var($_GET['id'],FILTER_SANITIZE_NUMBER_INT);
            $company = $companies->getCompany($id);
            $invoice = $invoices->getInvoicesByCompany($id);
            $data = [
                'title' => 'ShowCompany',
                'companies' => $company,
                'invoices'=> $invoice
            ];
            var_dump($data);
            return $this->view('showCompanies', $data);
        } else{
            $data=0;
            return $this->view('error',$data);
        }

    }
}