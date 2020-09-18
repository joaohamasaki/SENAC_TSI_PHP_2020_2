<?php

require_once 'config.php';

$objBanco = new PDO(DSN, DB_USER, DB_PASS); 
                                                                         //FETCH_ASSOC(atributo) transforma em vetor alfanumério, ou seja = id, nome, whatsapp
$consulta = $objBanco->query('SELECT id, nome, whatsapp from contatos', PDO::FETCH_ASSOC);

var_dump( $objBanco->errorInfo() );

foreach ($consulta as $registro){

    echo "ID: {$registro['id']} NOME: {$registro['nome']} WZAP: {$registro['whatsapp']}<br>";
}


$objBanco->query('INSERT into contatos (id, nome, whatsapp) VALUES (3, "teste3", "11111111"');


if ( $objBanco->query('UPDATE contatos SET nome = "teste2" where id = 1') ){
    echo "Nome alterado com sucesso";
};
