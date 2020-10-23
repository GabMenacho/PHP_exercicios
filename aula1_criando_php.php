<?php
    $titulo = 'Projetinhos da Aula 1 de PHP';
    $paragrafo = 'Neste projetinho estou aprendendo a criar variaveis para colocar nas minhas páginas 
    de html, mas o arquivo eu salvo na extensão.php <strong>Agora sim PHP /o/ </strong>';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo $titulo; ?></title>
    </head>
    <body>
        <p>Esse é meu projetinho da aula 1 de PHP e aqui entre parentesis vou acionar a 
        variável que eu criei que vai adicionar um texto --- ( <?php echo $paragrafo; ?>) ---- Pronto fim de texto.
        </p>        	

        <br>

        <p>Eu também criei uma variável para escrever o título e vou jogar aqui ----- ( <?php echo $titulo; ?>) </p>
        <br>

        <p>Posso chamar as minhas variáveis várias vezes onde eu quuiser ---(<?php echo $paragrafo; ?>) ---- e posso chamar meu título de novo --(<?php echo $titulo; ?>)---</p>

    </body>
</html>