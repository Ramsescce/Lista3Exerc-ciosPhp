<?php
$vetor=array(1,7,66,550,76,34,3,654,54,21,23,44,293,3,8);
foreach ($vetor as $item) 
{
    if ($item % 2 == 0)
         echo "O Número $item é par \n";
    else echo "O Número $item é impar \n";
}