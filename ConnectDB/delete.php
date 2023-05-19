<?php 
    include 'connect.php';

    $id = $_GET['id'] ;

    $query = "DELETE FROM users WHERE id='$id'";

    $result = mysqli_query($conn , $query);
?>