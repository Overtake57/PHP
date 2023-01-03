<?php
    //inclusion du fichier
require_once '../src/App/Entity/Article.php';
use App\Entity\Article;

//  création d'un objet INSTANCIATION
//  INSTANCE = Objet 1!

$article_1 = new Article();

var_dump($article_1);
