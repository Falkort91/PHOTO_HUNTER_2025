<?php
namespace App\Controllers\PhotosController;

use \App\Models\PhotosModel; //Permet de mettre uniquement le dernier terme devant le "find"
use \PDO; //Permet d'évité de DEVOIR mettre le \ devant le PDO dans l'appel de la function

function indexAction(PDO $connexion): void{
    include_once '../app/models/photosModel.php';
    $photos = PhotosModel\findAll($connexion);
    global $content;
    ob_start();
    include "../app/views/photos/index.php";
    $content = ob_get_clean();
}

function showAction(PDO $connexion, string $id): void{
    include_once '../app/models/photosModel.php';
    $photo = PhotosModel\findOneById($connexion,$id); //ATTENTION préciser entre () ce qu'il faut aller rechercher récupération de la $connexion et de l'$id
    global $content;
    ob_start();
    include "../app/views/photos/show.php";
    $content = ob_get_clean();
}