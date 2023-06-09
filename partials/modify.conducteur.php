<?php
//Affichage entête
require_once "header.php";
?>

<?php
require_once "../controller/database.php";

// charger les valeurs pre existantes via 'id récupérer
$idModif = $_POST["id"];

// preparer la requete 
$req = $db->prepare("SELECT * FROM conducteur WHERE id_conducteur=:idModif");
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
<form action="../controller/update.conducteur.php" method="post">

    <label class="form-label" for="PR" class="form-label">Prenom</label>
    <input class="form-control" type="text" class=" my-3 form-control" id="PR" name="prenom" value="<?=$Modif[0]["prenom"]?>">


    <label class="form-label" for="NO" class="form-label">Nom</label>
    <input class="form-control" type="text" class=" my-3 form-control" id="NO" name="nom" value="<?=$Modif[0]["nom"]?>">


    <input class="form-control" type="number" class=" my-3 form-control" id="PR" name="id_conducteur" value="<?= $Modif[0]["id_conducteur"] ?>" hidden >


    <button class="btn btn-success shadow m-auto" type="submit">
        Mettre à jour </a>
    </button>

</form>
</section>