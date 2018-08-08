<?php
require ("Models/MembreSql.php");
//on creer un nouvelle objet
$selectMembre=new MembreSql();
// on apelle les fonctions
$affCabinet=$selectMembre->affCabinet();
$affArticle=$selectMembre->affArticle();
//vue associé au controller
require_once('Views/home.php');