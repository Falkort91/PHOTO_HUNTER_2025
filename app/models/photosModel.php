<?php

namespace App\Models\PhotosModel;

use \PDO;

function findAll(PDO $connexion){
    $sql = "SELECT  ph.*, 
                    aut.firstname AS author_firstname,
                    aut.lastname AS author_lastname
            FROM photos ph
            JOIN authors aut ON ph.author_id = aut.id
            ORDER BY ph.created_at DESC
            LIMIT 3;";
    
    $rs = $connexion->query($sql);                  // le "query" est utilisé quand toutes les données sont connues dés le départ et qui ne nécessite pas d'action de l'utilisateur
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}

function findOneByid(PDO $connexion, string $id) :array{
    $sql="  SELECT  ph.*, 
                    aut.firstname AS author_firstname, 
                    aut.lastname AS author_lastname
            FROM photos ph
            JOIN authors aut ON ph.author_id = aut.id
            WHERE ph.id =:id;";
    $rs = $connexion->prepare($sql);                // le "->" DOIT être utilisé quand on a une donnée inconnue à la base le ":id" qui vient en focntion de l'action du user
    $rs->bindValue(':id', $id, PDO::PARAM_STR);
    $rs->execute();
    return $rs->fetch(PDO::FETCH_ASSOC);
}