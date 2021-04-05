<?php
$num = $_POST["num"];

$vetor = array(1 => 'Janeiro' , 2 => 'Fevereiro', 3 => 'Março',
    4 => 'Abril', 5 => 'Maio' , 6 => 'Junho', 7 => 'Julho',
    8 => 'Agosto', 9 => 'Setembro' , 10 => 'Outubro',
    11 => 'Novembro' , 12 => 'Dezembro');

if ($num > 12 || $num < 1){
    echo"Não existe mês com o numero digitado!";
}
else
{
    echo'O mês digitado foi, '.$vetor[$num];
}
?>