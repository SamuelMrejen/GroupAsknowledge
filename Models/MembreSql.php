<?php
require('init.php');

class MembreSql
{
    // affiche tout de cabinet ordonner par id
    public function affCabinet()
    {
        global $bdd;
        $selectCabinet = $bdd->prepare("select * from cabinets order by cabinets.id");
        $selectCabinet->execute();
        $affCabinet = $selectCabinet->fetchAll();
        return $affCabinet;
    }

// affiche  de cabinet en fonction de l'id
    public function affCabinetParId($id)
    {
        global $bdd;
        $selectCabinet = $bdd->prepare("select * from cabinets where id=:id");
        $selectCabinet->bindParam(":id", $id, PDO::PARAM_STR);
        $selectCabinet->execute();
        $affCabinetParId = $selectCabinet->fetch();
        return $affCabinetParId;


    }

// affiche les directeurs de cabinets en fonction de l'id du cabinet
    public function affDirecteursParCabinet($id)
    {
        global $bdd;
        $selectDirecteur = $bdd->prepare("select * from cabinets,directeurs where cabinets.id=:id and directeurs.id_cabinet=:id ");
        $selectDirecteur->bindParam(":id", $id, PDO::PARAM_STR);
        $selectDirecteur->execute();
        $affDirecteur = $selectDirecteur->fetchAll();
        return $affDirecteur;
    }

// affiche les directeurs adjoint  de cabinets en fonction de l'id du cabinet

    public function affDirecteursAdjointParCabinet($id)
    {
        global $bdd;
        $selectDirecteurAdjoint = $bdd->prepare("select * from   cabinets,directeursAdjoint where cabinets.id=:id and directeursAdjoint.id_cabinet= :id");
        $selectDirecteurAdjoint->bindParam(":id", $id, PDO::PARAM_STR);
        $selectDirecteurAdjoint->execute();
        $affDirecteurAdjoint = $selectDirecteurAdjoint->fetchAll();
        return $affDirecteurAdjoint;
    }

// affiche les departements en fonction de l'id du cabinet

    public function affDepartementParCabinet($id)
    {
        global $bdd;
        $getDepartementParCab = $bdd->prepare("select * from cabinets,departements where  cabinets.id= :id  and departements.id_cabinet=:id  and departements.hidden = false");
        $getDepartementParCab->bindParam(":id", $id, PDO::PARAM_INT);
        $getDepartementParCab->execute();
        $printDepartementParCab = $getDepartementParCab->fetchAll();
        //var_dump($printDepartementParCab);
        return $printDepartementParCab;

    }

// affiche les departements en fonction de l'id du departement

    public function affDepartementParId($id)
    {
        global $bdd;
        $selectDepartementParId = $bdd->prepare("select * from departements where id=:id");
        $selectDepartementParId->bindParam(":id", $id, PDO::PARAM_INT);
        $selectDepartementParId->execute();
        $affDepartementParId = $selectDepartementParId->fetch();
        return $affDepartementParId;

    }

// affiche les directeurs de departements en fonction de l'id du departements

    public function affDirecteursParDepartement($id)
    {
        global $bdd;
        $selectDirecteurDep = $bdd->prepare("select * from departements,directeurs where departements.id =:id   and directeurs.id_departement = :id ");
        $selectDirecteurDep->bindParam(":id", $id, PDO::PARAM_INT);
        $selectDirecteurDep->execute();
        $affDirecteurDep = $selectDirecteurDep->fetchAll();
        return $affDirecteurDep;
    }

// affiche les directeurs adjoint de departements en fonction de l'id du departements

    public function affDirecteursAdjointParDepartement($id)
    {
        global $bdd;
        $selectDirecteurAdjointDep = $bdd->prepare("select * from departements,directeursAdjoint where departements.id =:id   and directeursAdjoint.id_departement = :id ");
        $selectDirecteurAdjointDep->bindParam(":id", $id, PDO::PARAM_INT);
        $selectDirecteurAdjointDep->execute();
        $affDirecteurAdjointDep = $selectDirecteurAdjointDep->fetchAll();
        return $affDirecteurAdjointDep;
    }

// affiche les membres par departement(qui appartient a un cabinet ) en fonction de l'id du departements

    public function affMembresParCabEtDep($id)
    {
        global $bdd;
        $selectMembresParCabEtDep = $bdd->prepare("select * from departements,membres where  departements.id=:id and membres.id_departement = :id");
        $selectMembresParCabEtDep->bindParam(":id", $id, PDO::PARAM_INT);
        $selectMembresParCabEtDep->execute();
        $affMembresParCabEtDep = $selectMembresParCabEtDep->fetchAll();

        return $affMembresParCabEtDep;
    }

    // affiche tout de departements ordonner par id


    public
    function affDepartement()
    {
        global $bdd;
        $selectDepartement = $bdd->prepare("select * from departements order by departements.id");
        $selectDepartement->execute();
        $affDepartement = $selectDepartement->fetchAll();
        return $affDepartement;
    }

// affiche tout les collaborateur du departement
    public
    function affCollaborateursParDepartement()
    {
        global $bdd;
        $selectCollaborateur = $bdd->prepare("select * from membres ,departements where membres.id_departement=departements.id order by membres.id_departement");
        $selectCollaborateur->execute();
        $affCollaborateurs = $selectCollaborateur->fetchAll();
        return $affCollaborateurs;
    }


// affiche les membres en fonction de son id

    public function affMembresParId($id)
    {
        global $bdd;
        $selectMembreParId = $bdd->prepare("select * from membres where id =:id ");
        $selectMembreParId->bindParam(":id", $id, PDO::PARAM_INT);
        $selectMembreParId->execute();
        $affMembreParId = $selectMembreParId->fetch();
        return $affMembreParId;
    }

    // affiche les directeurs en fonction de son id


    public function affdirecteursParId($id)
    {
        global $bdd;
        $selectDirecteurParId = $bdd->prepare("select * from directeurs where id =:id ");
        $selectDirecteurParId->bindParam(":id", $id, PDO::PARAM_INT);
        $selectDirecteurParId->execute();
        $affDirecteurParId = $selectDirecteurParId->fetch();
        return $affDirecteurParId;
    }

    // affiche les directeurs adjoint en fonction de son id

    public function affDirecteursAdjointParId($id)
    {
        global $bdd;
        $selectDirecteursAdjointParId = $bdd->prepare("select * from directeursAdjoint where id =:id ");
        $selectDirecteursAdjointParId->bindParam(":id", $id, PDO::PARAM_INT);
        $selectDirecteursAdjointParId->execute();
        $affDirecteursAdjointeParId = $selectDirecteursAdjointParId->fetch();
        return $affDirecteursAdjointeParId;
    }


    // affiche 3 articles en partant du dernier insert

    public function affArticle()
    {
        global $bdd;
        $selectArticle = $bdd->prepare("select * from articles  order by id  desc limit 3  ");
        $selectArticle->execute();
        $affArticle = $selectArticle->fetchAll();
        return $affArticle;
    }

    // affiche  les article en fonction de son id

    public function affArticleParId($id)
    {
        global $bdd;
        $selectArticleParId = $bdd->prepare("select * from articles where id =:id  ");
        $selectArticleParId->bindParam(":id", $id, PDO::PARAM_INT);
        $selectArticleParId->execute();
        $affArticleParId = $selectArticleParId->fetch();
        return $affArticleParId;


    }

    // affiche tout les articles en partant du dernier insert

    public function affToutArticle()
    {
        global $bdd;
        $selectToutArticle = $bdd->prepare("select * from articles order by id DESC   ");
        $selectToutArticle->execute();
        $affToutArticle = $selectToutArticle->fetchAll();
        return $affToutArticle;
    }


}