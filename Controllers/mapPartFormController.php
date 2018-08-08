<?php
require('../Models/MapSql.php');

$map= new MapSql();
$affPfa=$map->affPartenaireFormationAsk();
$a=json_encode($affPfa);
echo $a;
