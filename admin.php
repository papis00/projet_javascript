<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
    <form method="POST" action="traitement.php">
        <h2>Ajouter un administrateur</h2>
        <div class="input-box">
        <input type="text" id="prenom et nom" name="prenom et nom" placeholder="Entrez votre prenom et nom..."required>
        </div>
        <div class="input-box">
        <input type="text" id="pseudo" name="pseudo" placeholder="Entrez votre pseudo..."required>
        </div>
        <div class="input-box">
        <input type="text" id="email" name="email" placeholder="Entrez votre email..."required>
        </div>
        <div class="input-box">
        <input type="password" id="pass" name="pass" placeholder="Entrez votre mot de pass..."required>
        </div>
        <input type="submit" class="btn"value="Ajouter" name "ok">
    </form>
    </div>