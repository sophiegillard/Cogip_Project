<?php

namespace App\Models;

use App\Database\dbConnection;
use PDO;

class contacts
{

    function getAllContacts(): bool|array
    {
        $db = (new dbConnection())->connexion();
        $query = $db->prepare('SELECT contacts.id,contacts.name,phone,email,contacts.created_at,companies.name AS company, companies.id AS companyId FROM contacts INNER JOIN companies ON contacts.company_id = companies.id LIMIT 10');
        $query->execute();
        $db = null;
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    function getContact($id)
    {
        $db = (new dbConnection())->connexion();
        $query = $db->prepare('SELECT contacts.name, contacts.phone, contacts.email, contacts.picture, companies.name AS company FROM `contacts` INNER JOIN companies ON company_id = companies.id WHERE contacts.id = :id');
        $query->execute(array(
            'id' => $id
        ));
        $db = null;
        return $query->fetch(PDO::FETCH_OBJ);
    }
}