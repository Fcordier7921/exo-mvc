<?php
// génére un econtance chemin vers index <div class="php"
define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT8FILENAME'])).
die(ROOT);
// on  sépare les paramétres
$params=explode('/',$_GET['p']);

//est-ce qu'un paramétre existe
if($params[0] != ""){
    $controller =ucfirst($params[0]);

    $action = isset($params[1]) ? $params[1] : 'index';

    require_once(ROOT.'controlers/'.$controller.'.php');

    $controller = new $controller();

    $controller->$action();

}else{

}