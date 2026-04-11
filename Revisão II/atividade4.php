<?php

$processadores = [
    ['modelo' => "A1" , 'preco' => 1000, 'qnt' => 4],
    ['modelo' => "B2" , 'preco' => 1200, 'qnt' => 5],
    ['modelo' => "C3" , 'preco' => 800, 'qnt' => 6],
];

$totalModelo = 0;
$totalEstoque = 0;
$maisCaro = $processadores[0];
$maisBarato = $processadores[0];

foreach($processadores as $aux) {
    $totalModelo = $aux['preco'] * $aux['qnt'];
    $totalEstoque += $totalModelo;


    echo "Modelo: " . $aux['modelo'] . " - Total: R$" . $totalModelo . "<br>";

    if($maisBarato['preco'] > $aux['preco']) {
        $maisBarato = $aux;
    };

    if($maisCaro['preco'] < $aux['preco']) {
        $maisCaro = $aux;
    };
};

echo "Total do estoque: R$" . $totalEstoque . "<br><br>";
echo "Modelo mais caro: " . $maisCaro['modelo'] . " - R$" . $maisCaro['preco'] . "<br>";
echo "Modelo mais barato: " . $maisBarato['modelo'] . " - R$" . $maisBarato['preco'] . "<br>";


?>