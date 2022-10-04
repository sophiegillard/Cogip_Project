<?php

namespace App\Models;

use App\Database\dbConnection;
use PDO;

class invoices
{
    function getAllInvoices(): bool|array
    {
        $db = (new dbConnection())->connexion();
        $query = $db->prepare('SELECT invoices.id,ref,due_date,invoices.created_at,companies.name FROM invoices INNER JOIN companies ON invoices.id_company = companies.id LIMIT 10');
        $query->execute();
        $db = null;
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    function getInvoicesByCompany($id): bool|array
    {
        $db = (new dbConnection())->connexion();
        $query = $db->prepare('SELECT invoices.ref, invoices.due_date, companies.name AS company, invoices.created_at FROM `invoices` INNER JOIN companies ON companies.id = invoices.id_company  WHERE companies.id = :id ORDER BY invoices.created_at DESC LIMIT 5');
        $query->execute(array(
            'id'=>$id
        ));
        $db = null;
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
}