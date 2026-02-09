<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $novoProduto = [
        "id" => $_POST["id"],
        "title" => $_POST["title"],
        "price" => $_POST["price"],
        "desc" => $_POST["desc"],
        "categ" => $_POST["categ"]
    ];

    $arquivo = "produtos.json";

    if (file_exists($arquivo)) {
        $conteudo = file_get_contents($arquivo);
        $produtos = json_decode($conteudo, true);

        if (!$produtos) {
            $produtos = [];
        }
    } else {
        $produtos = [];
    }

    $produtos[] = $novoProduto;

    $jsonFinal = json_encode($produtos, JSON_PRETTY_PRINT);
    file_put_contents($arquivo, $jsonFinal);

    echo "✅ PRODUTO SALVO COM SUCESSO!<br><br>";
    echo "ID: {$novoProduto['id']}<br>";
    echo "Título: {$novoProduto['title']}<br>";
    echo "Preço: {$novoProduto['price']}<br>";
    echo "Descrição: {$novoProduto['desc']}<br>";
    echo "Categoria: {$novoProduto['categ']}<br>";
}
?>