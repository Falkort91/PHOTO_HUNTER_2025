<?php 

    include_once "../app/models/categoriesModel.php";
    $categories=App\Models\CategoriesModel\findAll($connexion) //Connexion avec la base de données
?>

<!-- Affichage des catégories -->
<?php foreach ($categories as $category):?>
    <li><a href="#"><?php echo $category ['name'];?></a></li>
<?php endforeach;?>