<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\contacts;

class ContactsController extends Controller
{
    /*
    * return view
    */
    public function index()
    {
        $contacts = new contacts();
        $contact = $contacts->getAllContacts();
        $data = [
            'title' => "Contacts",
            'contact' => $contact
        ];
        return $this->view('contacts', $data);
    }
}