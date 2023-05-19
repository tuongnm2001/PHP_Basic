<?php 
    include 'connect.php';

    // $query = "SELECT * FROM users WHERE id=3";
    // $query = "SELECT * FROM users WHERE id=3 OR id=100";
    // $query = "SELECT * FROM users WHERE first_name LIKE '%obb%'";
    // $query = "SELECT * FROM users ORDER BY id ASC ";
    $query = "SELECT * FROM users LIMIT 0,2 ";

    $result = mysqli_query($conn , $query);

    if(mysqli_num_rows($result) > 0 ){
        while($row = mysqli_fetch_array($result)){
            echo $row['id'] . "  " . $row['first_name'];
        }
    }
?>