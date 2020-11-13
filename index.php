<?php
// génére un econtance chemin vers index 
// define('ROOT', str_replace('index.php', '', $_SERVER['SCRIPT_FILENAME']));
define("ROOT",dirname(__FILE__));

require_once(ROOT.'/app/Model.php');
require_once(ROOT.'/app/Controller.php');

// on  sépare les paramétres



if($_GET['controller'] != ""){
    
    $controller =ucfirst($_GET['controller']);

    $action = isset($_GET['action']) && !empty($_GET['action']) ? $_GET['action'] : 'index';
    $args = isset($_GET['args']) ? $_GET['args'] : [];

    require_once(ROOT.'/controller/'.$controller.'.php');

    $ctrl = new $controller();
    
    if(method_exists($ctrl, $action)){
        $ctrl->$action($args);
    }else{
        http_response_code(404);
        echo "La page demandée n'existe pas";
    }
}else{
    ?>
    <a href="/articles">mes articles</a>
    <?php
}