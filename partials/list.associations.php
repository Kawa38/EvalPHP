

<h1 liste des associations /h1>

<table>
    <thead>
        <tr>
            <th></th>
            <th>id_Association</th>
            <th>id_vehicules</th>
            <th>id_vehicules</th>
            <th>Modification</th>
            <th>Suppression</th>
        </tr>
    </thead>
    <tbody>

    <?php foreach ($associations as $key => $association): ?>
        <tr>
            <td><?= $association["id_association"] ?></td>
            <td><?= $association["id_vehicule"] ?></td>
            <td><?= $association["id_conducteur"]?></td>
            <td>
            <form action="partials/modify.association.php" method="post" >
                    <input hidden type="text" name="id" value="<?= $association['id_association'] ?> ">
                    <button class="" type="submit"><i class="fa fa-edit"> </i> 
                    </button>
            </form>
            </td>
            <td>
            <form action="controller/delete.association.php" method="post" onSubmit="return confirm('confirmez la suppression de l'id : <?= $association['id_association'] ?>')">
                    <input hidden type="text" name="id" value="<?= $association['id_association'] ?> ">
                    <button class="" type="submit"><i class="fa fa-trash"> </i> 
                    </button>
            </form>
            </td>




        </tr>
        <?php endforeach ?>
    <tbody>
</table>