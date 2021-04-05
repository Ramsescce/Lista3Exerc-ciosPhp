<?php

$vetor1 = array(1,3,22,45,6,100,46,66,2,77);
$vetor2 = array(1,101,10,91,87,100,22,66,43,2);
$vetor3 = array();

echo  "Elementos não comuns do Vetor1 em relação ao Vetor2 \n";

for ($i=0; $i < 10; $i++) {
    
    if ($vetor1[$i] != $vetor2[$i])
    {
        $vetor3 = $vetor1[$i];
        echo($vetor3 . " ");
        
        $vetor3 = $vetor2[$i];
        echo($vetor3 . " ");
    }
}

?>