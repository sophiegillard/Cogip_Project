<?php

namespace App\Models;

use App\Database\dbConnection;
use PDO;

class home
{
    function getInvoices(): bool|array
    {
        $db = (new dbConnection())->connexion();
        $query = $db->prepare('SELECT invoices.id,ref,invoices.created_at,companies.name AS company FROM invoices INNER JOIN companies ON invoices.id_company = companies.id ORDER BY invoices.created_at DESC LIMIT 5');
        $query->execute();
        $db = null;
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    function getCompanies(): bool|array
    {
        $db = (new dbConnection())->connexion();
        $query = $db->prepare('SELECT companies.id,companies.name,tva,companies.created_at,types.name AS types FROM `companies` INNER JOIN types ON companies.types_id = types.id ORDER BY created_at DESC LIMIT 5');
        $query->execute();
        $db = null;
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    function getContacts(): bool|array
    {
        $db = (new dbConnection())->connexion();
        $query = $db->prepare('SELECT contacts.id, contacts.name,phone,email,companies.name AS company,contacts.created_at FROM contacts INNER JOIN companies ON contacts.company_id = companies.id ORDER BY contacts.created_at DESC LIMIT 5');
        $query->execute();
        $db = null;
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
}