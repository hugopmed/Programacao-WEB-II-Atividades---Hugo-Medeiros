<?php

$itens = [
    ['nome' => "Arroz" , 'preco' => 10 , "qnt" => 4],
    ['nome' => "Feijão" , 'preco' => 20 , "qnt" => 6],
    ['nome' => "Carne" , 'preco' => 30 , "qnt" => 7],
];

$totalProduto = 0;
$totalCompra = 0;
$itemMaisCaro = $itens[0];
$itemMaisBarato = $itens[0];

foreach($itens as $aux) {
    $totalProduto = $aux['preco'] * $aux['qnt'];
    $totalCompra += $totalProduto;

    echo "Valor total do produto: " . $aux['nome'] .  " - R$" . $totalProduto . "<br>";

    if($itemMaisBarato['preco'] > $aux['preco']){
        $itemMaisBarato = $aux;
    }

    if($itemMaisCaro['preco'] < $aux['preco']){
        $itemMaisCaro = $aux;
    }
}

echo "Total da Compra: " . $totalCompra . "<br><br>";
echo "Item mais barato: " . $itemMaisBarato['nome'] . " - R$" . $itemMaisBarato['preco'] . "<br>";
echo "Item mais barato: " . $itemMaisCaro['nome'] . " - R$" . $itemMaisCaro['preco'] . "<br>";



?>