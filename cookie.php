<?php 
    $cookieName = "user";
    $cookieValue = "Tuong";

    setcookie($cookieName,$cookieValue,time()+(86400 * 30),"/");

    if(isset($_COOKIE[$cookieName])){
        echo "Cookie " . $cookieName . "đang chạy" ;
    }else{
        echo "Cookie không tồn tại ";
    }

?>