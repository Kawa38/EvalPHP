<?php
require_once "./Controller/read.conducteurs.php";
require_once "./Controller/read.vehicules.php";
//var_dump($conducteurs);
?>


<section class="col col border border-primary-subtle m-3 rounded" >
    <form action="./controller/create.association.php" method="post">
        
        <label class="form-label" for="IDV" class="form-label"> Choisir le véhicule </label>
        <select id="IDV" name="id_vehicule"  > 
            <option value=""> </option>
            <?php foreach ($vehicules as $key => $vehicule): ?>
                <option value="<?= $vehicule["id_vehicule"] ?>"> <?= $vehicule["id_vehicule"] ." ". $vehicule["marque"]." ". $vehicule["modele"] ?> </option>
            <?php endforeach; ?>
        </select>

        <br>

        <label class="form-label" for="IDC" class="form-label"> Choisir le conducteur</label>
        <select id="IDC" name="id_conducteur"  >
        <option value=""> </option>
            <?php foreach ($conducteurs as $key => $conducteur): ?>
                <option value="<?= $conducteur["id_conducteur"] ?>"> <?= $conducteur["id_conducteur"]." ".$conducteur["nom"]." ". $conducteur["prenom"]?> </option>
            <?php endforeach; ?>
        </select>

        <br>


        <button class="btn btn-success shadow m-auto" type="submit">
            Ajouter cette association</a>
        </button>

    </form>
</section>