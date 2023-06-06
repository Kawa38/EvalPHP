

<h1 liste des véhicules /h1>

<table>
    <thead>
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


            <form action="partials/modify.vehicule.php" method="post" >
                    <input hidden type="text" name="id" value="<?= $vehicule['id_vehicule'] ?> ">
                    <button class="" type="submit"><i class="fa fa-edit"> </i> 
                    </button>
            </form>
            </td>
            <td>
            <form action="controller/delete.vehicule.php" method="post" onSubmit="return confirm('confirmez la suppression de l'id : <?= $vehicule['id_vehicule'] ?>')">
                    <input hidden type="text" name="id" value="<?= $vehicule['id_vehicule'] ?> ">
                    <button class="" type="submit"><i class="fa fa-trash"> </i> 
                    </button>
            </form>
            </td>

        </tr>
        <?php endforeach ?>
    <tbody>
</table>