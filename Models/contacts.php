<?php

namespace App\Models;

use App\Database\dbConnection;
use Exception;
use PDO;

class contacts
{

    function getAllContacts(): bool|array
    {
        $db = (new dbConnection())->connexion();
        $query = $db->prepare('SELECT contacts.id,contacts.name,phone,email,contacts.created_at,companies.name AS company, companies.id AS companyId FROM contacts INNER JOIN companies ON contacts.company_id = companies.id ORDER BY contacts.created_at DESC LIMIT 10');
        $query->execute();
        $db = null;
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    function getContact($id): bool|array
    {
        $db = (new dbConnection())->connexion();
        $query = $db->prepare('SELECT contacts.name, contacts.phone, contacts.email, contacts.picture, companies.name AS company FROM `contacts` INNER JOIN companies ON company_id = companies.id WHERE contacts.id = :id');
        $query->execute(array(
            'id' => $id
        ));
        $db = null;
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    function createContact($name, $phone, $companyId, $email): void
    {
        $db = (new dbConnection())->connexion();
        $query = $db->prepare('INSERT INTO `contacts`(`name`, `phone`, `company_id`, `email`, `picture`, `created_at`, `updated_at`) VALUES (?,?,?,?,?,?,?)');
        $query->execute(array(
            $name,
            $phone,
            $companyId,
            $email,
            "",
            date('Y-m-d'),
            date('Y-m-d')
        ));
        $db = null;
    }

    function deleteContact($id): void
    {
        $db = (new dbConnection())->connexion();
        try {
            $query = $db->prepare('DELETE FROM `contacts` WHERE `id` = :id');
            $db->beginTransaction();

            $query->execute(array(
                $id
            ));

            $db->commit();
        } catch (Exception $e) {
            if ($db->inTransaction()) {
                $db->rollBack();
            }
            throw $e;
        }
        $db = null;
    }

    function updateContact($name, $phone, $company_id, $email, $picture): void
    {
        $db = (new dbConnection())->connexion();
        $query = $db->prepare('UPDATE `companies` SET `name`=?,`phone`=?,`company_id`=?,`email`=?,`picture`=?,`updated_at`=? WHERE id = :id');
        $query->execute(array(
            $name,
            $phone,
            $company_id,
            $email,
            $picture,
            date('Y-m-d')
        ));
    }
}