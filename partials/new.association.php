<?php
require_once "./Controller/read.conducteurs.php";
require_once "./Controller/read.vehicules.php";
//var_dump($conducteurs);
?>

<h1 class="my-5 text-center bg-primary p-4">Ajouter une association</h1>

<form action="./controller/create.association.php" method="post">

    <label for="IDC" class="form-label"> le conducteur</label>
    <select id="IDC" name="id_conducteur" placeholder="Id du conducteur ?" >
    <option value=""> </option>
        <?php foreach ($conducteurs as $key => $conducteur): ?>
            <option value="<?= $key ?>"> <?= $conducteur["id_conducteur"]." ".$conducteur["nom"]." ". $conducteur["prenom"]?> </option>
        <?php endforeach; ?>
    </select>

    <br>

    <label for="IDV" class="form-label"> le véhicule </label>
    <select id="IDV" name="id_vehicule" placeholder="Id du véhicule ?" > 
        <option value=""> </option>
        <?php foreach ($vehicules as $key => $vehicule): ?>
            <option value="<?= $key ?>"> <?= $vehicule["id_vehicule"] ." ". $vehicule["marque"]." ". $vehicule["modele"] ?> </option>
        <?php endforeach; ?>
    </select>

    <br>

    <button class="btn btn-success shadow m-auto" type="submit">
        Ajouter cette association</a>
    </button>

</form>