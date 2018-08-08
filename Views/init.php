<?php
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);
//connexion bdd 2

$bdd = 'mysql:dbname=asknowleea02;host=asknowleea02.mysql.db';
$user = 'asknowleea02';
$password = 'Aymeric1';
try {
    $bdd = new PDO($bdd, $user, $password);
    $bdd->exec('SET NAMES utf8');

} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}
