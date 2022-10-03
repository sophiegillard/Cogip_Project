<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\contacts;

class ShowContactController extends Controller
{
    /*
    * return view
    */
    public function index()
    {
        if (isset($_GET['id'])) {
            $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
            $contacts = new contacts();
            $contact = $contacts->getContact($id);
            $data = [
                'title' => 'Contact',
                'companies' => $contact
            ];
            var_dump($data);

            return $this->view('showContact', $data);
        } else {
            $data = "";
            return $this->view('error', $data);
        }

    }
}