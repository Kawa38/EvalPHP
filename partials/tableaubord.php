<?php
require_once "./Controller/read.conducteurs.php";
require_once "./Controller/read.vehicules.php";
require_once "./Controller/read.associations.php";
require_once "./Controller/tableaubord.php";

//var_dump($conducteurs); echo "<br>";echo "<br>";
//var_dump($vehicules); echo "<br>";
?>


<section class="row justify-content-evenly text-center">
    <div class= "col border border-primary-subtle m-3 rounded">
        <h5>Nombre de conducteurs</h5>
        <p>
        <?= count($conducteurs) ?>
        </p>
    </div>

    <div class= "col border border-primary-subtle m-3 rounded">
        <h5>Nombre de véhicules</h5>
        <p>
        <?= count($vehicules) ?>
        </p>
    </div>

    <div class= "col border border-primary-subtle m-3 rounded">
        <h5>Nombre d'associations</h5>
        <p>
        <?= count($associations) ?>
        </p>
    </div>
</section>

<section class="row">
    <div class= "col border border-primary-subtle m-3 rounded">
        <h2>Véhicules sans conducteurs</h2>

        <p>
            <?php  
            $vehicules = executerequete($reqVehiculeSansConducteur);
            //var_dump($conducteurs);        
            require_once "list.vehicules.php";
            ?>
        </p>
    </div>

    <div class= "col border border-primary-subtle m-3 rounded">
        <h2>Conducteurs sans véhicules</h2>
        <p>
            <?php 
            $conducteurs = executerequete($reqConducteurSansVehicule);
                //var_dump($conducteurs);  
            require "list.conducteurs.php";   
            ?>  
        </p>
    </div>
</section>
<section class="row">
    <div class= "col border border-primary-subtle m-3 rounded">
        <h2>Liste des véhicules avec conducteur</h2>
        <p>
            <?php 
            $vehicules = executerequete($reqVehiculeAvecConducteur);
            //var_dump($vehicules); 
            require "list.vehicules.php";
            ?>
        </p>
    </div>
</section>


