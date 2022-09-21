<?php

$config = include 'config.php';

$db = null;
function getInstance(){

    try {
        $config = include 'config.php';
        $db = new PDO("mysql:host={$config['host']};dbname={$config['dbname']};charset=utf8", $config['username'], $config['password']);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    return $db;
}
/**
 *Get db connection with this
 */
//$config = include '../Database/dbConnection.php';
//$db = getInstance();
//var_dump($db);
