<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$clima = 'quente';

//Condicional if
if ($clima == 'gelado'){
    
    echo "<br><br><br>Meu pé congela!<br><br>";
    
}

$bool = '1';

//Condicional "operador ternario"
$var = $bool == 1 ? '$bool é igual de 1' : '$bool é diferente de 1';

echo $var . '<br><br>'; //. é concatenar;

$var = $bool === 1 ? '$bool é igual de 1' : '$bool é diferente de 1';

echo $var . '<br><br>';

$var = $bool != 1 ? '$bool é igual de 1' : '$bool é igual de 1';

echo $var . '<br><br>';

$frase = 'Meu pai tinha um cachorro amarelo e rosa';


// if com comparador de valor e tipo de variável
if ( strpos( $frase, 'amarelo') !== false) {

    echo 'Encontrei o Meu!';

} else {

    echo "Não há cachorro algum!";
}

echo "<br><br>";
//switch

switch ( $clima ) {

    case 'quente':
    case 'tropical':
        echo 'Adoro clima quente!';

        if ( true ) {

            echo '<br> -- if dentro do switch';

            if ( true ) {

                echo '<br> -- if aninhado dentro do switch!';
            }
        }

        break;

    case 'morno':

        echo 'Morno é melhor que frio!';
    
        break;
    
    case 'frio':

        echo 'Adoro clima frio!';
    
        break;        
    
    case 'gelado':

        echo 'Canada!';
    
        break;

    default:
        
        echo 'Putz!';

        break;
}
$isso = 'véi';

//condicional nova no PHP
$isso = $isso ?? 'coisa';

echo "<br><br>Olha só $isso";


