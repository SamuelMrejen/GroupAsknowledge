<?php
require_once ('Models/MembreSql.php');
//on cree un nouvel objet
$affiche=new MembreSql();
//on apelle toute les fonction dont on a besoin
$affCabinet=$affiche->affCabinet();
$affDirecteur=$affiche->affDirecteursParCabinet();
$affDirecteurAdjoint=$affiche->affDirecteursAdjointParCabinet();
$affDepartement=$affiche->affDepartement();
$affDirecteurAdjointDep=$affiche->affDirecteursAdjointParDepartement();
$affDirecteurDep=$affiche->affDirecteursParDepartement();
$affCollaborateurParDep=$affiche->affCollaborateursParDepartement();

//vue associe au controller
require_once ('Views/collaborateurs.php');