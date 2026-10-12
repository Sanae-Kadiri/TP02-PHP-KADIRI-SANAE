<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice 7</title>
</head>
<body>
    <h1>Exercice7</h1>
    <section>
        <h2>Table de miltiplication</h2>

        <?php
        $nombre = 7;
        for ($i = 1;$i <= 10; $i++) {
            $resultat = $nombre * $i;
            echo "<p>$nombre x $i = $resultat</p>";

        }
        ?>
        </section>
        <section>
            <h2>Pyramide</h2>
            <pre><?php
            for ($ligne = 1; $ligne <= 6; $ligne++) {
                for ($colonne = 1; $colonne <= $ligne; $colonne++) {
                    echo "*";

                }
                echo PHP_EOL;
            
            }
            ?></pre>
            </section>
            <p><a href ="index.php">Accueil</a></p>
</body>
</html>
