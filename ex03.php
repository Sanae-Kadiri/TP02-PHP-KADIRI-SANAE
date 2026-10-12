<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice 3</title>
</head>
        <body>
            <h1>Exercice 3</h1>
            <?php
            define("TAUX_TVA" ,20);
            define("DEVISE" ,"MAD");

            $prixUnitaireHT = 60;
            $quantite = 3;

            $totalHT = $prixUnitaireHT * $quantite;
            $montantTVA = $totalHT * TAUX_TVA / 100;
            $totalTTC = $totalHT + $montantTVA;

            $montantFinal = $totalTTC;
            $montantFinal +=15; // frais de livraison

            echo "<ul>";
            echo "<li>Total HT : " . $totalHT . " " .DEVISE ."</li>";
            echo "<li>TVA (" . TAUX_TVA . "%) : " . $montantTVA . " " . DEVISE . "</li>";
            echo "<li>Total TTC : " . $totalTTC . " " . DEVISE . "</li>";
            echo "<li>Montant final (livraison 15 " . DEVISE . ") : " . $montantFinal . " " . DEVISE . "</li>";
            echo "</ul>";

            if (defined("TAUX_TVA")) {
                echo "<p>La constante TAUX_TVA existe.</p>";
            }
            ?>
            <p><a href="index.php">Accueil</a></p>
            </body>
            </html>