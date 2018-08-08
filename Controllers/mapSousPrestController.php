<?php
require('../Models/MapSql.php');

$map= new MapSql();
$affSpf=$map->affSousPrestataireFormation();
$a=json_encode($affSpf);
echo $a;
