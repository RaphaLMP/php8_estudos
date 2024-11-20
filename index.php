<?php

// Aqui são as variáveis
$nome = "Raphael";
$sobrenome = "Martins";
$idade = 24;
$numero = 10;
$mediaIdade = 30;

// echo $idade ."<br>";
echo $nome . " " . $sobrenome . " e a sua idade é " . $idade;

$total = $idade + $numero;
echo "<p>" . $total;

// Tomadas de decisão IF
if ($idade > $mediaIdade) {
    echo "<p> Idade maior que " . $mediaIdade;
}else if($idade == 23){
    echo "<p> Idade igual a 23 anos";
}else {
    echo "<p> Idade não é maior que " . $mediaIdade . " e também não é igual a 23 anos";
}

?>