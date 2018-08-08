<?php
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);


$bdd = 'mysql:dbname=askGroupMap;host=localhost';
$user = 'root';
$password = 'root';
try {
    $bdd = new PDO($bdd, $user, $password);
    $bdd->exec('SET NAMES utf8');

} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}
