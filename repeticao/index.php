<?php
date_default_timezone_set('America/Sao_Paulo');


//Exemplo de for
 for ($i = 0, $j = 4; $i < 5 && $j >= 0; $i++, $j--) {
    echo "<br>Aqui é o for<br>";
    echo "Linha: $i $j<br>";

 }
 echo '<br><br>';


 //Exemplo de while
 $i = 0;
 $j = 4;
 while ( $i < 5 && $j >= 0) {

    echo "<br>Aqui é o while<br>";
    echo "Linha: $i $j<br>";
    
    $i++;
    $j--;
 }
 echo '<br><br>';


 //Exemplo de do while
 $o = 0;
 $j = 4;
do {

    echo "<br>Aqui é o do while<br>";
    echo "Linha: $o $j<br>";
    $o++;

} while ($o < 5 && $j >= 0);

echo '<br><br>';

//Solução com muitas linhas de código
$domingo = 0;
$segunda = 1;
$terca   = 2;
$quarta  = 3;
$quinta  = 4;
$sexta   = 5;
$sabado  = 6;

var_dump(date('d/m/Y')); //Para fazer o debug (verbose)

switch ( date ('w')){

    case $domingo:
        echo 'Domingo';
    break;

    case $segunda:
        echo 'Segunda';
    break;

    case $terca:
        echo 'Terça';
    break;

    case $quarta:
        echo 'Quarta';
    break;

    case $quinta:
        echo 'Quinta';
    break;

    case $sexta:
        echo 'Sexta';
    break;

    case $sabado:
        echo 'Sábado';
    break;
}

//Solução com poucas linhas
$semana[0] = 'Domingo';
$semana[1] = 'Segunda';
$semana[2] = 'Terça';
$semana[3] = 'Quarta';
$semana[4] = 'Quinta';
$semana[5] = 'Sexta';
$semana[6] = 'Sábado';

$hoje = date('w');

echo "Hoje é " . $semana[$hoje];