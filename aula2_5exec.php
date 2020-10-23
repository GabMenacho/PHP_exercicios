<?php
/*criar um programa .php para que possa ser criado um array com 5 informações quaisquer 
e a estrutura de repetição deverá exibir a informação que está contida no array, 
bem como informar qual é o índice daquela informação.
*/

$frutas = ["abacaxi", "amora", "melancia", "pêssego", "nectarina"];

    for($cont = 0; $cont < count($frutas); $cont++)
    {
        echo"<br>";
        echo $frutas[$cont];
        echo " Índice $cont";
    }

?>