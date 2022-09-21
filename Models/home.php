<?php

namespace App\Models;

use App\Database\dbConnection;
use PDO;

class home
{
    function getInvoices(): bool|array
    {
        $db = (new dbConnection())->connexion();
        $query = $db->prepare('SELECT * FROM invoices INNER JOIN companies ON invoices.id_company = companies.id ORDER BY invoices.created_at DESC LIMIT 5');
        $query->execute();
        $db = null;
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    function getCompanies(): bool|array
    {
        $db = (new dbConnection())->connexion();
        $query = $db->prepare('SELECT * FROM companies ORDER BY created_at DESC LIMIT 5');
        $query->execute();
        $db = null;
        return $query->fetchAll();
    }

    function getContacts(): bool|array
    {
        $db = (new dbConnection())->connexion();
        $query = $db->prepare('SELECT * FROM contacts INNER JOIN companies ON contacts.company_id = companies.id ORDER BY contacts.created_at DESC LIMIT 5');
        $query->execute();
        $db = null;
        return $query->fetchAll();
    }
}