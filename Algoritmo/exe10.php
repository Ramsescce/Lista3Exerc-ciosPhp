<?php
echo "Digite 20 valores : \n";

$vetor=array();
for($i=0;$i< 20;$i++)
{
    $valores =(int) fgets(STDIN);
    $vetor[]=$valores; 
}
$pos=array();
$neg=array();
foreach($vetor as $vet)
{
    ($vet<0) ? $neg[]=$vet : $pos[]=$vet;
}
$total = array_sum($pos);
$count = count($neg);

echo ' Soma dos positivos:' .$total;
echo ' Quantidade de negativos: '.$count;

?>