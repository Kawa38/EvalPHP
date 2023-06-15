
<?php
require_once "database.php";


echo var_dump($_POST);

// test  $_POST[id] non null 
if(!empty($_POST['id_conducteur']))
{  
echo "<h1> test </h1>";
// préparation de la requete 
$req = $db->prepare("UPDATE conducteur SET nom=:nom, prenom=:prenom  WHERE id_conducteur=:idModif");

// Assignation de la valeur 
    $idModif = intval($_POST['id_conducteur']);
    $nameModif =  $_POST['nom'];
    $prenomModif = $_POST['prenom'];
   
    echo var_dump($idModif);

    $req->bindValue(":idModif",$idModif,PDO::PARAM_INT);
    $req->bindValue(":nom",$nameModif, PDO::PARAM_STR);
    $req->bindValue(":prenom",$prenomModif, PDO::PARAM_STR);
    
// Executer la requete


$result = $req->execute();

// Cloture 
    $req->closeCursor();

// Gérer les redirections
        if ($result) {
        header("Location: ../conducteurs.php");
        }
        else{
        header("Location: ../conducteurs.php");
            }

}