<?php
require('../Models/MapSql.php');

$map= new MapSql();
$affPoa=$map->affPartenaireOperationnelAsk();
$a=json_encode($affPoa);
echo $a;
