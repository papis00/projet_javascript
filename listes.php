<!DOCTYPE html>
<html>
<head>
    <title>Liste de Joueurs en Ligne</title>
    <link rel="stylesheet"  href="listes.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<div class="container">
        <h1>Liste  Joueurs</h1>
        <?php
        $joueurs = array(
            array("nom" => "Modou", "en_ligne" => true),
            array("nom" => "Mariama", "en_ligne" => false),
            array("nom" => "Baba", "en_ligne" => true),
            array("nom" => "Khadija", "en_ligne" => false),
            array("nom" => "Mouhamed", "en_ligne" => true),
            array("nom" => "Fatou", "en_ligne" => true),
            array("nom" => "Khalil", "en_ligne" => false),
            array("nom" => "Sokhna", "en_ligne" => true)
            
        );

        foreach ($joueurs as $joueur) {
            echo "<div class='joueur-box'>";
            echo "<i class='bx bxs-user'></i>";
            echo "<p class='nom'>" . $joueur['nom'] . "</p>";
            echo "<p class='status'>" . ($joueur['en_ligne'] ? "En ligne" : "Hors ligne") . "</p>";
            echo "</div>";
        }
        ?>
    </div>
</div>

</body>
</html>
