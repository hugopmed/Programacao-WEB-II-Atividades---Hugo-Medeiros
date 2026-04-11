<?php

$pessoas = [
    ['nome' => "Joao" , 'idade' => 20],
    ['nome' => "Maria" , 'idade' => 24],
    ['nome' => "Pedro" , 'idade' => 14],
    ['nome' => "Carlos" , 'idade' => 36],
    ['nome' => "Marta" , 'idade' => 13],
    ['nome' => "Cleide" , 'idade' =>76],
];

$mediaIdades = 0;
$maiorIdade = $pessoas[0];
$menorIdade = $pessoas[0];
$qntPessoasMaiorIdade = 0;
$qntPessoasMenorIdade = 0;

foreach($pessoas as $aux) {
    $mediaIdades += $aux['idade'];

    if($aux['idade'] > 18) {
        $qntPessoasMaiorIdade++;
    } else {
        $qntPessoasMenorIdade++;
    }

    if($maiorIdade['idade'] < $aux['idade']) {
        $maiorIdade = $aux;
    }

    if($menorIdade['idade'] > $aux['idade']) {
        $menorIdade = $aux;
    }
}

echo "Média das idades: " . $mediaIdades/6 . "<br>";
echo "Quantidaade de pessoas maiores de idade: " . $qntPessoasMaiorIdade . "<br>";
echo "Quantidaade de pessoas menores de idade: " . $qntPessoasMenorIdade . "<br>";
echo "Pessoa com a maior idade: " . $maiorIdade['nome'] . " --- Idade: " . $maiorIdade['idade'] . "<br>";
echo "Pessoa com a menor idade: " . $menorIdade['nome'] . " --- Idade: " . $menorIdade['idade'] . "<br>";



?>