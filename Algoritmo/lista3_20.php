
<?php
Echo "Matriz 5x5: ";
$m = array(array(1,2,3,4,5),
    array(2,3,4,5,1),
    array(3,4,5,1,2),
    array(4,5,1,2,3),
    array(5,1,2,3,4));


foreach ($m as $chave => $valor)
{
    $mTotal = "\n";
    foreach ($valor as $total => $result)
    {
        $mTotal.= $result;
    }
    
    echo $mTotal;
    
}
echo "\n Matriz Impar \n";
foreach ($m as $v1)
{
    foreach ($v1 as $v2) 
    {
      
        
        if ($v2 & 1) 
        { 
            echo $v2. ",";
        }
    }
}
echo" \n Matriz par \n";

foreach ($m as $v2)
{
    foreach ($v2 as $v1) 
    {
        
      
        if ($v1 % 2 == 0)
        {
            
            echo  $v1. ',';
        }
    }
}


?>
