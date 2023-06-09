

<section class= "border border-primary-subtle m-3 rounded">
<table class="table table-hover">
    <thead class="thead-light">
        <tr>
            <th>id_véhicules</th>
            <th>Marques</th>
            <th>Modéle</th>
            <th>Couleur</th>
            <th>Immatriculation</th>
            <th>Modification</th>
            <th>Suppression</th>
        </tr>
    </thead>
    <tbody>

    <?php foreach ($vehicules as $key => $vehicule): ?>
        <tr>
            <td><?= $vehicule["id_vehicule"] ?></td>
            <td><?= $vehicule["marque"] ?></td>
            <td><?= $vehicule["modele"]?></td>
            <td><?= $vehicule["couleur"]?></td>
            <td><?= $vehicule["immatriculation"]?></td>

            <td>
                <form action="partials/modify.vehicule.php" method="post" >
                        <input class="form-control" hidden type="text" name="id" value="<?= $vehicule['id_vehicule'] ?> ">
                        <button class="" type="submit"><i class="fa fa-edit"> </i> 
                        </button>
                </form>
            </td>
            <td>
                <form action="controller/delete.vehicule.php" method="post" onSubmit="return confirm('confirmez la suppression de l'id : <?= $vehicule['id_vehicule'] ?>')">
                        <input class="form-control" hidden type="text" name="id" value="<?= $vehicule['id_vehicule'] ?> ">
                        <button class="" type="submit"><i class="fa fa-trash"> </i> 
                        </button>
                </form>
            </td>

        </tr>
        <?php endforeach ?>
    <tbody>
</table>
    </section>