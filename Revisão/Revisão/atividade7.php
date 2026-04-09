<?php
$celulares = [
    [
        "modelo" => "Iphone",
        "preco" => 400,
        "quantidade" => 5
    ],
    [
        "modelo" => "Xiaomi",
        "preco" => 300,
        "quantidade" => 10
    ],
    [
        "modelo" => "Samsung",
        "preco" => 350,
        "quantidade" => 7
    ],

];

$valorTotal = 0;
$totalGeral = 0;

foreach($celulares as $celular){

    $valorTotal += $celular['preco'] * $celular['quantidade'];
    $totalGeral += $celular['quantidade'];

    echo "Valor Total do modelo " . $celular['modelo'] . ": " . $valorTotal . "<br>";

};

echo "Estoque Geral: " . $totalGeral . "<br>";

?>