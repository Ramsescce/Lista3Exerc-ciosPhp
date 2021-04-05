<?php
$num = $_POST["num"];
$produto = 1;
for($i=1 ; $i<= $num; $i++)
{
    $produto = $produto*$i;
    echo $i.',';
}
    echo 'Produto: '.$produto;
    ?>