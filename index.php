<?php
session_start();
if(isset($_SESSION['IDU'])) {
    header('Location: question.html');
    exit;
}
if(isset($_POST['submit'])) {
 
    include("connexion.php");
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $email = mysqli_real_escape_string($connexion, $email);
    $password = mysqli_real_escape_string($connexion, $password);

    $query = "SELECT * FROM utilisateur WHERE email='$email' AND password='$password'";
    $result = mysqli_query($connexion, $query);
    if(mysqli_num_rows($result) == 1) {

        $row = mysqli_fetch_assoc($result);
        $_SESSION['IDU'] = $row['IDU'];
        header('Location: question.html');
        exit;
    } 
    else {

        $error_message = "Identifiants incorrects. Veuillez réessayer.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <form method="post" action="index.php">
            <h1>Bienvenue sur Quizz IAM</h1>
            <div class="input-box">
                <input type="text" placeholder="Email ou Téléphone "required name="email">
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="password"required name="pass">
                <i class='bx bxs-lock-alt'></i>
            </div>
           
            <button type="submitt" class="btn" name="submit">Se connecter</button>
            <div class="register-link">
                <p>Vous n'avez pas de compte ? </p>
                <p><a href="signUp.php">S'inscrire</a></p>
            </div>
        </form>
    </div>


</body>
</html>
