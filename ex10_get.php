<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Résultat GET</title>
</head>
<body>
    <h1>Résultat (GET)</h1>
    <?php
    //Ne lire les champs que lorsqu'il existent et sont des chaines.
    //is_string() permet aussi de refuser des parametres comme nom[]=Amine
    if (isset($_GET['nom'], $_GET['prenom'], $_GET['groupe'])) {
        $nom = trim($_GET['nom']);
        $prenom = trim($_GET['prenom']);
        $groupe = trim($_GET['groupe']);

        if ($nom === "" || $prenom === "" || $groupe === "") {
            echo "<p>Erreur : tous les champs sont obligatoires.</p>";
        } else {
            // Echapper les donnees uniquement au moment de leur affichage HTML.
            echo "<p>Bienvenue " . htmlspecialchars($prenom, ENT_QUOTES, 'UTF-8') . " "
               . htmlspecialchars($nom, ENT_QUOTES, 'UTF-8')
               . " du groupe " . htmlspecialchars($groupe, ENT_QUOTES, 'UTF-8') . ".</p>";
        }
    } else {
        echo "<p>Aucune donnée reçue. Veuillez remplir le <a href='ex10_get.html'>formulaire</a>.</p>";
    }
    ?>
    <p><a href="ex10_get.html">Retour au formulaire</a></p>
    <p><a href="index.php">Accueil</a>
</body>
</html>