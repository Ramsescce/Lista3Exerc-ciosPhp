<?php
echo "Ler vários números e informar quantos
números entre 100 e 200 foram digitados. Se
o valor 0 for lido encerrar a execução.\n
Digite alguns números : ";
$valor= fgets(STDIN);
$num=0;

while ($valor!=0) 
{
    if (($valor>100) && ($valor<200)) 
    {
        $num  = $num+1;
    }
    $valor= fgets(STDIN);
    
}
echo 'Foram digitados '.$num.' valores entre 100 e 200.';
?>