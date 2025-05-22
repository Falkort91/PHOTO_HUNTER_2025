<?php
namespace App\Controllers\AuthorsController;

use \App\Models\AuthorsModel; //Permet de mettre uniquement le dernier terme devant le "find"
use \PDO; //Permet d'évité de DEVOIR mettre le \ devant le PDO dans l'appel de la function

function indexAction(PDO $connexion): void{
    include_once '../app/models/authorsModel.php';
    $authors = AuthorsModel\findAll($connexion);
    global $content;
    ob_start();
    include "../app/views/authors/index.php";
    $content = ob_get_clean();
}

function showAction(PDO $connexion, int $id): void{
    include_once '../app/models/authorsModel.php';
    $author = MonstersModel\findOneById($connexion,$id); //ATTENTION préciser entre () ce qu'il faut aller rechercher
    global $content;
    ob_start();
    include "../app/views/authors/show.php";
    $content = ob_get_clean();
}