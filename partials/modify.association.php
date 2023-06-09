
<?php
//Affichage entête
require_once "header.php";
?>

<h2> Modifier une association</h2>


<?php
require_once "../controller/database.php";
require_once "../Controller/read.conducteurs.php";
require_once "../Controller/read.vehicules.php";

// charger les valeurs de l'enregistrement à modifier via 'l'id récupérer par POST
        $idModif = $_POST["id"];
        //echo var_dump($_POST);

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

        ?>

<section class="col col border border-primary-subtle m-3 rounded" >
<form action="../controller/update.association.php" method="post">


<label class="form-label" for="IDC" class="form-label"> le conducteur</label>
    <select id="IDC" name="id_conducteur"  >
        <option selected="selected"> <?= $Modif[0]["id_conducteur"] ?></option>
        <?php foreach ($conducteurs as $key => $conducteur): ?>
            <option value="<?= $conducteur["id_conducteur"] ?>"> <?= $conducteur["id_conducteur"] ." ".$conducteur["nom"] ." ".$conducteur["prenom"] ?> </option>
        <?php endforeach; ?>
    </select>

    <br>

    <label class="form-label" for="IDV" class="form-label"> le véhicule </label>
    <select id="IDV" name="id_vehicule" >
        <option selected="selected" ><?= $Modif[0]["id_vehicule"] ?></option>
        <?php foreach ($vehicules as $key => $vehicule): ?>
            <option value="<?= $vehicule["id_vehicule"] ?>"> <?= $vehicule["id_vehicule"] ." ".$vehicule["marque"] ." ".$vehicule["modele"] ?> </option>
        <?php endforeach; ?>
    </select>

    <br>

    <input class="form-control" type="number" class=" my-3 form-control" id="PR" name="id_association" value="<?= $Modif[0]["id_association"] ?>" hidden >

    <button class="btn btn-success shadow m-auto" type="submit">
        Modifier</a>
    </button>



</form>
</section>