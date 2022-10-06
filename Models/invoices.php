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
        $query = $db->prepare('SELECT invoices.ref, invoices.due_date, companies.name, invoices.created_at FROM `invoices` INNER JOIN companies ON companies.id = invoices.id_company  WHERE companies.id = :id ORDER BY invoices.created_at DESC LIMIT 5');
        $query->execute(array(
            'id' => $id
        ));
        $db = null;
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    function createInvoices($ref, $company, $dueDate): void
    {
        $db = (new dbConnection())->connexion();
        $query = $db->prepare('INSERT INTO `invoices`(`id_company`, `created_at`, `ref`, `updated_at`, `due_date`) VALUES (?, ?, ?, ?, ?)');
        $query->execute(array(
            $company,
            date('Y-m-d'),
            $ref,
            date('Y-m-d'),
            $dueDate
        ));
        $db = null;
    }

    function deleteInvoices($id): void
    {
        $db = (new dbConnection())->connexion();
        try {
            $query = $db->prepare('DELETE FROM `invoices` WHERE `id` = :id');
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

    function updateInvoice($company_id, $ref, $dueDate): void
    {
        $db = (new dbConnection())->connexion();
        $query = $db->prepare('UPDATE `invoices` SET `id_company`=?,`ref`=?,`due_date`=?,`updated_at`=? WHERE id = :id');
        $query->execute(array(
            $company_id,
            $ref,
            $dueDate,
            date('Y-m-d')
        ));
    }
}