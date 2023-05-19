<?php 
    include 'connect.php' ;

    //CREARE USER

    // $firstName = 'Joe';
    // $lastName = 'Gomez';
    // $email = 'jg2@mail.com';
    // $emailVerifiedAt = 'weknngkwel';
    // $password = '263526592';
    // $rememberToken = 'wegujwefj';

    // $query = "INSERT INTO  `users` (`first_name` , `last_name`, `email`,`email_verified_at`, `password`, `remember_token` )
    //     VALUES ('$firstName',
    //     '$lastName',
    //     '$email',
    //     '$emailVerifiedAt',
    //     '$password',
    //     '$rememberToken')";
    // $result = mysqli_query($conn, $query);


    //READ USER
    // $sql = "SELECT * FROM users";
    // $result = mysqli_query($conn , $sql);

    
    // if(mysqli_num_rows($result) > 0){
    //     while($row = mysqli_fetch_array($result)){
    //         echo $row['id'] . " |  " . $row['first_name'] . "  | " 
    //         . $row['last_name'] . " |  " . $row['email'] . "  | " . $row['email_verified_at'] . "" ;
    //         echo "<br/>" ;
    //     }
        
    // }

    //DETELE USER 
    $sql = "DELETE FROM `users` WHERE id='26' ";
    mysqLi_query($conn , $sql);
   
?>