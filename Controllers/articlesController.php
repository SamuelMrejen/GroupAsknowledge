<?php
require ("Models/MembreSql.php");
//creer un nouvel objet
$selectMembre=new MembreSql();
//on apelle la fonction
$affToutArticle=$selectMembre->affToutArticle();
// la vue associe au controller
require_once('Views/articles.php');