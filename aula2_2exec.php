<?php

#Um comerciante comprou um produto e quer vendê-lo com lucro de 45% se o valor
#da compra for menor que 20,00; caso contrário, o lucro será de 30%. 
#Informar o nome do comerciante e o valor do produto. 
#Exiba o nome do comerciante e valor da venda atualizado.

$v_compra = 20.00;
$v_produto = 10.00;
$nomeComerciante = "Rose";

if ($v_compra <= 20.00) 
{
    $v_produtoAtualizado = $v_produto * 1.45 ;
    $v_venda = ($v_compra-$v_produto) + $v_produtoAtualizado;
    echo "Nome do comerciante: $nomeComerciante";
    echo "<br>";
    echo "Valor do produto:  $v_produto";
    echo "<br>";
    echo "Valor do produto atualizado: $v_produtoAtualizado";
    echo "<br>";
    echo "Valor de venda atualizado: $v_venda";
}

else
{
    $v_produtoAtualizado = $v_produto * 1.30;
    $v_venda = ($v_compra-$v_produto) + $v_produtoAtualizado;
    echo "Nome do comerciante: $nomeComerciante";
    echo "<br>";
    echo "Valor do produto:  $v_produto";
    echo "<br>";
    echo "Valor do produto atualizado: $v_produtoAtualizado";
    echo "<br>";
    echo "Valor de venda atualizado: $v_venda";
}


?>