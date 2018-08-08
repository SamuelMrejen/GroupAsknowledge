<?php
ini_set('display_errors', 1);
require_once ('Models/init.php');
require_once ('Models/initMaps.php');

if (!isset($_GET['p']) OR $_GET['p'] === 'index') {
    require_once('Controllers/homeController.php');
}elseif(!isset($_GET['p']) OR $_GET['p'] === 'membre'){
    require_once ('Controllers/membreController.php');
}elseif(!isset($_GET['p']) OR $_GET['p'] === 'collaborateurs'){
    require_once ('Controllers/collaborateursController.php');
}elseif(!isset($_GET['p']) OR $_GET['p'] === 'cabinet'){
    require_once ('Controllers/cabinetController.php');
}elseif(!isset($_GET['p']) OR $_GET['p'] === 'valeurs'){
    require_once ('Controllers/valeursController.php');
}elseif(!isset($_GET['p']) OR $_GET['p'] === 'map'){
    require_once('Controllers/mapController.php');
}elseif(!isset($_GET['p']) OR $_GET['p'] === 'article'){
    require_once('Controllers/articleController.php');
}elseif(!isset($_GET['p']) OR $_GET['p'] === 'culture'){
    require_once('Controllers/cultureController.php');
}elseif(!isset($_GET['p']) OR $_GET['p'] === 'cabinetGlobal'){
    require_once('Controllers/cabinetGlobalController.php');
}elseif(!isset($_GET['p']) OR $_GET['p'] === 'presentationEntreprise'){
    require_once('Controllers/presentationEntrepriseController.php');
}elseif(!isset($_GET['p']) OR $_GET['p'] === 'articles'){
    require_once('Controllers/articlesController.php');
}





