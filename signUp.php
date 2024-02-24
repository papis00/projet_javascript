<?php
include("connexion.php");
session_start();

// Affichage des erreurs PHP pour le débogage
error_reporting(E_ALL);
ini_set('display_errors', 1);

if(isset($_POST['submit']))
{   
    $name = $_POST['nom'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $pseudo = $_POST['pseudo'];

    // Préparation des données pour les requêtes SQL
    $name = mysqli_real_escape_string($connexion, $name);
    $email = mysqli_real_escape_string($connexion, $email);
    $password = mysqli_real_escape_string($connexion, $password);
    $pseudo = mysqli_real_escape_string($connexion, $pseudo);

    $str = "SELECT * FROM utilisateur WHERE email='$email'";
    $result = mysqli_query($connexion, $str);

    if(mysqli_num_rows($result) > 0)    
    {
        echo "<center><h3><script>alert('Désolé.. Cet email est déjà enregistré !!');</script></h3></center>";
    }
    else
    {
        $str = "INSERT INTO utilisateur (pseudo, password, email, nom) VALUES ('$pseudo', '$password', '$email', '$name')";
        if(mysqli_query($connexion, $str))    
        {
            echo "<center><h3><script>alert('Félicitations.. Vous vous êtes inscrit avec succès !!');</script></h3></center>";
            header('Location: index.php?q=1');
            exit();
        }
        else
        {
            echo "<center><h3><script>alert('Désolé.. Une erreur est survenue lors de l\'inscription');</script>.</h3></center>";
            echo "Erreur lors de l'inscription : " . mysqli_error($connexion);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <style>
        input {
            margin-bottom: 10px;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-left: 1px;
            margin-top: 40px;
            border-radius: 10px;
            background: #2c3e50;
        }
        .wrapper {
            width: 420px;
            background: #0082e6;
            color: #fff;
            border-radius: 10px;
            padding: 30px 40px;
        }
        .wrapper .input-box {
            position: relative;
            width: 100%;
            height: 50px;
            margin: 30px 0; 
        }
        .input-box input {
            width: 100%;
            height: 100%;
            background: transparent;
            border: none;
            outline: none;
            border: 2px solid rgba(255, 255, 255, .2);
            border-radius: 40px;
        }
        .input-box input::placeholder {
            color: #fff;
            padding: 15px;
        }
        .input-box i {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translate(-50%);
            font-size: 20px;
        }
        .wrapper .btn {
            width: 100%;
            height: 45px;
            background: #fff;
            border: none;
            outline: none;
            border-radius: 40px;
            box-shadow: 0 0 10px rgba(0, 0, 0, .1);
            cursor: pointer;
            font-size: 16px;
            color: #333;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <form method="POST" action="signUp.php">
            <h2>Veuillez vous inscrire</h2>
            <div class="input-box">
                <input type="text" id="nom" name="nom" placeholder="Entrez votre prénom et nom..." required>
            </div>
            <div class="input-box">
                <input type="text" id="pseudo" name="pseudo" placeholder="Entrez votre pseudo..." required>
            </div>
            <div class="input-box">
                <input type="text" id="email" name="email" placeholder="Entrez votre email..." required>
            </div>
            <div class="input-box">
                <input type="password" id="pass" name="pass" placeholder="Entrez votre mot de passe..." required>
            </div>
            <input type="submit" class="btn" value="M'inscrire" name="submit">
        </form>
    </div>
</body>
</html>

