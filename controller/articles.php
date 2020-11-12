<?php

class Articles extends Controller{
    public function index(){
        $this ->laodModel("Article");
        $articles = $this->Article->getAll();

        $this->render('index', ['articles' => $articles]);
    }
}