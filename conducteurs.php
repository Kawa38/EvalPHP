
<?php
//Affichage entête
require_once "./partials/header.php";
// récupératation de $conducteurs #}
require_once "./controller/read.conducteurs.php";

//affichage liste
echo '<h2> Liste des conducteurs</h2>';
require_once "./partials/list.conducteurs.php" ;

// Affichage formulaire
echo '<h2>Ajouter un conducteur</h2>';
require_once "./partials/new.conducteur.php" ;


// affichage footer
require_once "./partials/footer.php"



?>