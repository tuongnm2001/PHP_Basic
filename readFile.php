<?php 
    // echo readfile("helloFile.txt");

    $myFile = fopen("helloFile.txt", "r") or die ("Error"); // open file
    
    echo fread($myFile , filesize("helloFile.txt")) ; // read file

    fclose($myFile); // close file
?>