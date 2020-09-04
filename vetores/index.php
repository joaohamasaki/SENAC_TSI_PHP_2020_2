<?php
date_default_timezone_set('America/Sao_Paulo');
//ini_set('display_errors' , 1);
//ini_set('display_')

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

echo '<br><br>';

//Solução com poucas linhas
$semana['Domingo'] = 0;
$semana['Segunda'] = 1;
$semana['Terça']   = 2;
$semana['Quarta']  = 3;
$semana['Quinta']  = 4;
$semana['Sexta']   = 5;
$semana['Sábado']  = 6;


$hoje = date('l');

echo "Hoje é " . $semana['Quinta'];

echo '<br><br>';

$usuario = ['nome' => 'Luis',
            'idade' => 25,
            'peso' => 67.8,
            'signo' => 'aquario'];

            echo "O professor " .$usuario['nome'] . " tem " .$usuario['idade'] . "anos, pesa " . number_format($usuario['peso'], 2, ',', '.') . " e é do signo de " .$usuario['signo'];

echo "O professor {$usuario['nome']} tem {$usuario['idade']} anos, pesa {$usuario['peso']}, e é de {$usuario['signo']} <br><br>";

$professores = array (      0 => array( 'nome'  => 'Luis bono',
                                        'idade' => 35,
                                        'peso'  => 80,
                                        'signo' => 'aquariano'),
                            1 => array( 'nome'  => 'Thiago Claro',
                                        'idade' => 35,
                                        'peso'  => 80,
                                        'signo' => 'aquariano'),
                            2 => array( 'nome'  => 'Luis bono',
                                        'idade' => 35,
                                        'peso'  => 73,
                                        'signo' => 'sagitariano'),
                            3 => array( 'nome'  => 'Thyago Quintas',
                                        'idade' => 21,
                                        'peso'  => 78,
                                        'signo' => 'leonino'));


?>
<table border = "1">
<tr> <td>ID</td>
     <td>Nome</td> 
     <td>Idade</td> 
     <td>Peso</td> 
     <td>Signo</td> 
</tr>
<?php

foreach ($professores as $linha => $professor) {

    echo "<tr>  <td>$linha</td>
                <td>{$professor['nome']}</td> 
                <td>{$professor['idade']}</td> 
                <td>{$professor['peso']}</td> 
                <td>{$professor['signo']}</td>
         </tr>";
}

?>
</table>
