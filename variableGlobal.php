<?php 
    // $GLOBALS
    $a = 10 ;
    $b = 5 ;

    function ham(){
        $c =  $GLOBALS['a'] + $GLOBALS['b']  ;
        echo $c ; 
    }

    ham();
?>