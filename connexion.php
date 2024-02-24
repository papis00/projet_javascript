 
<?php

$serveur = "localhost"; 
$utilisateur = "papis"; 
$motDePasse = "passe123";
$baseDeDonnees = "quizIam"; 


$connexion = mysqli_connect($serveur, $utilisateur, $motDePasse, $baseDeDonnees);


if (!$connexion) {
    die("Échec de la connexion à la base de données : " . mysqli_connect_error());
}
/* else { */
/*    echo "Connexion réussie à la base de données MySQL."; */
/**/
/* } */





/* mysqli_close($connexion); */
?>














