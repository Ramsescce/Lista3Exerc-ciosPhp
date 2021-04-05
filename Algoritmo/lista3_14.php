<?php
echo "Chico tem 1,50m e cresce 2 centímetros por
ano, enquanto Juca tem 1,10m e cresce 3
centímetros por ano. Construir um algoritmos
que calcule e imprima quantos anos serão
necessários para que Juca seja maior que
Chico";
    
$centChico = 150; 
$centJuca = 110;  
$anos = 0;

while($centChico >= $centJuca) {
    
    $centChico += 2;
    $centJuca += 3;
    $anos++;
}

echo "Serão necessário $anos Anos para que Juca seja maior do que Chico.";

?>