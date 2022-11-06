<?php
     $A = intval ($_POST['a']);
     $B = intval ($_POST['b']);

     while($A < $B){
         $A++;
         echo $A . "<br/>";
     }
?>