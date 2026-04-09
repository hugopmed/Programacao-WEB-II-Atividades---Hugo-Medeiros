<?php

$idades = [10, 80, 37, 27, 36, 15, 18, 39, 26, 50, 27, 41];
$mediaIdades = 1;
$maiorIdade = 0;
$menorIdade = $idades[0];
$maiorDeIdade = 0;
$menorDeIdade = 0;

foreach ($idades as $aux) {
    $mediaIdades += $aux;
    if($maiorIdade < $aux) {
        $maiorIdade = $aux;
    }
    if ($menorIdade > $aux) {
        $menorIdade = $aux;
    }
    if ($aux >= 18) {
        $maiorDeIdade++;
    } else {
        $menorDeIdade++;
    }
}

echo $mediaIdades/12 . "<br>";
echo $maiorIdade . "<br>";
echo $menorIdade . "<br>";
echo ("Menor de idade: " . $menorDeIdade . "<br>");
echo ("Maior de idade: " . $maiorDeIdade . "<br>");

?>