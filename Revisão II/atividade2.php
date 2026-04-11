<?php

$salarios = [
    [ 'nome' => "A1" , 'prof' => "B1" , 'salario' => 2100 ],
    [ 'nome' => "A2" , 'prof' => "B2" , 'salario' => 1900 ],
    [ 'nome' => "A3" , 'prof' => "B3" , 'salario' => 3000 ],
    [ 'nome' => "A4" , 'prof' => "B4" , 'salario' => 2400 ],
    [ 'nome' => "A5" , 'prof' => "B5" , 'salario' => 1700 ]
];

$mediaSalarial = 0;
$maiorSalario = $salarios[0];
$menorSalario = $salarios[0];
$salAcima2k = 0;
$salAbaixo2k = 0;

foreach($salarios as $aux) {
    $mediaSalarial += $aux['salario'];

    if($maiorSalario['salario'] < $aux['salario']) {
        $maiorSalario = $aux;
    }

    if($menorSalario['salario'] > $aux['salario']) {
        $menorSalario = $aux;
    }

    if($aux['salario'] > 2000) {
        $salAcima2k++;
    } else {
        $salAbaixo2k++;
    }

}

echo "Media salarial: " . $mediaSalarial/5 . "<br>";
echo "Pessoas que recebem acima de R$2000,00: " . $salAcima2k . "<br>";
echo "Pessoas que recebem abaixo de R$2000,00: " . $salAbaixo2k . "<br>";
echo "Pessoa com maior salario: " . $maiorSalario['nome'] . " --- Salario: " . $maiorSalario['salario'] . "<br>";
echo "Pessoa com menor salario: " . $menorSalario['nome'] . " --- Salario: " . $menorSalario['salario'] . "<br>";




?>