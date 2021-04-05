<?php

$vetor = array(229,21,32,30,8,24,18,25,31,17,19,24,22,2018,2020,2010,13,21,89,60);
$maior = $vetor[0];
$menor = $vetor[0];
$par = 0;
$soma = array_sum($vetor);

foreach ($vetor as $item)
{
    if($item > $maior)
    {
        $maior = $item;
    }
    if($item < $menor)
    {
        $menor = $item;
    }
    if($item % 2 == 0)
    {
        $par++;
    }
}

$percPar = ($par/20)*100;

echo "O maior elemento desse Vetor é $maior\n";
echo "E o menor elemento desse Vetor é $menor\n";
echo "Porcentagem de Numeros Pares: $percPar%\n";
echo "A soma dos Elementos do Array é: $soma";