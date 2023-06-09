<h1 class="my-5 text-center bg-primary p-4">Modifier une association</h1>.


<?php
require_once "../controller/database.php";
require_once "../Controller/read.conducteurs.php";
require_once "../Controller/read.vehicules.php";

// charger les valeurs pre existantes via 'l'id récupérer par POST
        // $idModif = $_POST["id"];
        // echo var_dump($_POST);


        // preparer la requete 
        $req = $db->prepare("SELECT * FROM association_vehicule_conducteur WHERE id_association=:idModif");
        // assigner
            $req->bindValue(":idModif",$idModif,PDO::PARAM_INT);
        //execute
            $req->execute();
        // recup des datas
            $Modif = $req->fetchAll(PDO::FETCH_ASSOC);
            //echo var_dump($Modif);//->ok

        //cloture
            $req->closeCursor();

            echo var_dump($_POST);
        ?>


<form action="../controller/update.association.php" method="post">


<label for="IDC" class="form-label"> le conducteur</label>
    <select id="IDC" name="id_conducteur"  >
    <option selected="selected"> <?= $Modif[0]["id_conducteur"] ?></option>
    <option value=""> </option>
        <?php foreach ($conducteurs as $key => $conducteur): ?>
            <option value="<?= $key ?>"> </option>
        <?php endforeach; ?>
    </select>

    <br>

    <label for="IDV" class="form-label"> le véhicule </label>
    <select id="IDV" name="id_vehicule" placeholder="Id du véhicule ?" > 
        <option selected="selected" ><?= $Modif[0]["id_vehicule"] ?></option>
        <?php foreach ($vehicules as $key => $vehicule): ?>
            <option value="<?= $key ?>"> <?= $vehicule["marque"] ?> </option>
        <?php endforeach; ?>
    </select>

    <br>

    <?= $conducteur["nom"]." ". $conducteur["prenom"]?> 















    <input type="number" class=" my-3 form-control" id="PR" name="id_vehicule" value="<?= $Modif[0]["id_association"] ?>" hidden >

    <button class="btn btn-success shadow m-auto" type="submit">
        Modifier</a>
    </button>



</form>