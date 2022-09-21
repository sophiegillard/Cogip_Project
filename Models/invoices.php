<?php

namespace App\Models;

use App\Database\dbConnection;
use PDO;

class invoices
{
    function getInvoices(): bool|array
    {
        $db = (new dbConnection())->connexion();
        $query = $db->prepare('SELECT invoices.id,ref,invoices.created_at,companies.name FROM invoices INNER JOIN companies ON invoices.id_company = companies.id LIMIT 10');
        $query->execute();
        $db = null;
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
}