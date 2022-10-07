<?php

namespace App\Models;

use App\Database\dbConnection;
use Exception;
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
        $query = $db->prepare('SELECT companies.id, companies.name,tva,country,companies.created_at, contacts.name AS contactName, contacts.phone AS phoneNumber, contacts.picture FROM `companies` LEFT JOIN contacts ON contacts.company_id = companies.id WHERE companies.id = :id;');
        $query->execute(array(
            'id' => $id
        ));
        $db = null;
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    function getAllTypeOfCompany(): bool|array
    {
        $db = (new dbConnection())->connexion();
        $query = $db->prepare('SELECT id,name FROM `types`');
        $query->execute();
        $db = null;
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    function createCompany($name, $country, $tva, $type): void
    {
        $db = (new dbConnection())->connexion();
        $query = $db->prepare('INSERT INTO `companies`(`name`, `country`, `tva`, `types_id`, `created_at`, `updated_at`) VALUES (?,?,?,?,?,?)');
        $query->execute(array(
            $name,
            $country,
            $tva,
            $type,
            date('Y-m-d'),
            date('Y-m-d')
        ));
        $db = null;
    }


    function deleteCompany($id): void
    {
        $db = (new dbConnection())->connexion();
        try {

            $deleteCompany = $db->prepare('DELETE FROM `companies` WHERE id = :id');
            $deleteContacts = $db->prepare('DELETE FROM `contacts` WHERE `company_id` = :id');
            $deleteInvoices = $db->prepare('DELETE FROM `invoices` WHERE `id_company` = :id');

            $db->beginTransaction();
            $deleteCompany->execute(array(
                'id' => $id
            ));
            $deleteContacts->execute(array(
                'id' => $id
            ));
            $deleteInvoices->execute(array(
                'id' => $id
            ));

            $db->commit();
        } catch (Exception $e) {
            if ($db->inTransaction()) {
                $db->rollBack();
            }
            echo $e->getMessage();
        }
    }

    function updateCompany($name, $country, $tva, $type, $id): void
    {
        $db = (new dbConnection())->connexion();
        $query = $db->prepare('UPDATE `companies` SET `name`=:name,`country`=:country,`tva`=:tva,`types_id`=:type,`updated_at`=:updated WHERE id =:idCompany ');
        $query->execute(array(
            'name' => $name,
            'country' => $country,
            'tva' => $tva,
            'type' => $type,
            'updated' => date('Y-m-d'),
            'idCompany' => $id
        ));
    }
}

