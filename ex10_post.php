<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Résultat POST</title>
</head>
<body>
    <h1>Résultat (POST)</h1>
    <?php
    if (isset($_POST['nom'], $_POST['prenom'], $_POST['groupe'])) {
        $nom = trim($_POST['nom']);
        $prenom = trim($_POST['prenom']);
        $groupe = trim($_POST['groupe']);

        if ($nom === "" || $prenom === "" || $groupe === "") {
            echo "<p>Erreur : tous les champs sont obligatoires.</p>";
        } else {
            echo "<p>Bienvenue " . htmlspecialchars($prenom, ENT_QUOTES, 'UTF-8') . " "
               . htmlspecialchars($nom, ENT_QUOTES, 'UTF-8')
               . " du groupe " . htmlspecialchars($groupe, ENT_QUOTES, 'UTF-8') . ".</p>";
        }
    } else {
        echo "<p>Aucune donnée reçue. Veuillez remplir le <a href='ex10_post.html'>formulaire</a>.</p>";
    }
    ?>
    <p><a href="ex10_post.html">Retour au formulaire</a></p>
    <p><a href="index.php">Accueil</a></p>
</body>
</html>