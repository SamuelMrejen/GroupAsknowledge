<?php
require('../Models/MapSql.php');

$map= new MapSql();
$affAca=$map->affConsultingAsk();
$b=json_encode($affAca);
echo $b;
