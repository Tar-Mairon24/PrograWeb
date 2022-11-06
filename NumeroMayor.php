<?php
if ($_SERVER['REQUEST_METHOD']=='POST')
{
    $a = floatval ($_POST['a']);
    $b = floatval ($_POST['b']);
    $c = floatval ($_POST['c']);
    if($a>$b)
    {
        $mayor=$a;
    }
    else
    {
        $mayor=$b;
    }
    if($mayor<$c)
        $mayor=$c;
    echo 'Valor de mayor: ' . $mayor . "<br/>";
}
 
?>