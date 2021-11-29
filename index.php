<?php

$filename = 'historique.txt';
if (file_exists($filename)) {
    $handle = fopen($filename, 'r+');
    $fichier = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
}
if (isset($_POST['save'])) {
    if ($_POST['calcule'] === "") {
        echo '<div class="text-align-center alert alert-danger">
            <p>Veuillez saisir au moins une donnée</p>
          </div>';
    } else {
        file_put_contents($filename, date('d-m') . ": " . $_POST['calcule'] . "\n", FILE_APPEND);
        header('Refresh:1');
        echo '<div class="text-align-center">
            <h1>La page se recharge</h1>
          </div>';
    }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Calculatrice</title>
</head>

<body>
    <p>Edmond Duquesney</p>
    <div class="container">
        <form method="post">
            <div class="calculator">
                <div class="calculator-screen">
                    <input type="text" name="screen" id="screen" disabled />
                </div>
                <div class="calculator-body">
                    <input type="hidden" id="calcule" name="calcule" value="">
                    <div class="col">
                        <button title="afficher l'historique" type="button" value="historique">H</button>
                        <button title="Nettoyer" type="button" value="clear">C</button>
                        <button type="button" value="/">/</button>
                        <button type="button" value="*">*</button>
                    </div>
                    <div class="col">
                        <button type="button" value="7">7</button>
                        <button type="button" value="8">8</button>
                        <button type="button" value="9">9</button>
                        <button type="button" value="-">-</button>
                    </div>
                    <div class="col">
                        <button type="button" value="4">4</button>
                        <button type="button" value="5">5</button>
                        <button type="button" value="6">6</button>
                        <button type="button" value="+">+</button>
                    </div>
                    <div class="col">
                        <button type="button" value="1">1</button>
                        <button type="button" value="2">2</button>
                        <button type="button" value="3">3</button>
                        <button type="button" value="=">=</button>
                    </div>
                    <div class="col">
                        <button type="button" value="0">0</button>
                        <input title="Enregistrer le calcul" id="save" type="submit" name="save" value="S">
                    </div>
                </div>
            </div>
        </form>
        <div class="" id="historique">
            <h1>Historique</h1>
            <div class="historique-item">
                <p class="alert alert-warning">L'historique est vide</p>
            </div>
        </div>
    </div>
    <script src='app.js'></script>
</body>

</html>