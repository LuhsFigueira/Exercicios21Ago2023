<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo ações em PHP</title>
</head>
<body>
    <h1>Ações em PHP</h1>
    <form method="get" action="index.html">
        <label for="iNumero">Numero: </label>
        <input type="text" nome="numero" id= "iNumero" placeholder = "Inform um número">
        <br>
        <select name="acao" id="$acao">
            <option value="parimpar">1. Para/Ímpar</option>
            <option value="tabuada">2. Tabuada</option>
        </select>
        <br>
        <br>
        <button type="submit">Execute</button>
    </form>
    <div id="dreusltado">
        ...Resultado...
        <?php
        inumero = $_GET['numero'];
        $acao = $_GET['acao'];

        echo $_GET['numero'];
        echo "<br>";
        echo $_GET['acao'];
        ?>
    </div>
</body>
</html>