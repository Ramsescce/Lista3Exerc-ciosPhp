<?php
$primeiroNum = $_POST["primeiroNum"];
$segundoNum= $_POST["segundoNum"];
$terceiroNum = $_POST["terceiroNum"];
$numeros = array($primeiroNum,$segundoNum,$terceiroNum);
echo " Numeros em ordem decrescente : \n";
rsort($numeros, SORT_DESC);
foreach ($numeros as $num) 
{
    echo "$num\n";
}
echo "\n";
