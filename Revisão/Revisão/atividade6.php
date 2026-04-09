<?php

$totalCompra = 0;

$itens = [
    [
        "nome" => "Feijão",
        "preco" => 30,
        "quantidade" => 1
    ],
    [
        "nome" => "Arroz",
        "preco" => 60,
        "quantidade" => 3
    ],
    [
        "nome" => "Carne",
        "preco" => 90,
        "quantidade" => 6
    ],
];

foreach ($itens as $aux) {

    $totalItens = $aux["preco"] * $aux["quantidade"];
    $totalCompra += $totalItens;

    echo "Produto: " . $aux["nome"] . "<br>";
    echo "Preço: " . $aux["preco"] . "<br>";
    echo "Quantidade: " . $aux["quantidade"] . "<br>";
    echo "Total do item em questão: " . $totalItens . "<br><br>";


}

echo "Valor total final: " . $totalCompra . "<br>";

?>