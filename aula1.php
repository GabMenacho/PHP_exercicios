<?php
    echo "Meus projetinhos"; //linha de comentário
    echo "<br>";
    echo "Primeito Teste"; #linha de comentario 2
    echo "<br>";
    echo "Imprimindo várias coisas";
    
    echo "<br>";
    echo "<br>";

    echo "Teste com aspas simples e duplas:";
    echo "<br>";
    $teste = "Tabi - teste bem sucedido";
    $inf = '----$teste--\n'; #aspas simples ele mostra exatamente o que tá escrito;
    $inf1 = "----$teste--\n"; #aqui já identificou que é uma variável e vai exibir o conteudo da var
    echo "$inf";
    echo "<br>";
    echo $inf1; 
?>