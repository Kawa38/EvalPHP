

<h1 liste des conducteurs /h1>

<table>
    <thead>
        <tr>
            <th>id_conducteur</th>
            <th>Prenom</th>
            <th>Nom</th>
            <th>Modification</th>
            <th>Suppression</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($conducteurs as $key => $conducteur): ?>
        <tr>
            <td><?= $conducteur["id_conducteur"] ?></td>
            <td><?= $conducteur["nom"] ?></td>
            <td><?= $conducteur["prenom"] ?></td>
            <td>
            <form action="partials/modify.conducteur.php" method="post" >
                    <input hidden type="text" name="id" value="<?= $conducteur['id_conducteur'] ?> ">
                    <button class="" type="submit"><i class="fa fa-edit"> </i> 
                    </button>
            </form>
            </td>
            <td>
            <form action="controller/delete.conducteur.php" method="post" onSubmit="return confirm('confirmez la suppression de l'id : <?= $conducteur['id_conducteur'] ?>')">
                    <input hidden type="text" name="id" value="<?= $conducteur['id_conducteur'] ?> ">
                    <button class="" type="submit"><i class="fa fa-trash"> </i> 
                    </button>
            </form>
            </td>
        </tr>
        <?php endforeach ?>
    <tbody>
</table>