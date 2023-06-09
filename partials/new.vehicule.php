<h1 class="my-5 text-center bg-primary p-4">Ajouter un véhicule</h1>.

<form action="./controller/create.vehicule.php" method="post">

    <label for="MA" class="form-label">Marque</label>
    <input type="text" class=" my-3 form-control" id="MA" name="marque" placeholder="marque ?">

    <label for="MO" class="form-label">Modele</label>
    <input type="text" class=" my-3 form-control" id="MO" name="modele" placeholder="modele ?">

    <label for="CO" class="form-label">Couleur</label>
    <input type="text" class=" my-3 form-control" id="CO" name="couleur" placeholder="couleur ?">

    <label for="IM" class="form-label">Immatriculation</label>
    <input type="text" class=" my-3 form-control" id="IM" name="immatriculation" placeholder="immatriculation ?">


    <button class="btn btn-success shadow m-auto" type="submit">
        Ajouter ce véhicule</a>
    </button>



</form>