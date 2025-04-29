<?php
namespace App\Controllers\PagesController;
use \PDO; //Permet d'évité de DEVOIR mettre le \ devant le PDO dans l'appel de la function

function homeAction(PDO $connexion): void{
    include '../app/models/photosModel.php';
    include '../app/models/authorsModel.php';
    $photos = \App\Models\PhotosModel\findAll($connexion);
    $authors = \App\Models\AuthorsModel\findAll($connexion);
    global $content;
    ob_start();
    include "../app/views/pages/home.php";
    $content = ob_get_clean();
}