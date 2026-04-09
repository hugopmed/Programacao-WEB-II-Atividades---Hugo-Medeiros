<?php

$temp = [ 10, 35, 30, 28, 37, 17, 19];

$tempMedia = 0;
$maiorTemp = 0;
$menorTemp = $temp[0];
$tempMenorTrinta = 0;
$tempMaiorTrinta = 0;

foreach($temp as $t){
    $tempMedia += $t;
    if($maiorTemp < $t){
        $maiorTemp = $t;
    };
    if($menorTemp > $t){
        $menorTemp = $t;
    }
    if($t < 30){
        $tempMenorTrinta++;
    } else {
        $tempMaiorTrinta++;
    };

};

echo $tempMedia/7;
echo "<br>";
echo $maiorTemp;
echo "<br>";
echo $menorTemp;
echo "<br>";
echo $tempMenorTrinta;
echo "<br>";
echo $tempMaiorTrinta;

?>