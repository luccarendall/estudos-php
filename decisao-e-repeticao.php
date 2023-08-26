<!--Estruturas de decisão e repetição em PHP-->

<!--Estruturas de decisão-->
<!--if-->
<!--else-->
<!--elseif-->
<!--switch-->

<?php
// If else - normal
$var1 = 5;
$var2 = '5';

if($var1 == $var2){
    echo "As variáveis são iguais \n\n";
}else{
    echo "As variáveis não são iguais \n\n";
}
?>

<!--If else alternativo. Troca {} por : e coloca o endif no final-->
<?php
$var1 = 5;
$var2 = '5';

if($var1 == $var2):
    echo "As variáveis são iguais \n\n";
else:
    echo "As variáveis não são iguais \n\n";
endif;
?>

<!--Ternário-->
<?php
$var1 = 5;
$var2 = '5';

$comparacao = (($var1 === $var2)) ?
    "As variáveis são iguais e de mesmo tipo" : "As variáveis são diferentes em valor ou tipos";
    echo $comparacao;
    echo "\n\n";
?>

 <!--Switch-->
<?php
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

<!--while-->
<?php
$i = 1;
while($i < 10){
    echo "Valor de i: $i \n"
    // $i+=
    $i++;
}
echo "\n\n";
?>
<!--do-while-->
<?php
$j = 1;
do{
    echo "Valor de j: $j \n";
    $j++;
  }while($j < 10);
  
  die;
?>
<!--for-->
<?php
for($cont = 0; $cont < 10, $cont++){
    echo "$cont \n"
}
?>

<!--for com array-->
<?php
$frutasArray = ['laranja','ameixa','limao'];
for($i = 0; $i<count($frutasArray), $i++){ // Cria um contador e usa a função Count para verificar o tamanho do array (analogo ao .length)
    echo "Frutas: " . $frutasArray[$1] . "\n";
}
?>

<!--foreach-->
<?php
foreach($frutasArray as $frutas){
    echo "Frutas: " . $fruta . "\n"; // atribui valores dessa variável aqui dentro do meu array"
}
?>
