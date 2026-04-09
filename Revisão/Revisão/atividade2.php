<?php

$salarios = [ 3000, 9000, 3999, 1800, 6744, 1590, 5483, 1556];

$mediaSalarial = 0;
$menorSalario = $salarios[0];
$maiorSalario = 0;
$salarioAcima = 0;
$salarioAbaixo = 0;

foreach($salarios as $aux){
    $mediaSalarial += $aux;
    if($$maiorSalario < $aux){
        $maiorSalario += $aux;
    };
    if($menorSalario > $aux){
        $menorSalario = $aux;
    };
    if($aux >= 2000){
        $salarioAcima++;
    } else {
        $salarioAbaixo++;
    };

};

echo ($mediaSalarial/80) . PHP_EOL;
echo ($menorSalario) . PHP_EOL;
echo ($maiorSalario) . PHP_EOL;
echo ($salarioAbaixo) . PHP_EOL;
echo $salarioAbaixo;

?>