<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Exercice 4</title>
</head>
<body>
    <h1>Exercice 4</h1>
    <?php
    $v1 = 42;
    $v2 = "42";
    $v3 = 15.8;
    $v4 = true;
    $v5 = false;
    $v6 = null;
    ?>

    <h2>Types et valeurs</h2>
    <pre>
        <?php var_dump($v1,  $v2,  $v3,  $v4,  $v5,  $v6); ?>
</pre>

<h2>Conversions</h2>
<pre>
    <?php
    echo "(int)\"42\" : ";var_dump((int)"42");
    echo "(int)15.8 : ";var_dump((int)15.8);
    echo "(string)42 : ";var_dump((string)42);
    ?>
</pre>
<h2>Affichage de true et False</h2>
<pre>

<?php
echo "echo true : " . true . "\n";//Affiche 1
echo "echo false : " . false . "\n";//n'affiche rien 
echo "var_dump(true): "; var_dump(true);
echo "var_dump(false): "; var_dump(false);
?>
</pre>

<h2>Conversion en booleen</h2>
<pre>
    <?php
    echo '(bool)0 : ';       var_dump((bool)0);
    echo '(bool)"0" : ';   var_dump((bool)"0");
    echo '(bool)"PHP" : ';   var_dump((bool)"PHP");
    echo '(bool)[] : ';   var_dump((bool)[]);
    ?>
    </pre>
    <p><a href="index.php">Accueil</a></p>
</body>
</html>
