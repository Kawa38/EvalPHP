


<section class= "border border-primary-subtle m-3 rounded">
<table>
    <table class="table table-hover">
    <thead class="thead-light">
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
                            <input class="form-control" hidden type="text" name="id" value="<?= $conducteur['id_conducteur'] ?> ">
                            <button class="" type="submit"><i class="fa fa-edit"> </i> 
                            </button>
                    </form>
                </td>
                <td>
                    <form action="controller/delete.conducteur.php" method="post" onSubmit="return confirm('confirmez la suppression de l'id : <?= $conducteur['id_conducteur'] ?>')">
                            <input class="form-control" hidden type="text" name="id" value="<?= $conducteur['id_conducteur'] ?> ">
                            <button class="" type="submit"><i class="fa fa-trash"> </i> 
                            </button>
                    </form>
                </td>
            </tr>
            <?php endforeach ?>
    <tbody>
</table>
</section>