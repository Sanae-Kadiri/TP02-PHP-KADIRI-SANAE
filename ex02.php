<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice 2</title>
</head>
<body>
    <h1>Exercice 2</h1>
    <?php
    $nom = "KADIRI";
    $prenom = "SANAE";
    $age = 18;
    $formation = "Informatique";

    // Concatenation avec le points
    $presentation = "Je m'appelle " . $prenom ." " . $nom . ", j'ai " . $age . " ans, formation : " . $formation . ". ";

    // Ajout a la fin avec .=
    $presentation .= "J'apprends PHP.";

    echo "<p>".$presentation."</p>";

    // PHP distingue majuscules et miniscules
    $note = 12;
    $Note = 16;
    echo "<p>note = " . $note . "</p>";
    echo "<p>Note = " . $Note . "</p>";
    ?>
    </body>
    </html>
