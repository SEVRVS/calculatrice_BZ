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
        <form action="post">
            <div class="calculator">
                <div class="calculator-screen">
                    <input type="text" name="screen" id="screen" disabled />
                </div>
                <div class="calculator-body">
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
                        <button title="Enregistrer le calcul" type="submit" value="save">S</button>
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