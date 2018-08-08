<?php
require('../Models/MapSql.php');

$map= new MapSql();
$affPra=$map->affPartenaireRechercheAsk();
$a=json_encode($affPra);
echo $a;
