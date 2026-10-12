<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice 5</title>
</head>
<body>
    <h1>Exercice 5</h1>
    <?php
    $moyenne = 12; //changer : -1,9,10,12,14,16,21

    if($moyenne < 0 || $moyenne > 20) {
        echo "<p>Note invalide</p>";
    } elseif ($moyenne < 10){
        echo "<p>Moyenne : $moyenne - Non valide</p>";
    } elseif ($moyenne < 12) {
        echo "<p>Moyenne : $moyenne - Passable</p>";
    } elseif ($moyenne < 14) {
        echo "<p>Moyenne : $moyenne - Assez bien</p>";

    } elseif ($moyenne < 16) {
        echo "<p>Moyenne : $moyenne - bien</p>";
    } else {
        echo "<p>Moyenne : $moyenne - tres bien</p>";
    }
    ?>
    <p><a href="index.php">Accueil</a></p>
    </body>
    </html>
    