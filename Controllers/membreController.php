<?php
require_once ('Models/MembreSql.php');
//on creer un nouvel objet
$affMembre=new MembreSql();
// si il existe id en param alors on apelle les fonctions
if(isset($_GET['id']))
{
    $affMembreParId=$affMembre->affMembresParId(intval($_GET['id']));

}
// si il existe idDirecteur en param alors on apelle les fonctions

else if (isset($_GET['idDirecteur']))
{
    $affDirecteurParId=$affMembre->affdirecteursParId(intval($_GET['idDirecteur']));


}
// si il existe idDirecteurAdjoint en param alors on apelle les fonctions
elseif(isset($_GET['idDirecteurAdjoint']))
{
    $affDirecteursAdjointeParId=$affMembre->affDirecteursAdjointParId($_GET['idDirecteurAdjoint']);
}

require_once ('Views/membre.php');