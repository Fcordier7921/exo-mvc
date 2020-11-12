<?php
abstract class Controller{
    public function laodModel(string $model){
    require_once(ROOT.'modeles/'.$model.'.php');
    $this->$model=new $model();

    }
}