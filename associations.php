
<?php 
//Affichage entête
require_once "./partials/header.php";

// récupératation de $associations
require_once "./controller/read.associations.php";


//affichage liste
echo '<h2> liste des associations </h2>';
require_once "./partials/list.associations.php" ;


//affichage formulaire
echo '<h2>Ajouter une association</h2>';
require_once "./partials/new.association.php"; 

// affichage footer
require_once "./partials/footer.php"
?>

