<?php

abstract class Model{
    //information de base de donné
    private $host ="localhost";
    private $bd_name ="mvc";
    private $port ="3306";
    private $charset ="utf8";
    private $username ="root";
    private $password ="";

    //propiété contenant la conection
    protected $_connexion;

    //propiété contenant le info de requéte
    public $table;
    public $id;

    public function getConnection(){
        $this ->_connexion =null;

        try{
            $this->_connexion =new PDO('mysql:host='. $this->host .'; dbname='. $this->bd_name .';port='. $this->port .';charset='. $this->charset, $this->username, $this->password);
            $this->_connexion->exec('set names utf8');
            
        }catch(PDOException $exception){
            echo 'Erreur :' .$exception->getMessage();
        }
    }

    public function getAll(){
        $sql ="SELECT * FROM ".$this->table;
        $query =$this->_connexion->prepare($sql);
        $query->execute();
        return $query->fetchAll();
        var_dump($query);
    }
    public function getOne(){
        $sql ="SELECT * FROM ".$this->table ."where id=" .$this->id;
        $query =$this->_connexion->prepare($sql);
        $query->execute();
        return $query->fetch();
        
    }
}