<h1 class="my-5 text-center bg-primary p-4">Rajouter un conducteur</h1>.

<form action="./controller/create.conducteur.php" method="post">

    <label for="PR" class="form-label">Prenom</label>
    <input type="text" class=" my-3 form-control" id="PR" name="prenom" placeholder="prenom ?">

    <label for="NO" class="form-label">Nom</label>
    <input type="text" class=" my-3 form-control" id="NO" name="nom" placeholder="nom ?">

    <button class="btn btn-success shadow m-auto" type="submit">
        Ajouter ce conducteur</a>
    </button>

</form>