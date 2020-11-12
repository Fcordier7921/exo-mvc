<?php
// génére un econtance chemin vers index 
define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));

require_once(ROOT.'app/Model.php');
require_once(ROOT.'app/Controller.php');

// on  sépare les paramétres
$params=explode('/',$_GET['p']);

//est-ce qu'un paramétre existe
if($params[0] != ""){
    $controller =ucfirst($params[0]);

    $action = isset($params[1]) ? $params[1] : 'index';

    require_once(ROOT.'controller/'.$controller.'.php');

    $controller = new $controller();
    
    if(method_exists($controller, $action)){
        $controller->$action();
    }else{
        http_response_code(404);
        echo "La page demandée n'existe pas";
    }
}else{

}