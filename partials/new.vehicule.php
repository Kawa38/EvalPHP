
<section class="col col border border-primary-subtle m-3 rounded" >
    <form action="./controller/create.vehicule.php" method="post">

        <label class="form-label" for="MA" class="form-label">Marque</label>
        <input class="form-control" type="text" class=" my-3 form-control" id="MA" name="marque" placeholder="marque ?">

        <label class="form-label" for="MO" class="form-label">Modele</label>
        <input class="form-control" type="text" class=" my-3 form-control" id="MO" name="modele" placeholder="modele ?">

        <label class="form-label" for="CO" class="form-label">Couleur</label>
        <input class="form-control" type="text" class=" my-3 form-control" id="CO" name="couleur" placeholder="couleur ?">

        <label class="form-label" for="IM" class="form-label">Immatriculation</label>
        <input class="form-control" type="text" class=" my-3 form-control" id="IM" name="immatriculation" placeholder="immatriculation ?">


        <button class="btn btn-success shadow m-auto" type="submit">
            Ajouter ce véhicule</a>
        </button>



    </form>
</section>