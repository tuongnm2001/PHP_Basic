<?php 
    //Filter string 
    // $name = "Nguyen Tuong";
    // $filter = filter_var($name ,FILTER_SANITIZE_STRING);
    // echo $filter ;

    // //Filter int
    // $number = 2102 ;
    // if(!filter_var($number , FILTER_VALIDATE_INT) === false){
    //     echo "This is Integer";
    // }else{
    //     echo "This is not Integer";
    // }

    //filter email
    $email = "nguyentuong@gmail.com";
    $email = filter_var($email , FILTER_SANITIZE_EMAIL);

    if( !filter_var($email , FILTER_VALIDATE_EMAIL) == false ){
        echo "Email hợp lệ " ;
    }

?>