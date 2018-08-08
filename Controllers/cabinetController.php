<?php
require_once ('Models/MembreSql.php');
$affCabinet=new MembreSql();
$affToutCabinet=$affCabinet->affCabinet();
// si il existe id en param alors on apelle les fonctions

if(isset($_GET['id']))
{
    $affCabinetParId=$affCabinet->affCabinetParId($_GET['id']);
    $affDirecteur=$affCabinet->affDirecteursParCabinet($_GET['id']);
    $affDirecteurAdjoint=$affCabinet->affDirecteursAdjointParCabinet($_GET['id']);
    $printDepartementParCab=$affCabinet->affDepartementParCabinet($_GET['id']);


}
// si il existe idDepartement en param alors on apelle les fonctions

if (isset($_GET['idDepartement']))
{

    $affDepartementParId=$affCabinet->affDepartementParId($_GET['idDepartement']);
    $affDirecteurDep=$affCabinet->affDirecteursParDepartement($_GET['idDepartement']);
    $affDirecteurAdjointDep=$affCabinet->affDirecteursAdjointParDepartement($_GET['idDepartement']);
    $affMembresParCabEtDep=$affCabinet->affMembresParCabEtDep($_GET['idDepartement']);

}

//vue associe au controller
require_once ('Views/cabinet.php');