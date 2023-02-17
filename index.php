<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci</title>
</head>
<body>
    <?php include "include/Fibonacci.php";?>
    <h1>Les 40 premiers termes de la suite de Fibonacci :</h1>
    <?php $resultat = new Fibonacci();
    $resultat->calcul(); ?>
</body>
</html>