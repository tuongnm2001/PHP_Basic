<?php 
    session_start();
    $_SESSION["name"] = "Tuong";

    echo $_SESSION['name'];
?>