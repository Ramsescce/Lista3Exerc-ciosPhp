<?php
$primeiroNum = $_POST["primeiroNum"];
$primeiroNum =(int)$primeiroNum;
$segundoNum = $_POST["segundoNum"];
$segundoNum = (int) $segundoNum;
$primeiroNum +=$segundoNum;

if ($primeiroNum > 20)
{
    $primeiroNum += 8;
    echo 'O número é maior que 20 , resultado '.$primeiroNum;
}
else 
{
    $primeiroNum -= 5;
    echo 'O numero é menor que 20, resultado '.$primeiroNum;
}
?>