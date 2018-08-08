<?php
//on appel le model
require_once ('Models/MembreSql.php');
// on creer un nouvel objet
$afficherArticle=new MembreSql();
// si il existe id en param alors on apelle la fonction
if(isset($_GET['id']))
{
    $affArticleParId=$afficherArticle->affArticleParId($_GET['id']);
}
require_once ("Views/article.php");
?>