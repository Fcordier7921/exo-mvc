<?php

abstract class Model{
//information de base de donné
private $host ="localhost";
private $bd_name = "mvc";
private $username = "root";
private $password = "";

//propiété contenant la conection
protected $_connexion;

//propiété contenant le info de requéte
public $table;
public $id;

public function getConnection(){
    $this ->_connexion =null;

    try{
        $this->_connexion = new PDO('mysql:host='.$this->host .'; dbname=' . $this->bd_name, $this->username, $this->password);
        $this->_connexion->exec('set names utf8');
    }catch(PDOException $exception){
        echo 'Erreur :' .$exception->getMessage();
    }
}

}