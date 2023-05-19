<?php 

    include 'student.php';

    $objStudent1 = new Student ;
    
    // echo $objStudent1->name ;
    $objStudent1->setName("Trent Alexander-Arnold");
    echo $objStudent1->getName()
   
?>