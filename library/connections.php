<?php

function byuiConnect() {
    $server = 'localhost';
    $database = 'assets';
    $user = 'assettracker';
    $password = 'BSyLffx50SSxitDI';
    $dsn = "mysql:host=$server;dbname=$database";
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

// Create the actual connection object and assign it to a variable
    try {
        $byuiLink = new PDO($dsn, $user, $password, $options);
        return $byuiLink;
//ECHO 'connection worked!';
    } catch (PDOException $e) {
        echo 'Sorry, the connection failed,br.$e';
    }
}
