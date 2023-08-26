<!--Estruturas de decisão e repetição em PHP-->

<!--Estruturas de decisão-->
<!--if-->
<!--else-->
<!--elseif-->
<!--switch-->

<?php
// If else normal
$var1 = 5;
$var2 = '5';

if($var1 == $var2){
    echo "As variáveis são iguais \n\n";
}else{
    echo "As variáveis não são iguais \n\n";
}

// If else alternativo. Troca {} por : e coloca o endif no final
$var1 = 5;
$var2 = '5';

if($var1 == $var2):
    echo "As variáveis são iguais \n\n";
else:
    echo "As variáveis não são iguais \n\n";
endif;

// Ternário
$var1 = 5;
$var2 = '5';

$comparacao = (($var1 === $var2)) ?
    "As variáveis são iguais e de mesmo tipo" : "As variáveis são diferentes em valor ou tipos";
    echo $comparacao;
    echo "\n\n";
    
// Switch
echo "\n\n";

$fruta = "Laranja";
switch($fruta){
    case:'Laranja':
        echo "A fruta é uma Laranja";
        break;
    case:'Uva':
        echo "A fruta é uma Uva";
        break;
    case:'Banana':
        echo "A fruta é uma Banana";
        break;
    default:
        echo "Fruta desconhecida";
        break;
}
?>

<!--Estruturas de repetição-->
<!--while-->
<!--do-while-->
<!--for-->
<!--foreach-->

<?php

?>
