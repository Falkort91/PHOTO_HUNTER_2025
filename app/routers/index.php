<?php

//ROUTE DES PHOTO photo.show  
//PATTERN : /?photos=xxx
//CTRL : photosController
//ACTION : show 
if(isset($_GET['photos'])):
    include_once '../app/routers/photos.php';
// ROUTE PAR DEFAUT
// PATTERN : /
// CTRL : pagesController
// ACTION : homeAction
else:
include_once '../app/controllers/pagesController.php';
\App\Controllers\PagesController\homeAction($connexion);

endif;

