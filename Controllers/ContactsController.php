<?php

namespace App\Controllers;

use App\Core\Controller;

class ContactsController extends Controller
{
    /*
    * return view
    */
    public function index()
    {
        return $this->view('contacts',["name" => "Cogip"]);
    }
}