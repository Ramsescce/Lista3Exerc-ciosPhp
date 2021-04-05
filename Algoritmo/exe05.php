<?php
$ladOa = $_POST["ladOa"];
$ladOb= $_POST["ladOb"];
$ladOc = $_POST["ladOc"];

if (($ladOa != $ladOb) && ($ladOc !=$ladOa) &&($ladOb != $ladOc) )
{
    echo " Triagulo Escaleno";
}
elseif (($ladOa == $ladOb) && ($ladOc ==$ladOa) &&($ladOb == $ladOc) )
{
    echo " Triangulo Equilátero";
}
else
{
    echo  "Triangulo Isóceles";
}
?>