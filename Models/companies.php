<?php

namespace App\Models;

use App\Database\dbConnection;
use PDO;

class companies
{
    function getAllCompanies(): bool|array
    {
        $db = (new dbConnection())->connexion();
        $query = $db->prepare('SELECT companies.id,companies.name,tva,country,companies.created_at,types.name AS types FROM `companies` INNER JOIN types ON companies.types_id = types.id ORDER BY companies.created_at');
        $query->execute();
        $db = null;
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    function getCompany($id): bool|array
    {
        $db = (new dbConnection())->connexion();
        $query = $db->prepare('SELECT companies.name,tva,country,companies.created_at, contacts.name AS contactName, contacts.phone AS phoneNumber FROM `companies` JOIN contacts ON contacts.company_id = companies.id WHERE companies.id = :id;');
        $query->execute(array(
            'id' => $id
        ));
        $db = null;
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
}

