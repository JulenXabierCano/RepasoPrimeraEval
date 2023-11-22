<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Terradle | Calamity edition</title>
    <link rel="stylesheet" href="./src/css/index.css" />
    <script src="./src/js/index.js"></script>
</head>

<body>
    <div id="nav">
        <h1>Bienvenido {{ Auth::user()->name }}, has acertado {{ Auth::user()->points }} veces</h1>
        <a href="/">Volver</a>
    </div>
    <div class="main">
        <img src="./src/imgs/logo.png" class="logo terraria" />
        <br />
        <img src="./src/imgs/calamity_logo.jpg" class="logo calamity" />
        <br />
        <select name="" id="bossGuess">
            <option value=''>Select Boss</option>
        </select>
        <button onclick="comprobation(bossGuess.value)" id="btnGuess">
            Guess
        </button>
        <br /><br /><br />

        <table>
            <thead>
                <tr id="bossProperties">
                    <td>Boss</td>
                    <td>Forms</td>
                    <td>Difficulty</td>
                    <td>Species</td>
                    <td>Main Color</td>
                    <td>Second Color</td>
            </thead>
            <tbody id="gameTable">

            </tbody>
        </table>
    </div>
    
</body>

</html>