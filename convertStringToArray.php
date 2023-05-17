<?php 
    //1.covert string to array
    // $a = "19/05/1890";
    // $arr = explode("/",$a);
    // var_dump($arr)


    //2.convert array to string 
    $myArr = array('xin', 'chao');

    $b = implode(' - ' ,$myArr);

    var_dump($b);
?>