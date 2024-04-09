<?php

try {
    $dbhost = 'localhost';
    $dbuser = 'mzharkov';
    $dbpass = 'AmQMyzCz';
    $dbname = 'mzharkov';
    $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    die("Could not connect to the database: " . $e->getMessage());
}
?>
