<?php
require_once ('initMaps.php');

class MapSql
{
    // Fonctions qui affiches toute les donnée contenuent dans chaque table
    public function affAssociationPartenaireAsk()
    {
        global $bdd;
        $selectApa = $bdd->prepare("select * from associationPartenaireAsk");
        $selectApa->execute();
        $affApa = $selectApa->fetchAll();
       return $affApa;
    }
    public function affConsultingAsk()
    {
        global $bdd;
        $selectAca = $bdd->prepare("select * from consultingAsk");
        $selectAca->execute();
        $affAca = $selectAca->fetchAll();
        return $affAca;
    }
    public function affFormationAsk()
    {
        global $bdd;
        $selectFa = $bdd->prepare("select * from formationAsk");
        $selectFa->execute();
        $affFa = $selectFa->fetchAll();
        return $affFa;
    }
    public function affPartenaireFormationAsk()
    {
        global $bdd;
        $selectPfa = $bdd->prepare("select * from partenaireFormationAsk");
        $selectPfa->execute();
        $affPfa = $selectPfa->fetchAll();
        return $affPfa;
    }
    public function affPartenaireOperationnelAsk()
    {
        global $bdd;
        $selectPoa = $bdd->prepare("select * from partenaireOperationelAsk");
        $selectPoa->execute();
        $affPoa = $selectPoa->fetchAll();
        return $affPoa;
    }
    public function affPartenaireRechercheAsk()
    {
        global $bdd;
        $selectPra = $bdd->prepare("select * from partenaireRechercheAsk");
        $selectPra->execute();
        $affPra = $selectPra->fetchAll();
        return $affPra;
    }
    public function affSousPrestataireFormation()
    {
        global $bdd;
        $selectSpf = $bdd->prepare("select * from sousPrestataireFormation");
        $selectSpf->execute();
        $affSpf = $selectSpf->fetchAll();
        return $affSpf;
    }



}