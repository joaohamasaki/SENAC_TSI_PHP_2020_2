<?php
function operacao (float $num1, float $num2, string $operacao = '+'): ?float//aqui é o tipo de saída
{
    switch ( $operacao ) {

        case 'soma':

            return $num1 + $num2;
        
        case 'sub':

            return $num1 - $num2;
        
        case 'mult':

            return $num1 * $num2;

        case 'div':

            return $num1 / $num2;

        default:
        
            return null;
    }
}

echo "<br>O resultado é: " . operacao(2.5, 2.5, '*') . "<br>";



$dia = 2; //Variável fora do escopo da função.
function dia_da_semana ( int $dia ): string
{
    $semana = ['Doming', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'];

    return $semana[$dia] ?? 'Use de 0 a 6';
}
echo "<br><br>O dia é " . dia_da_semana(3) . "<br><br>";



$nome = 'Bono';
//Passagem de parâmetro por referência (Muda o valor da variável fora do escopo da function)
function muda_nome( string &$var): string 
{
    $var = 'Outro nome';
    return $var;
}
function exemplo( $param1, $param2) 
{
    return 'Isso também funcionaria';
}

echo "<br>A função returonará: " . muda_nome($nome) . "<br><br>";

echo "<br>A variável \$nome ainda vale $nome";