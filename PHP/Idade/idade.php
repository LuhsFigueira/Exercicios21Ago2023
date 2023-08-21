<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo idade</title>
</head>
<body>

    <?php
    function idade($datanascto){
        list($d,$m,$y) = explode("/",$datanascto);
        $date = new DateTime($y."-",$m. '-'.$d);
        $intevalo = $date->format('%y');
    }
    echo "Olá ".$_GET['nome'];
    echo "<br>";
    echo "Você nasceu em: ".$_GET['datanscto'];
    echo  "<br>"
    echo "Sua idade: ".idade($_GET['datanascto']);
    echo "<br><br>";
    echo "<a href='idade.php>Voltar</a>"
    ?>

    
</body>
</html>