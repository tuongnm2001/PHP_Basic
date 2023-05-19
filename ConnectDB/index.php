<?php 
    include 'connect.php' ;

    $firstName = 'Joe';
    $lastName = 'Gomez';
    $email = 'jg2@mail.com';
    $emailVerifiedAt = 'weknngkwel';
    $password = '263526592';
    $rememberToken = 'wegujwefj';

    $query = "INSERT INTO  `users` (`first_name` , `last_name`, `email`,`email_verified_at`, `password`, `remember_token` )
        VALUES ('$firstName',
        '$lastName',
        '$email',
        '$emailVerifiedAt',
        '$password',
        '$rememberToken')";
    $result = mysqli_query($conn, $query);

?>