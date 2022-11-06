<?php
    $opcion = intval($_POST['opcion']);
    $i = 0;
    
    do{
        echo $opcion . " x " . $i . " = " . ($opcion*$i) . "<br>";
        $i++;
    }while($i < 11);
?>
<html>
    <a href="index.html"><button>Regresar</button></a>
</html>