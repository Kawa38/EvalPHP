<?php
//Affichage entête
require_once "header.php";
?>
<h2>Modifier un véhicule</h2>.

<?php
require_once "../controller/database.php";

// charger les valeurs pre existantes via 'id récupérer
$idModif = $_POST["id"];

// preparer la requete 
$req = $db->prepare("SELECT * FROM vehicule WHERE id_vehicule=:idModif");
// assigner
    $req->bindValue(":idModif",$idModif,PDO::PARAM_INT);
//execute
    $req->execute();
// recup des datas
    $Modif = $req->fetchAll(PDO::FETCH_ASSOC);

//cloture
    $req->closeCursor();
?>
<section class="col col border border-primary-subtle m-3 rounded" >
    <form action="../controller/update.vehicule.php" method="post">

        <label class="form-label" for="MA" class="form-label">Marque</label>
        <input class="form-control" type="text" class=" my-3 form-control" id="MA" name="marque" value="<?=$Modif[0]["marque"]?>" >

        <label class="form-label" for="MO" class="form-label">Modele</label>
        <input class="form-control" type="text" class=" my-3 form-control" id="MO" name="modele" value="<?=$Modif[0]["modele"]?>">

        <label class="form-label" for="CO" class="form-label">Couleur</label>
        <input class="form-control" type="text" class=" my-3 form-control" id="CO" name="couleur" value="<?=$Modif[0]["couleur"]?>">

        <label class="form-label" for="IM" class="form-label">Immatriculation</label>
        <input class="form-control" type="text" class=" my-3 form-control" id="IM" name="immatriculation" value="<?=$Modif[0]["immatriculation"]?>">

        <input class="form-control" type="number" class=" my-3 form-control" id="PR" name="id_vehicule" value="<?= $Modif[0]["id_vehicule"] ?>" hidden >

        <button class="btn btn-success shadow m-auto" type="submit">
            Modifier</a>
        </button>



    </form>
</section>