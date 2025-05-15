<?php 

    include_once "../app/models/categoriesModel.php";
    $categories=App\Models\CategoriesModel\findAll($connexion) //Connexion avec la base de données
?>

<!-- Affichage des catégories -->
<?php foreach ($categories as $category):?>
    <li><?php echo $category ['name'];?></li>
<?php endforeach;?>