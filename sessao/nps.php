<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start(); //Tem que ser no começo antes de qualquer coisa enviada para o navegador

$nota = $_POST['nota'];
$explicacao = $_POST['explicacao'];


echo "<br><br>Você deu a nota $nota pelo motivo $explicacao";

$db = new PDO(
    'mysql:dbname=conexaoPHP;host=localhost',
    'root',
    ''
);

$stmt = $db->prepare('  INSERT INTO usuario
                                    (nota, explicacao)
                                    VALUES
                                    ( :nota, :explicacao)');

$stmt->bindParam(':nota', $nota);
$stmt->bindParam(':explicacao', $explicacao);

if ($stmt->execute()) {

    echo '<br><br>Pesquisa grava com sucesso!';
} else {

    echo '<br><br> :-( deu erro, tente novamente!';
}

echo "<br><br><a href='./agradecimento.php?nota=$nota'>Seguir</a>"; //enviar a nota para a outra página