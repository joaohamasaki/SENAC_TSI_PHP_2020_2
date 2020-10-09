<?php

session_start();  //Tem que ser no começo antes de qualquer coisa enviada para o navegador

echo "Você é o: " . $_SESSION['user'];

//REQUEST serve para poder acessar a variável mesmo vinda de post ou get.
$nota = $_REQUEST['nota']; //Aqui pegamos o valor da variável enviada através do navegador, vindo da nps_tpl.php


if ($nota >= 9) {

    echo "<br><br>Estamos muito felizes!";
} else {

    echo "<br><br>Poxa, o que podemos fazer para você nos dar uma nota 10?";
}
