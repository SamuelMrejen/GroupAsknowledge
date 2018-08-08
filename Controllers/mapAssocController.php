<?php
require('../Models/MapSql.php');
//on cree un nouvel objet
$map = new MapSql();
//on appel la fonction
$affApa = $map->affAssociationPartenaireAsk();
//on transform le resultat renvoyer par la focnt en json
$a = json_encode($affApa);
// on renvoi le json
echo $a;


