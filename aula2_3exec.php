<?php
/*Criar um arquivo .php para que as instruções seguintes sejam realizadas: 
informar qual a operação aritmética será realizada. Cada opção do case deverá a executar a referida operação aritmética.
soma, subtração, divisão, multiplicação e resto da divisão. */

/*$operacao[0] = "+";
$operacao[1] = "-";
$operacao[2] = "/";
$operacao[3] = "*";
$operacao[4] = "%";*/

$operacao = array("+", "-", "/", "*", "%");
$escolha = $operacao[array(0:4)];

$a = 15;
$b = 7;
$escolha = "*";
switch ($escolha)
    {
    case array(0) = echo "Operação: Soma "; break;
    case array(1) = echo "Operação: Subtração"; break;
    case array(2) = echo "Operação: Soma"; break;
    case array(3) = echo "Operação: Soma"; break;
    case array(4) = echo "Operação: Soma"; break;
    }
?>