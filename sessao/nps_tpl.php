<?php

session_start(); //Tem que ser no começo antes de qualquer coisa enviada para o navegador

$_SESSION['user'] = 'João';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1 {
            text-align: center;
        }

        p {
            text-align: center;
        }

        #formulario-texto {
            text-align: center;
        };

    </style>
</head>

<body>
    <form method="post" action="nps.php">
        <div>
            <h1>AVALIE A NOSSA EMPRESA!</h1>
            <p>Pouco provável</p>
            <p id="nota">
                <input type="radio" name="nota" value="1" /> 1
                <br><input type="radio" name="nota" value="2" /> 2
                <br><input type="radio" name="nota" value="3" /> 3
                <br><input type="radio" name="nota" value="4" /> 4
                <br><input type="radio" name="nota" value="5" /> 5
                <br><input type="radio" name="nota" value="6" /> 6
                <br><input type="radio" name="nota" value="7" /> 7
                <br><input type="radio" name="nota" value="8" /> 8
                <br><input type="radio" name="nota" value="9" /> 9
                <br><input type="radio" name="nota" value="10" />10
            </p>
            <p>Muito provável</p>
            <div id="formulario-texto">
                <p>Explique o motivo da sua nota</p>
                <textarea id="opiniao" name ="explicacao"rows="7" cols="80"></textarea ><br>
                <br><br>
                <input type="submit" name="avaliacao" value="Avaliar">
            </div>
        </div>
    </form>
</body>

</html>