<?php 
    $myFile = fopen('newfile.txt' , "w") or die("lỗi");

    fwrite($myFile , "Hello World 1");

    fclose($myFile);
?>