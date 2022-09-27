<?php

namespace App\Database;

use \PDO;
use \PDOException;

class dbConnection
{

    public function connexion()
    {
        $host = 'localhost';
        $dbname = 'cogip';
        $username = 'moustito';
        $password = 'root';

        try {
            $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $db;
    }
}
