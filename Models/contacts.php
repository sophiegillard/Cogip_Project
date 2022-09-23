<?php

namespace App\Models;

use App\Database\dbConnection;
use PDO;

class contacts
{

    function getAllContacts(): bool|array
    {
        $db = (new dbConnection())->connexion();
        $query = $db->prepare('SELECT contacts.id,contacts.name,phone,email,contacts.created_at, companies.name FROM contacts INNER JOIN companies ON contacts.company_id = companies.id LIMIT 10');
        $query->execute();
        $db = null;
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
}