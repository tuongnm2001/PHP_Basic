<?php 
    //$name = array("Nguyen", "Minh", "Tuong");

    //Cach 1
    //echo $name[0]." ". $name[1]." ". $name[2] ;

    //Cach 2 
    // $name[0] = "Nguyen" ;
    // $name[1] = "Minh";
    // $name[2] = "Tuong";
    // echo $name[0] . " " . $name[1] . " ". $name[2]

    //Cach 3 
    // $people = array("Mina" => "1998" , "Ben"=>"1990" , "Lio"=>"2005");
    // echo $people["Ben"];

    // echo count($people1);

    // //Array da chieu
    // $myArr = array(
    //     array("Mina" , "1998" , "UK"),
    //     array("Ben" , "1990" , "US"),
    //     array("Lio" , "2009" , "ARG")
    // );

    // echo $myArr[2][0];

    $name = array("Nguyen", "Minh" , "Tuong");

    unset($name['1']);

    print_r($name);
?>