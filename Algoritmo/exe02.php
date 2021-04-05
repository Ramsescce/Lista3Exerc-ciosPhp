<?php
$num = $_POST["num"];
echo 'O número : '.$num .' <br>';
if ($num  %  10 == 0)
{
    echo " É divisivel por 10.  <br>";
}
if ($num % 5 ==0 ) 
{
    echo " É divisivel por 5.  <br>";
}
if ($num % 2 == 0)
{
    echo " É divisivel por 2.  <br>";
    
} 

else

{
    
    echo "Não é divisivel por nenhum deles";
}
?> 