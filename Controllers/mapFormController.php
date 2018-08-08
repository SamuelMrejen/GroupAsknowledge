<?php
require('../Models/MapSql.php');

$map = new MapSql();
$affFa = $map -> affFormationAsk();
$jsonForm = json_encode($affFa);
echo $jsonForm;
