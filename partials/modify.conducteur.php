<?php
require_once "../controller/database.php";



// charger les valeurs pre existante pour l'id récupérer
$idModif = $_POST["id"];

echo var_dump($_POST["id"]);

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

<?php // TODO : faire afficher les valeurs dans le fomulaire  ?
echo var_dump($Modif);
?>




<h1 class="my-5 text-center bg-primary p-4">modifier un conducteur</h1>.

<form action="../controller/update.conducteur.php" method="post">

    <label for="PR" class="form-label">Prenom</label>
    <input type="text" class=" my-3 form-control" id="PR" name="prenom" value="<?=$Modif[0]["prenom"]?>">


    <label for="NO" class="form-label">Nom</label>
    <input type="text" class=" my-3 form-control" id="NO" name="nom" value="<?=$Modif[0]["nom"]?>">


    <input type="number" class=" my-3 form-control" id="PR" name="id_conducteur" value="<?= $idModif ?>" hidden >


    <button class="btn btn-success shadow m-auto" type="submit">
        Modifier ce conducteur</a>
    </button>

</form>