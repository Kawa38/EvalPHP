
<?php require_once "./controller/database.php";
?>

<section class= "border border-primary-subtle m-3 rounded">
<table class="table table-hover">
    <thead class="thead-light">
        <tr>
            <th>id_Association</th>
            <th>id_vehicule</th>
            <th>id_conducteur</th>
            <th>Modification</th>
            <th>Suppression</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($associations as $key => $association): ?>

            <?php
            // récupérer les infos correspondant au véhicule courant
                $idVehicule = $association["id_vehicule"];
                $req = $db->prepare("SELECT * FROM vehicule WHERE id_vehicule=:idvehicule");
                $req->bindValue(":idvehicule",$idVehicule,PDO::PARAM_INT);
                    $req->execute();
                    $vehicule = $req->fetchAll(PDO::FETCH_ASSOC);
                    $req->closeCursor();
                    //echo var_dump($vehicule)
            ?>

        <?php
            // récupérer les infos correspondant au conducteur courant
                $idconducteur = $association["id_conducteur"];
                $req = $db->prepare("SELECT * FROM conducteur WHERE id_conducteur=:idconducteur");
                $req->bindValue(":idconducteur",$idconducteur,PDO::PARAM_INT);
                    $req->execute();
                    $conducteur = $req->fetchAll(PDO::FETCH_ASSOC);
                    $req->closeCursor();
                    //echo var_dump($conducteur)
            ?>

            <tr>
                <td><?= $association["id_association"]?></td>

                <td><?php echo  isset($vehicule[0]["marque"])? $association["id_vehicule"]." / ". $vehicule[0]["marque"]." ". $vehicule[0]["modele"]: $association["id_vehicule"]." : "."Véhicule effacé"  ?> </td>

                <td><?php echo  isset($conducteur[0]["nom"])? $association["id_conducteur"]." / ". $conducteur[0]["nom"]." ". $conducteur[0]["prenom"]: $association["id_conducteur"]." : "."conducteur effacé"  ?> </td>
                
                <td>
                    <form action="partials/modify.association.php" method="post" >
                            <input class="form-control" hidden type="text" name="id" value="<?= $association['id_association'] ?> ">
                            <button class="" type="submit"><i class="fa fa-edit"> </i> 
                            </button>
                    </form>
                </td>
                <td>
                <form action="controller/delete.association.php" method="post" onSubmit="return confirm('confirmez la suppression ? ')">
                            <input class="form-control" hidden type="text" name="id" value="<?= $association['id_association'] ?> ">
                            <button class="" type="submit"><i class="fa fa-trash"> </i> 
                            </button>
                    </form>
                </td>
            </tr>
        <?php endforeach ?>
    <tbody>
</table>
</section>