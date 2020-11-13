<?php

class Articles extends Controller{
    public function index($args){
        $this ->laodModel("Article");
        $articles = $this->Article->getAll();

        $this->render('index', ['articles' => $articles]);
    }

    public function article($args){
        $this ->laodModel("Article");
        $articles = $this->Article->find($args);
        $this->render('article', ['article' => $articles]);
    }

    public function bonjour($args){
        
        $this->render('bonjour', ['nom' => $args]);
    }
}